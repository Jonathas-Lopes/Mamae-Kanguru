<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas_reservaveis')->insert([
            'nome' => 'Churrasqueira',
            'foto' => 'img/condominio_churrasqueira.jpg',
            'descricao_1'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'descricao_2'=> null,
            'descricao_3'=> null,
            'condominio_id'=> '1'
        ]);

        DB::table('areas_reservaveis')->insert([
            'nome' => 'Salão de Festas',
            'foto' => 'img/condominio_salao_festas.jpg',
            'descricao_1'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'descricao_2'=> null,
            'descricao_3'=> null,
            'condominio_id'=> '1'
        ]);

        DB::table('areas_reservaveis')->insert([
            'nome' => 'Espaço Gourmet',
            'foto' => 'img/condominio_espaco_gourmet2.jpg',
            'descricao_1'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'descricao_2'=> null,
            'descricao_3'=> null,
            'condominio_id'=> '1'
        ]);
    }
}
