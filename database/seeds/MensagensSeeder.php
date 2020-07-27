<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MensagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mensagem')->insert([
            'mensagem' => 'Olá! Aqui eu vou falar algo muito interessante sobre esse projeto.',
            'hora_envio' => now(),
            'usuario_id' => '2',
            'hashtag' => 'aviso',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Olá! Aqui eu vou falar algo muito interessante sobre esse projeto.',
            'hora_envio' => now(),
            'usuario_id' => '4',
            'hashtag' => 'ofereço',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Vamos fazer um HH virtual, pessoal?',
            'hora_envio' => now(),
            'usuario_id' => '3',
            'hashtag' => 'procuro',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Alguém do Piauí até Jundiaí?',
            'hora_envio' => now(),
            'usuario_id' => '5',
            'hashtag' => 'procuro',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Olá! Aqui eu vou falar algo muito interessante sobre esse projeto.',
            'hora_envio' => now(),
            'usuario_id' => '2',
            'hashtag' => 'aviso',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Olá! Aqui eu vou falar algo muito interessante sobre esse projeto.',
            'hora_envio' => now(),
            'usuario_id' => '4',
            'hashtag' => 'ofereço',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Vou sentir saudades!',
            'hora_envio' => now(),
            'usuario_id' => '3',
            'hashtag' => 'aviso',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Ofereço aulas de J.Query aos sábados. Quem quiser me chama!',
            'hora_envio' => now(),
            'usuario_id' => '5',
            'hashtag' => 'ofereço',
            'condominio_id' => 1
        ]);
    }
}
