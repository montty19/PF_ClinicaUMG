<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('num_examen', 15);
            $table->string('tipo', 25);
            $table->string('descripcion', 150);
            $table->string('fecha_examen', 10);
            $table->timestamps();
        });
    }     
}
