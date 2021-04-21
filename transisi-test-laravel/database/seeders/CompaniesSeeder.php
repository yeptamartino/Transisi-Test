<?php

namespace Database\Seeders;
use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company([
            'name' => 'Transisi',
            'email' => 'transisi@gmail.id',
            'website' => 'https://transisi.id/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  
        
        $company = new Company([
            'name' => 'Ghack Dev',
            'email' => 'ghack@gmail.com',
            'website' => 'https://ghackdev.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  

        $company = new Company([
            'name' => 'Batavia Net',
            'email' => 'batavia@gmail.com',
            'website' => 'https://batavia.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  

        $company = new Company([
            'name' => 'Cyber Olympus',
            'email' => 'cyber@gmail.id',
            'website' => 'http://www.cyberolympus.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  


        $company = new Company([
            'name' => 'Agung Sebtosa',
            'email' => 'agungsentosa@gmail.com',
            'website' => 'https://agungsentosa.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  

        $company = new Company([
            'name' => 'Glints',
            'email' => 'glints@gmail.com',
            'website' => 'https://glints.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  

        $company = new Company([
            'name' => 'Sayur Box',
            'email' => 'sayurbox@gmail.com',
            'website' => 'https://www.sayurbox.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  

        $company = new Company([
            'name' => 'Sampurna',
            'email' => 'sampurna@gmail.com',
            'website' => 'https://sampurna.com/',
            'logo' => 'default.jpg',
        ]);

        $company->save();  

        $company = new Company([
            'name' => 'Gudang Garam',
            'email' => 'classmild@gmail.com',
            'website' => 'https://sampurna.com/',
            'logo' => 'default.jpg',
        ]); 

        $company->save();
        
        $company = new Company([
            'name' => 'Class Mild',
            'email' => 'classmild@gmail.com',
            'website' => 'https://clasmild.com/',
            'logo' => 'default.jpg',
        ]); 

        $company->save();
    }
}
