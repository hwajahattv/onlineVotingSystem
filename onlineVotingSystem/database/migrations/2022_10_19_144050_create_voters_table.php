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
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('CNIC')->nullable();
            $table->boolean('isEmailVerified')->default(false);
            $table->boolean('isPhoneVerified')->default(false);
            $table->boolean('isProfileComplete')->default(false);
            $table->string('fingerprint')->nullable();
            $table->string('displayPicture')->nullable();
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
        Schema::dropIfExists('voters');
    }
};
