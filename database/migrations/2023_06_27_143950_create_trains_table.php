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

            $table->string('company', 100);
            $table->string('departure_station', 200);
            $table->string('arrival_station', 200);
            $table->time('departure_time');
            $table->date('arrival_date');
            $table->string('train_code', 50);
            $table->smallInteger('carriages')->nullable();
            $table->boolean('in_time');
            $table->boolean('deleted')->default(false);

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
