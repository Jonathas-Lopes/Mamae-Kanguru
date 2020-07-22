<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolidariedadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'solidariedade';

    /**
     * Run the migrations.
     * @table solidariedade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('titulo', 45);
            $table->string('foto', 75)->nullable()->default(null);
            $table->text('descricao')->nullable()->default(null);
            $table->text('link')->nullable()->default(null);
            $table->timestamps();


            $table->foreignId('usuario_id')
                ->references('id')->on('usuario')
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
