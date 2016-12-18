<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_state')->unsigned();
            $table->foreign('id_state')->references('id')->on('states')->onUdpate('cascade');
            $table->bigInteger('id_activity')->unsigned();
            $table->foreign('id_activity')->references('id')->on('activities')->onUdpate('cascade');
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
        Schema::dropIfExists('state_activities');
    }
}
