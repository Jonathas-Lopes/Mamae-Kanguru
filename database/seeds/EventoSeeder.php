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
           'descricao_1' => 'Esse ano não foi fácil para nenhum de nós. Então, vamos aproveitar a reabertura das nossas áreas de lazer e nos encontrar para comemorar o Dia dos Pais. Ainda sem abraços, mas com muito calor humano!',
           'descricao_2' => 'Teremos churrasco, pães,  bebidas não alcoólicas, música ao vivo e sorvete no final. Por isso pedimos uma contribuição de R$ 50 por adulto e R$ 25 para crianças (de 2 a 12 anos). Confirmação até dia 2 de agosto e pagamento até dia 5, feito para Sérgio Moura (1112C).',
           'descricao_3' => 'Não fique de fora. Precisamos nos unir  mais do que nunca!',
           'foto' => '/file/img/eventos-dia-dos-pais.jpg',
           'condominio_id'=> '1'
       ]);

       DB::table('eventos')->insert([
            'nome' => 'Dias das Crianças',
            'data' => '2020/10/11',
            'descricao_1' => 'Vamos comemorar o Dia das Crianças com muitas brincadeiras! Dia 11/10, a partir das 10 horas, realizaremos algumas brincadeiras e gincanas na quadra para que adultos e crianças brinquem juntos nesse dia tão especial.',
            'descricao_2' => 'Teremos barracas de algodão-doce, cachorro-quente, pipoca doce e salgada, milho quente e espetos.Teremos futebol de sabão (somente para as crianças grandes), castelo inflável, pula-pula e muito mais.',
            'descricao_3' => 'A confirmação deve ser feita até o dia 1º de outubro. Adultos pagam R$ 65 e crianças até 12 anos pagam R$ 35. Crianças até dois anos não pagam. Pagamento feito para Camila Pinheiro (85A).',
            'foto' => '/file/img/eventos-dia-das-criancas.jpg',
            'condominio_id'=> '1'
        ]);

        DB::table('eventos')->insert([
            'nome' => 'Dia das Bruxas',
            'data' => '2020/10/31',
            'descricao_1' => 'Trick’r Treat? Nesse Dia das Bruxas, 31 de novembro, as crianças irão se fantasiar e nos reuniremos no salão para para pedir doces de casa em casa.',
            'descricao_2' => 'As unidades que desejam participar, podem retirar com a Natália Lira (32B), os enfeites de porta que indicarão onde as crianças devem ir. Depois receberemos as crianças no salão para uma festinha até às 22:30.',
            'descricao_3' => 'Menores de 7 anos devem ser acompanhadas dos responsáveis. Na confirmação de presença informe quantas crianças irão participar para que possamos nos organizar. Até lá!',
            'foto' => '/file/img/eventos-dia-das-bruxas.jpg',
            'condominio_id'=> '1'
        ]);
        
    }
}