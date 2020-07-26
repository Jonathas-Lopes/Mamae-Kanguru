<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'reservas';

    /**
     * Run the migrations.
     * @table reservas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->date('data');
            $table->timestamps();
            
            $table->foreignId('usuario_id')
                ->references('id')->on('usuario')
                ->onDelete('no action')
                ->onUpdate('no action');
            
            $table->foreignId('area_reservavel_id')
                ->references('id')->on('areas_reservaveis')
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
