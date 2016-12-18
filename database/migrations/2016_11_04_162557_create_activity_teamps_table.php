<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTeampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_temps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_team')->unsigned();
            $table->foreign('id_team')->references('id')->on('team_projects')->onUdpate('cascade');
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
        Schema::dropIfExists('activity_teamps');
    }
}
