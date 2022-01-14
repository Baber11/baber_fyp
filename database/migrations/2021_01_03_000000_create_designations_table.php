<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addemployee_id');
            $table->unsignedBigInteger('designationname_id');
            $table->integer('basic_pay');
            $table->integer('travel_allowance');
            $table->integer('medical_allowance');
            $table->timestamps();

            $table->foreign('addemployee_id')->references('id')->on('addemployees')->onDelete('cascade');
            $table->foreign('designationname_id')->references('id')->on('designationnames')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designations');
    }
}
