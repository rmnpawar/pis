<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empmasters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hos_no');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('fathername');
            $table->date('DOB');
            $table->string('sex',1);
            $table->boolean('marital_status');
            $table->string('blood_group',3);
            $table->string('religion');
            $table->string('nationality');
            $table->boolean('isDisabled');
            $table->bigInteger('aadhar');
            $table->string('address',200);
            $table->string('district');
            $table->string('state');
            $table->bigInteger('Mob');
            $table->bigInteger('phone');
            $table->string('email');

            $table->string('eduqualification');
            $table->string('frominstitute');
            $table->integer('passingyear');
            
            $table->date('joining_date');
            $table->string('designation');
            $table->string('present_desig');
            $table->integer('joining_station');
            $table->integer('present_office');
            $table->string('joining_section');
            $table->string('present_section');
            $table->integer('experience');
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
        Schema::dropIfExists('empmasters');
    }
}
