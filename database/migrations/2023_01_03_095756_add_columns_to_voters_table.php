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
            $table->string('maritalStatus')->nullable()->after('gender');
            $table->string('registeredAs')->nullable()->after('dob');
            $table->string('birthType')->nullable()->after('registeredAs');
            $table->string('businessTitle')->nullable()->after('occupation');
            $table->boolean('IPA_Registered')->nullable()->after('businessTitle');
            $table->boolean('IRC_Registered')->nullable()->after('IPA_Registered');
            $table->string('schoolLevel')->nullable()->after('school');
            $table->year('graduationYear')->nullable()->after('schoolLevel');
            $table->string('departmentName')->nullable()->after('IRC_Registered');
            $table->string('payrollNumber')->nullable()->after('departmentName');
            $table->string('disability')->nullable()->after('gender');
            $table->string('disabilityType')->nullable()->after('disability');
            $table->unsignedBigInteger('father_id')->nullable()->after('surName');
            $table->unsignedBigInteger('mother_id')->nullable()->after('father_id');
            $table->unsignedBigInteger('spouse_id')->nullable()->after('maritalStatus');

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
            //
            $table->dropColumn('maritalStatus');
            $table->dropColumn('registeredAs');
            $table->dropColumn('birthType');
            $table->dropColumn('businessTitle');
            $table->dropColumn('IPA_Registered');
            $table->dropColumn('IRC_Registered');
            $table->dropColumn('schoolLevel');
            $table->dropColumn('graduationYear');
            $table->dropColumn('departmentName');
            $table->dropColumn('payrollNumber');
            $table->dropColumn('disability');
            $table->dropColumn('disabilityType');
            $table->dropColumn('father_id');
            $table->dropColumn('mother_id');
            $table->dropColumn('spouse_id');

        });
    }
};
