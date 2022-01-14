<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddemployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addemployees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dept_id');
            $table->string('fname',255);
            $table->string('lname',255);
            $table->string('cnic')->unique();
            $table->date('date_of_birth');
            $table->string('gender',255);
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->text('address');
            $table->string('city',255);
            $table->string('qualification',255);
            $table->integer('experience');
            $table->string('date_of_joining');
            //$table->string('emp_grade',255);
            $table->string('password');
            $table->string('confirm_password');
            $table->string('profile_image');

            $table->timestamps();

            $table->foreign('dept_id')->references('id')->on('depts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addemployees');
    }
}
