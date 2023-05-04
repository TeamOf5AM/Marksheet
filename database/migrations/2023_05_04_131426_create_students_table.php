<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('relation');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('bloodgroup');
            $table->string('nationality');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->integer('mob_num');
            $table->string('email');
            $table->string('emg_contact_name');
            $table->integer('emg_mob_num');
            $table->string('adhar_num');
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
        Schema::dropIfExists('students');
    }
}
