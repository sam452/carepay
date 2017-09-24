<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PatientName', 18);
            $table->string('Address', 128);
            $table->string('City', 28);
            $table->string('Zip', 11);
            $table->string('PhoneNum', 15);
            $table->string('GUID', 36);
            $table->string('Company', 36);
            $table->string('RiskCategory', 36);
            $table->string('PrimaryPhysician', 28);
            $table->string('DOB', 19);
            $table->string('DIAG1CODE', 19);
            $table->string('DIAG1DESC', 19);
            $table->string('SUBABUSEIND', 19);
            $table->string('SPL1CODE', 19);
            $table->string('SPL1DESC', 26);
            $table->string('SPL2CODE', 26);
            $table->string('SPL2DESC', 32);
            $table->string('SPL3CODE', 32);
            $table->string('SPL3DEV', 26);
            $table->string('COMORBIDIND', 25);
            $table->string('LASTMODDATE', 19);
            $table->string('GENDER', 19);
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
        Schema::drop('patientdetails');
    }
}
