<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         Horario::factory(20)->create();

        // $horario = new Horario();
        // $horario -> fecha = '2023-01-01';
        // $horario -> hora = '14:00';
        // $horario -> estado = 'disponible';
        // $horario -> save();

        // $horario2 = new Horario();
        // $horario2 -> fecha = '2023-01-01';
        // $horario2 -> hora = '14:30';
        // $horario2 -> estado = 'disponible';
        // $horario2 -> save();

        // $horario3 = new Horario();
        // $horario3 -> fecha = '2023-01-01';
        // $horario3 -> hora = '15:00';
        // $horario3 -> estado = 'disponible';
        // $horario3 -> save();




    }
}
