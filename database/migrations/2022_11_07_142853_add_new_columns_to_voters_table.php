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
            $table->string('middleName')->nullable();
            $table->string('surName')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('school')->nullable();
            $table->string('religion')->nullable();
            $table->string('local_church')->nullable();
            $table->string('birth_region')->nullable();
            $table->string('birth_province')->nullable();
            $table->string('birth_district')->nullable();
            $table->string('birth_LLG')->nullable();
            $table->string('birth_ward')->nullable();
            $table->string('birth_village')->nullable();
            $table->string('current_region')->nullable();
            $table->string('current_province')->nullable();
            $table->string('current_district')->nullable();
            $table->string('current_LLG')->nullable();
            $table->string('current_ward')->nullable();
            $table->string('current_village')->nullable();
            $table->string('political_party')->nullable();
            $table->string('policeClearanceCertificate')->nullable();
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
            $table->dropColumn('middleName');
            $table->dropColumn('surName');
            $table->dropColumn('dob');
            $table->dropColumn('age');
            $table->dropColumn('gender');
            $table->dropColumn('occupation');
            $table->dropColumn('school');
            $table->dropColumn('religion');
            $table->dropColumn('local_church');
            $table->dropColumn('birth_region');
            $table->dropColumn('birth_province');
            $table->dropColumn('birth_district');
            $table->dropColumn('birth_LLG');
            $table->dropColumn('birth_ward');
            $table->dropColumn('birth_village');
            $table->dropColumn('current_region');
            $table->dropColumn('current_province');
            $table->dropColumn('current_district');
            $table->dropColumn('current_LLG');
            $table->dropColumn('current_ward');
            $table->dropColumn('current_village');
            $table->dropColumn('political_party');
            $table->dropColumn('policeClearanceCertificate');
        });
    }
};
