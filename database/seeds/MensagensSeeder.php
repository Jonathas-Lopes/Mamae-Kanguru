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
            'mensagem' => 'Quero montar um grupo para fazer yoga ao ar livre quando acabar a quarentena. Quem tiver interesse me chama!',
            'hora_envio' => now(),
            'usuario_id' => '2',
            'hashtag' => 'ofereço',
            'condominio_id' => 1
        ]);

        DB::table('mensagem')->insert([
            'mensagem' => 'Alguém sabe o que aconteceu na avenida? Está tudo parado.',
            'hora_envio' => now(),
            'usuario_id' => '4',
            'hashtag' => 'aviso',
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
            'mensagem' => 'Ae, pessoal! Esse mês estou dando desconto na pizza de calabreza. É só ligar e falar que é desse condomínio e leva um refri de 2 litros também! 11 5656-3636',
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

        DB::table('mensagem')->insert([
            'mensagem' => 'Pessoal meu cachorro vai ficar sozinho em casa por algumas horas mas logo minha irmã chega para ficar com ele, peço perdão pelos latidos que podem acontecer.',
            'hora_envio' => now(),
            'usuario_id' => '2',
            'hashtag' => 'aviso',
            'condominio_id' => 1
        ]);

    }
}
