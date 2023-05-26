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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('location_start', 50);
            $table->string('location_end', 50);
            $table->dateTime('start_trip');
            $table->dateTime('end_trip');
            $table->string('train_code');
            $table->string('train_name')->nullable();
            $table->string('train_category')->nullable();
            $table->string('train_type')->nullable();
            $table->smallInteger('number_carriages')->unsigned();
            $table->boolean('in_time');
            $table->boolean('delayed');
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
