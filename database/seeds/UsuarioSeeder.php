<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'nome' => 'Teste adm',
            'email' => 'teste@adm',
            'senha' => 'teste',
            'genero'=>'feminino',
            'admin'=>'1',
            'condominio_id'=> '1'
        ]);
    }
}
