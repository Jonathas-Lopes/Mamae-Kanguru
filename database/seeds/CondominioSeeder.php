<?php

use Illuminate\Database\Seeder;

class CondominioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condominio')->insert([
            "nome"=>"Condomínio Eva Pericó Rachid",
            "endereco"=>"R. José Otoní, 284"
        ]);
    }
}
