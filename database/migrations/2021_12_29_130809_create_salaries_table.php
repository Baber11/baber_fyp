<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('month');
            $table->string('dept');
            $table->string('emp_name');
            $table->integer('emp_account');
            $table->string('designation');
            $table->integer('basic_pay');
            $table->integer('travel_allowance');
            $table->integer('medical_allowance');
            $table->integer('total_days');
            $table->integer('present_days');
            $table->integer('absent_days');
            $table->string('p_fund');
            $table->string('gst');
            $table->string('income_tax');
            $table->integer('bonus');
            $table->integer('incentives');
            $table->integer('final_salary');
            $table->integer('emp_reg');

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
        Schema::dropIfExists('salaries');
    }
}
