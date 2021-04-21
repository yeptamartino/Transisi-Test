<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Company;
class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $company = Company::all()->first();

        $employee = new Employee([
            'name' => 'Yepta Martino',
            'email' => 'yeptamartino@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Banbang Sutejo',
            'email' => 'bambang@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Adi Satria',
            'email' => 'adisatria@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Bagas Sanjaya',
            'email' => 'bagasanjaya@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Martino',
            'email' => 'martino@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Santoso',
            'email' => 'santoso@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Ajeng Rahyu',
            'email' => 'ajengrahayu@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();

        $employee = new Employee([
            'name' => 'Putri Astria',
            'email' => 'putriastria@gmail.com',
            'company_id' => $company->id,
        ]);
        $employee->save();

        $employee = new Employee([
            'name' => 'Indah Kumala',
            'email' => 'indahkumala@gmail.com',
            'company_id' => $company->id,
        ]);
        $employee->save();

        $employee = new Employee([
            'name' => 'Baim Wong',
            'email' => 'baimwong@gmail.com',
            'company_id' => $company->id,
        ]);

        $employee->save();
    }
}
