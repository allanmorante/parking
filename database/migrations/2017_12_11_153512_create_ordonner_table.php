<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdonnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonner', function (Blueprint $table) {
            $table->date('finPeriode');
            $table->integer('idMembre')->unsigned()->foreign()->references('id')->on('users');
            $table->integer('idPlace')->unsigned()->foreign()->references('idPlace')->on('place');
            $table->date('debutPeriode')->foreign()->references('debutPeriode')->on('periode');
            $table->primary(['idMembre', 'idPlace', 'debutPeriode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordonner');
    }
}
