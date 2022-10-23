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
        
        Schema::disableForeignKeyConstraints();
        Schema::create('employes', function (Blueprint $table) {
            $table->id('id_employe');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('cin');
            $table->string('num');
            $table->longText('lieu');
            $table->longText('description');
            $table->longText('photo');
            $table->longText('url_facebook');
            $table->longText('url_instagram');
             $table->string('type_services');
            $table->foreign('type_services')
            ->references('type_services')
            ->on('services')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        Schema::dropIfExists('employes');
    }
};
