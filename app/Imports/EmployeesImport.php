<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeesImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Employee([

            'name' => $row['nama'] ?? null,

            'npp' => $row['npp'] ?? null,

            'employee_type' =>
                $row['jenis_pegawai'] ?? null,

            'email' =>
                $row['email'] ?? null,

            'phone' =>
                $row['no_hp'] ?? null,

            'birth_date' => null,

        ]);
    }
}