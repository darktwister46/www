<?php

namespace Database\Seeders;

use App\Models\Tarjeta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Tarjeta::factory(5)->create();
    }
}
