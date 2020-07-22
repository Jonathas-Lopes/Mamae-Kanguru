<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PainelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('painel')->insert([
            'titulo' => 'Pão caseiro de cereais',
            'foto' => '/file/img/painel-pao-caseiro.jpg',
            'descricao' => 'Vai um pão quentinho aí? Estou fazendo pão caseiro.Esse é de cereais, mas
                também faço de outros tipos. Uso os melhores ingredientes. Entre em contato para receber
                uma amostra ou encomendar o seu.',
            'usuario_id'=>'5',
        ]);

        DB::table('painel')->insert([
            'titulo' => 'Máscaras de contra Covid-19',
            'foto' => '/file/img/painel-mascaras-protecao.jpg',
            'descricao' => 'Estou fazendo máscaras de tecido de diferentes tipo para a proteção contra o
                Covid-19. O fechamento é com elástico e são laváveis. Também faço máscaras com acetato.',
            'usuario_id'=>'3',
        ]);

        DB::table('painel')->insert([
            'titulo' => 'Jeep Renegade 1.8 Automático',
            'foto' => '/file/img/painel-carro-usado.jpg',
            'descricao' => '1.8 16V FLEX 4P AUTOMÁTICO. Novinho. Som incluso. Versão PCD, sem adaptação. 
                Único dono. Som Pioneer touch-screen, Spotify e TV digital inclusos, com caixa selada no 
                porta-mala. Para mais informações, entre em contato.',
            'usuario_id'=>'4',
        ]);

        DB::table('painel')->insert([
            'titulo' => 'Aluguel de casa em Ilhabela',
            'foto' => '/file/img/painel-aluguel-casa.jpg',
            'descricao' => 'Linda casa de frente para o mar, pé na areia, na praia mais famosa da Ilha, 
                praia do curral. A casa possui 5 suites, piscina, cascata e churrasqueira.',
            'usuario_id'=>'2',
        ]);

    }
}
