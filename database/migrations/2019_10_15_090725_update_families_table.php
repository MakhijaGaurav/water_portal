<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('families',function($table){
            $table->string('login_email')->after('family_head');
            $table->string('login_password')->after('login_email');
            $table->string('family_address')->after('login_password');
            $table->string('head_image')->after('family_address');
            $table->string('head_phone')->after('head_image');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
