<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addemployee_id');
            $table->string('bank_name');
            $table->string('account_type');
            $table->integer('account_num')->unique();
            $table->bigInteger('iban_num')->unique();
            $table->string('branch_address');
            $table->integer('branch_code');
            $table->string('swift_code')->unique();
            $table->timestamps();

            $table->foreign('addemployee_id')->references('id')->on('addemployees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
