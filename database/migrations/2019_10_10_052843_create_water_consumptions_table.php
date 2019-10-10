<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('consumption_id');
            $table->string('rf_id');
            $table->string('litres_consumed');
            $table->string('unit_no');
            $table->string('unit_type');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->timestamps();
            $table->string('deleted');
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
