<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membre', function (Blueprint $table) {
            $table->increments('idMembre');
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->string('email', 100)->unique();
            $table->integer('telephone')->unique();
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->integer('rang')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membre');
    }
}
