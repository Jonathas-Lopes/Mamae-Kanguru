<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            "id"=>1,
            "nome"=>"Condomínio Eva Pericó Rachid",
            "endereco"=>"R. José Otoní, 284"
        ]);
    }
}
