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
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'senha' => Hash::make('password'),
            'genero'=>'F',
            'admin'=>'1',
            'condominio_id'=> '1'
        ]);
    }
}
