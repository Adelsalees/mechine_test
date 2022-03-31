<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->date('joining_date');
            $table->date('dob');
            $table->unsignedBigInteger('designation_id');
            $table->string('gender');
            $table->string('mobile_no');
            $table->string('landline')->nullable();
            $table->string('email');
            $table->text('precent_addrress');
            $table->text('premenet_address');
            $table->string('status');
            $table->string('profile');
            $table->string('resume');
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
        Schema::dropIfExists('employees');
    }
}
