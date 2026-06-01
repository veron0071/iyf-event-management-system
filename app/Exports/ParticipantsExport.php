<?php

namespace App\Exports;

use App\Models\Participant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class ParticipantsExport implements
    FromQuery,
    WithHeadings,
    WithMapping,
    WithStyles,
    WithColumnWidths,
    WithTitle
{
    protected Request $request;
    protected int $rowNumber = 0;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function title(): string
    {
        return 'Peserta Yoga 2026';
    }

    public function query()
    {
        $query = Participant::with('shirtSize')->latest();

        if ($search = $this->request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('registration_code', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($type = $this->request->get('type')) {
            $query->where('participant_type', $type);
        }

        if ($pay = $this->request->get('pay')) {
            $query->where('payment_status', $pay);
        }

        if ($this->request->filled('checkin')) {
            $query->where('checkin_status', (bool) $this->request->get('checkin'));
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'No',
            'Kode Registrasi',
            'Nama Lengkap',
            'Email',
            'No. HP',
            'Tipe Peserta',
            'Kota',
            'Jenis Kelamin',
            'Ukuran Baju',
            'Status Pembayaran',
            'Tanggal Bayar',
            'Status Check-in',
            'Waktu Check-in',
            'Tanggal Daftar',
        ];
    }

    public function map($participant): array
    {
        $this->rowNumber++;

        return [
            $this->rowNumber,
            $participant->registration_code,
            $participant->name,
            $participant->email,
            $participant->phone ?? '-',
            ucfirst($participant->participant_type),
            $participant->city ?? '-',
            ucfirst($participant->gender ?? '-'),
            $participant->shirtSize->name ?? '-',
            $participant->payment_status === 'paid' ? 'Lunas' : 'Belum Verifikasi',
            $participant->paid_at ? \Carbon\Carbon::parse($participant->paid_at)->format('d/m/Y H:i') : '-',
            $participant->checkin_status ? 'Hadir' : 'Belum',
            $participant->checkin_at ? \Carbon\Carbon::parse($participant->checkin_at)->format('d/m/Y H:i') : '-',
            $participant->created_at ? \Carbon\Carbon::parse($participant->created_at)->format('d/m/Y H:i') : '-',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 18,
            'C' => 28,
            'D' => 30,
            'E' => 16,
            'F' => 14,
            'G' => 16,
            'H' => 14,
            'I' => 12,
            'J' => 20,
            'K' => 18,
            'L' => 16,
            'M' => 18,
            'N' => 18,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $lastRow = $this->rowNumber + 1;

        // Header row style
        $sheet->getStyle('A1:N1')->applyFromArray([
            'font' => [
                'bold'  => true,
                'color' => ['rgb' => 'FFFFFF'],
                'size'  => 11,
            ],
            'fill' => [
                'fillType'   => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '1A3A2A'],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical'   => Alignment::VERTICAL_CENTER,
            ],
        ]);

        $sheet->getRowDimension(1)->setRowHeight(22);

        // Zebra stripes on data rows
        for ($row = 2; $row <= $lastRow; $row++) {
            if ($row % 2 === 0) {
                $sheet->getStyle("A{$row}:N{$row}")->applyFromArray([
                    'fill' => [
                        'fillType'   => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'F5F2EA'],
                    ],
                ]);
            }
        }

        // Border seluruh tabel
        $sheet->getStyle("A1:N{$lastRow}")->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color'       => ['rgb' => 'E4DDD0'],
                ],
            ],
        ]);

        // Center: No, Tipe, Gender, Baju, Status, Check-in
        $sheet->getStyle("A2:A{$lastRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("F2:F{$lastRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("H2:H{$lastRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("I2:I{$lastRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("L2:L{$lastRow}")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // Warnai kolom Status Pembayaran
        for ($row = 2; $row <= $lastRow; $row++) {
            $val = $sheet->getCell("J{$row}")->getValue();
            if ($val === 'Lunas') {
                $sheet->getStyle("J{$row}")->applyFromArray([
                    'font' => ['color' => ['rgb' => '1A5C30'], 'bold' => true],
                    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'EAF5EE']],
                ]);
            } elseif ($val === 'Belum Verifikasi') {
                $sheet->getStyle("J{$row}")->applyFromArray([
                    'font' => ['color' => ['rgb' => '92510A'], 'bold' => true],
                    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'FEF3E8']],
                ]);
            }

            // Warnai kolom Check-in
            $ci = $sheet->getCell("L{$row}")->getValue();
            if ($ci === 'Hadir') {
                $sheet->getStyle("L{$row}")->applyFromArray([
                    'font' => ['color' => ['rgb' => '27500A'], 'bold' => true],
                    'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => 'EAF3DE']],
                ]);
            }
        }

        // Freeze header row
        $sheet->freezePane('A2');

        return [];
    }
}