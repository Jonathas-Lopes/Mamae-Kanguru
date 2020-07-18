<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
       DB::table('eventos')->insert([
           'nome' => 'Churrasco de Dia dos Pais',
           'data' => '2020/08/08',
           'descricao_1' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
           'descricao_2' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
           'descricao_3' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
           'foto' => null,
           'condominio_id'=> '1'
       ]);

       DB::table('eventos')->insert([
        'nome' => 'Dias das Crianças',
        'data' => '2020/10/11',
        'descricao_1' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'descricao_2' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'descricao_3' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'foto' => null,
        'condominio_id'=> '1'
    ]);

    DB::table('eventos')->insert([
        'nome' => 'Dia das Bruxas',
        'data' => '2020/10/31',
        'descricao_1' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'descricao_2' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'descricao_3' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'foto' => null,
        'condominio_id'=> '1'
    ]);

    DB::table('eventos')->insert([
        'nome' => 'Sorteio do Salão no Natal e Reveillón',
        'data' => '2020/11/01',
        'descricao_1' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'descricao_2' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'descricao_3' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate asperiores exercitationem nihil facilis! Assumenda suscipit veritatis aspernatur distinctio, voluptatem ullam molestiae tempora voluptatum dignissimos consequatur debitis rerum asperiores consequuntur possimus!',
        'foto' => null,
        'condominio_id'=> '1'
    ]);
    }
}