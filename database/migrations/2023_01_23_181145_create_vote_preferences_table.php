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
        Schema::create('vote_preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vote_id');
            $table->foreign('vote_id')->references('id')->on('votes')->onDelete('cascade');
            $table->unsignedBigInteger('first_candidate_id');
            $table->foreign('first_candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->unsignedBigInteger('second_candidate_id');
            $table->foreign('second_candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->unsignedBigInteger('third_candidate_id');
            $table->foreign('third_candidate_id')->references('id')->on('candidates')->onDelete('cascade');
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
        Schema::dropIfExists('vote_preferences');
    }
};
