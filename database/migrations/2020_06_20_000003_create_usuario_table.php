<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuario';

    /**
     * Run the migrations.
     * @table usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nome', 45);
            $table->string('email', 45);
            $table->string('senha', 45);
            $table->string('foto', 70)->nullable();
            $table->enum('genero', ['M','F','OUTRO']);
            $table->tinyInteger('admin');
            $table->timestamp('email_verified_at');
            $table->timestamps();
            $table->foreignId('condominio_id')
                ->references('id')->on('condominio')
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
