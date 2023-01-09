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
        Schema::table('voters', function (Blueprint $table) {
            $table->string('IPA_reg_num')->after('IPA_Registered')->default('0000');
            $table->string('IRC_reg_num')->after('IRC_Registered')->default('0000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voters', function (Blueprint $table) {
            $table->dropColumn('IPA_reg_num');
            $table->dropColumn('IRC_reg_num');
        });
    }
};
