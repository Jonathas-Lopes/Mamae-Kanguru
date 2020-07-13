<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'nome' => 'Admin',
            'email' => 'admin@gmail.com',
            'senha' => Hash::make('teste'),
            'genero'=>'outro',
            'admin'=>'1',
            'condominio_id'=> '1'
        ]);
    }
}
