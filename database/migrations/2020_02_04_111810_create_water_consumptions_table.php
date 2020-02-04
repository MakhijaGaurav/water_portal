<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterConsumptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_consumptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag',255);
            $table->double('litres_consumed');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('unit_no');
            $table->string('unit_type');
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
        Schema::dropIfExists('water_consumptions');
    }
}
