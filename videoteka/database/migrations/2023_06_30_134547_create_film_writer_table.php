<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('film_writer', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('film_id')->nullable(true);
            $table->unsignedBigInteger('person_id')->nullable(true);
            //primarni
            $table->primary(['film_id','person_id'],'film_writer_pk');
            //foreign
            $table->foreign('film_id','film_writer_film_fk')->references('id')->on('films')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('person_id','film_writer_person_fk')->references('id')->on('people')->onUpdate('cascade')->onDelete('no action');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_writer');
    }
};
