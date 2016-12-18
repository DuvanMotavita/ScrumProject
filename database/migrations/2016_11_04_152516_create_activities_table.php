<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('points');
            $table->integer('description');
            $table->date('date_delivery');
            $table->bigInteger('id_request')->unsigned();
            $table->foreign('id_request')->references('id')->on('requests')->onUdpate('cascade');
            $table->bigInteger('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type_activities')->onUdpate('cascade');
            $table->bigInteger('id_state')->unsigned();
            $table->foreign('id_state')->references('id')->on('states')->onUdpate('cascade');
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
        Schema::dropIfExists('activities');
    }
}
