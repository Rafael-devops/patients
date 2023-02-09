<?php

namespace Database\Seeders;

use App\Models\Patients;
use Illuminate\Database\Seeder;

class PatientsSeeder extends Seeder
{
    public function run(): void
    {
        Patients::factory()->count(10)->create();
    }
}
