<?php

namespace Database\Seeders;

use App\Models\Obat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'name' => 'Ambroxol',
            'price' => '2000'
        ]);

        Obat::create([
            'name' => 'Amoxicillin',
            'price' => '7000'
        ]);

        Obat::create([
            'name' => 'Ampicillin',
            'price' => '3000'
        ]);

        Obat::create([
            'name' => 'Dexamethasone',
            'price' => '12000'
        ]);

        Obat::create([
            'name' => 'Dopamine',
            'price' => '34000'
        ]);

        Obat::create([
            'name' => 'Flunarizin',
            'price' => '5000'
        ]);

        Obat::create([
            'name' => 'Gentamicin Sulfate',
            'price' => '8000'
        ]);

        Obat::create([
            'name' => 'Ketoconazole',
            'price' => '6000'
        ]);
        
        Obat::create([
            'name' => 'Ketoprofen',
            'price' => '20000'
        ]);

        Obat::create([
            'name' => 'Ranitidin',
            'price' => '10000'
        ]);



    }
}
