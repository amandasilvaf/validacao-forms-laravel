<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clientes')->insert([
            'nome' => "Amanda",
            'idade' => 26,
            'email' => "teste@teste.com",
            'endereco' => "Av. Maringa",
        ]);

        DB::table('clientes')->insert([
            'nome' => "Márcia",
            'idade' => 50,
            'email' => "teste@teste2.com",
            'endereco' => "Av. Paraná",
        ]);

        DB::table('clientes')->insert([
            'nome' => "Burnes",
            'idade' => 50,
            'email' => "teste@teste3.com",
            'endereco' => "Av. Bacon",
        ]);

    }
}
