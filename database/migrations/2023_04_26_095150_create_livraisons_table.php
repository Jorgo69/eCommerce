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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('numero');
            $table->string('email');
            $table->string('adresse_livraison');
            $table->dateTime('date_livraison');
            $table->string('lieu_livraison');
            $table->text('instructions')->nullable();
            $table->enum('status', ['en cours', 'terminé', 'annulé'])->default('en cours');
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
        Schema::dropIfExists('livraisons');
    }
};
