<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id')->nullable();
            // $table->foreign('user_id', 'user_fk_8579198')->references('id')->on('users');
            $table->unsignedBigInteger('user_id'); // unsignedBigInteger is used to store the id of the user who owns the schedule (user_id
            $table->foreign('user_id')->references('id')->on('users'); // foreign key for user_id to identify the user who owns the schedule
        });
    }

};
