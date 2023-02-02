<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table->string('DNI');
            $table->unsignedBigInteger('idModulo');
            $table->double('note');
            $table->dateTime('evaluationDate');
            $table->primary(['DNI', 'idModulo']);
            $table->foreign('DNI')->references('DNI')->on('alumnado')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('idModulo')->references('id')->on('modulo')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation');
    }
};
