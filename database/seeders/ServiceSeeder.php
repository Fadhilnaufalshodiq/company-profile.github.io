<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk mengimpor kelas DB

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('services')->insert([
            ['name' => 'Service 1', 'description' => 'Description for service 1'],
            ['name' => 'Service 2', 'description' => 'Description for service 2'],
            ['name' => 'Service 3', 'description' => 'Description for service 3'],
        ]);
    }
}