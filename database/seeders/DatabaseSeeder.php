<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $pessoa = new \App\Models\Pessoa();

        $pessoa->nome = "Maxwell";
        $pessoa->sobrenome = "Ferreira de Lima";
        $pessoa->email = "maxwel@emailteste.com";
        $pessoa->telefone = "028999223344";
        $pessoa->pessoa_juridica = false;
        $pessoa->cpf = "123.456.789.12";
        $pessoa->cnpj = null;

        $pessoa->save();
    }
}
