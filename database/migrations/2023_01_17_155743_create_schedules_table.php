<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->foreign('user_id')->references('id')->on('users'); // foreign key for user_id to identify the user who owns the schedule
            $table->string('laboratory');
            $table->string('school_year');
            $table->string('semester');
            $table->string('recurrence');
            $table->integer('recurrence_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
