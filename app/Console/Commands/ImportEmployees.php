<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Imports\EmployeesImport;

use Maatwebsite\Excel\Facades\Excel;

class ImportEmployees extends Command
{
    protected $signature =
        'employees:import';

    protected $description =
        'Import employees from excel';

    public function handle()
    {
        Excel::import(
            new EmployeesImport,
            storage_path('app/employees.xlsx')
        );

        $this->info(
            'Employees imported successfully.'
        );
    }
}