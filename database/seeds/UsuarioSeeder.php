<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

        DB::table('usuario')->insert([
            'nome' => 'Renata Rocha',
            'email' => 'renata@gmail.com',
            'senha' => Hash::make('1234'),
            'genero'=>'feminino',
            'admin'=>'0',
            'condominio_id'=> '1'
        ]);

        DB::table('usuario')->insert([
            'nome' => 'Paula Guedes',
            'email' => 'paula@gmail.com',
            'senha' => Hash::make('1234'),
            'genero'=>'feminino',
            'admin'=>'0',
            'condominio_id'=> '1'
        ]);

        DB::table('usuario')->insert([
            'nome' => 'Gilvan Santos',
            'email' => 'gilvan@gmail.com',
            'senha' => Hash::make('1234'),
            'genero'=>'masculino',
            'admin'=>'0',
            'condominio_id'=> '1'
        ]);

        DB::table('usuario')->insert([
            'nome' => 'Jonathas Lopes',
            'email' => 'jonathaslopes20@gmail.com',
            'senha' => Hash::make('1234'),
            'genero'=>'masculino',
            'admin'=>'0',
            'condominio_id'=> '1'
        ]);
    }
}
