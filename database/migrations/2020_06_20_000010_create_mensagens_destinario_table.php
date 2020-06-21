<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagensDestinarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mensagens_destinario';

    /**
     * Run the migrations.
     * @table mensagens_destinario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->dateTime('hora_recebimento')->nullable();
            $table->timestamps();
            
            $table->foreignId('usuario_id')
                ->references('id')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreignId('mensagem_id')
                ->references('id')->on('mensagem')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
