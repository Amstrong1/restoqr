<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('structures')->insert([
            'name' => 'RestoQR',
            'email' => 'contact@restoqr.site',
            'tel' => '00000000',
            'address' => 'Bohicon',
            'logo' => 'assets/images/logo/logo.jpeg',
            'active' => true,
        ]);
    }
}
