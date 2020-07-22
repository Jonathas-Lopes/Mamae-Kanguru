<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolidariedadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solidariedade')->insert([
            "titulo"=>"SP Invisível",
            "descricao"=>"O SP Invisível é um movimento de humanização dos olhares da sociedade através 
                de histórias de pessoas em situação de rua da cidade de São Paulo e outros invisíveis do 
                mundo todo. Entre nesse link, selecione uma das opções de contribuição com o projeto, gaste
                2 minutos preenchendo os dados na plataforma e pronto! Você já doou.",
            "link"=>"http://www.spinvisivel.org/",
            "foto"=>"/file/img/solidariedade-sp-invisivel.jpg",
            "usuario_id"=>"2"
        ]);

        DB::table('solidariedade')->insert([
            "titulo"=>"Banho de amor",
            "descricao"=>"O projeto conta com dois banheiros itinerantes, com chuveiro, vaso sanitário e 
                pia, e oferece corte de cabelo, roupas, atendimento médico, auxílio odontológico, tratamento 
                estético para as mulheres com manicure, pedicure e maquiagem, além de distribuir kits de 
                higiene para a população de rua. A equipe, que já tem cerca de 400 voluntários, recebe a 
                ajuda de dentistas, cabeleireiros, médicos, advogados e mais uma legião de pessoas com boa 
                vontade em oferecer solidariedade, carinho e atenção ao próximo. Precisamos de doação de 
                materiais de higiene.",
            "link"=>"https://www.facebook.com/projetobanhodeamor/",
            "foto"=>"/file/img/solidariedade-banho-de-amor.jpg",
            "usuario_id"=>"4"
        ]);

        DB::table('solidariedade')->insert([
            "titulo"=>"Casa de Oração do Povo de Rua",
            "descricao"=>"O padre Júlio Lancellotti abriu um espaço para abrigar até cinquenta pessoas em 
                situação de rua. Em tempos de coronavírus, o local está aceitando doações alimentos não 
                perecíveis, itens de higiene, como sabão e álcool em gel, além de materiais de limpeza e 
                agasalhos. Para doar: Rua Djalma Dutra, 3, Bom Retiro, São Paulo. 
                Telefone: 0/xx/11 3228-6223.",
            "link"=>"",
            "foto"=>"/file/img/solidariedade-padre-julio-lancelotti.jpg",
            "usuario_id"=>"5"
        ]);

        DB::table('solidariedade')->insert([
            "titulo"=>"Casa 1",
            "descricao"=>"A Casa 1 é um punhado de coisas: além de uma república de acolhimento, um centro 
                cultural e agora uma clínica social, é também um exercício constante de pensar e promover 
                mudanças estruturais. É ainda um projeto orgânico que se modifica de acordo com a 
                necessidade e a diversidade dos seus públicos.",
            "link"=>"http://www.casaum.org/",
            "foto"=>"/file/img/solidariedade-casa-1.jpg",
            "usuario_id"=>"3"
        ]);
    }
}
