<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumanresourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanresources', function (Blueprint $table) {
            $table->id();
            $table->string('hrname',255);
            $table->date('date_of_birth');
            $table->string('gender',255);
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->text('address');
            $table->date('date_of_joining');
            $table->string('profile_image');


            //Emergency Contact
            $table->string('emergency_name',255);
            $table->string('relationship',255);
            $table->string('emergency_contact')->unique();
            $table->text('emergency_address');


            //Bank Information
            $table->string('bank_name');
            $table->integer('account_num')->unique();
            $table->bigInteger('iban_num')->unique();
            $table->string('swift_code')->unique();

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
        Schema::dropIfExists('humanresources');
    }
}
