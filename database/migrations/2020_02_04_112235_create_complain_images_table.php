<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('complain_id');
            $table->string('img',255);
            $table->bigInteger('created_by')->default(0);
            $table->bigInteger('updated_by')->default(0);
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
        Schema::dropIfExists('complain_images');
    }
}
