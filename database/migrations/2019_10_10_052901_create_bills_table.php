<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('bill_id');
            $table->string('family_id');
            $table->string('litres_consumed');
            $table->string('bill_amount');
            $table->date('bill_start_date');
            $table->date('bill_end_date');
            $table->string('bill_paid');
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
        Schema::dropIfExists('bills');
    }
}
