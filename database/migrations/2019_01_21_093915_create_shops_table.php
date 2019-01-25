<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("This is the name of the shop");
            $table->string("address")->comment("This is the address of the shop");
            $table->double("lat")->comment("This is the latitude of the shop");
            $table->double("lng")->comment("This is the longitude of the shop");
            $table->integer("like_count")->default(0)->comment("This is the like count of the shop");
            $table->integer("dislike_count")->default(0)->comment("This is the dislike count of the shop");
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
        Schema::dropIfExists('shops');
    }
}
