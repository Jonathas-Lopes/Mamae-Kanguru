<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avisos')->insert([
            'titulo' => 'Nova funcionária',
            'descricao' => 'Informamos que, a partir do dia 15 de julho, teremos uma nova funcionária na portaria, a Sra. Fabíola Santos.',
            'foto' => '/file/img/avisos-portaria-feminina.jpg',
            'condominio_id'=> '1'
        ]);

        DB::table('avisos')->insert([
            'titulo' => 'Reabertura da quadra e do parquinho',
            'descricao' => 'Estamos higienizando as áreas que englobam a quadra e o 
                parquinho para a reabertura no dia 20 de julho. Porém, somente para uso 
                exclusivo de moradores.',
            'foto' => '/file/img/avisos-quadra-parquinho.jpg',
            'condominio_id'=> '1'
        ]);

        DB::table('avisos')->insert([
            'titulo' => 'Novo sorteio de vagas de garagem',
            'descricao' => 'Conforme estatuto do condomínio, um novo sorteio de vagas será 
                feito a cada dois anos. Sendo assim, no dia 07 de agosto, sexta-feira, às 
                20h, realizaremos o novo sorteio das vagas de garagem no Salão de Festas.',
            'foto' => '/file/img/avisos-vagas-garagem.jpg',
            'condominio_id'=> '1'
        ]);

        DB::table('avisos')->insert([
            'titulo' => 'Uso de máscaras dentro do condomínio',
            'descricao' => 'Devido a determinação da Prefeitura de São Paulo e do Estado, é
                obrigatório o uso de máscaras nas áreas comuns do condomínio. Incluindo
                escadase hall dos andares. Pedimos a colaboração de todos na prevenção do
                COVID-19.',
            'foto' => '/file/img/avisos-uso-mascara.jpg',
            'condominio_id'=> '1'
        ]);
    }
}
