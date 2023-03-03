<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        $user = new User();
        $user->name = 'Ismael';
        $user->email = 'icr0008@alu.medac.es';
        $user->email_verified_at = now();
        $user->password ='$2a$12$0Dg8V3SUtpCA4/JNcXjZzeVNwm4V/04sKZNN5.uTKxa7obrkSWkkO';
        $user->telefono=fake()->phoneNumber();
        $user->save();
    }
}
