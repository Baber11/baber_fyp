<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addemployee_id');
            $table->enum('type', ['medical', 'casual', 'annual', 'sick']);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason');
            $table->enum('status', ['reject', 'approve', 'pending'])->default('pending');
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
        Schema::dropIfExists('leave_requests');
    }
}
