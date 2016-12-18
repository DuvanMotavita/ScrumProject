<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_roles')->unsigned();
            $table->foreign('id_roles')->references('id')->on('roles')->onUdpate('cascade');
            $table->bigInteger('id_person')->unsigned();
            $table->foreign('id_person')->references('id')->on('people')->onUdpate('cascade');
            $table->bigInteger('id_project')->unsigned();
            $table->foreign('id_project')->references('id')->on('projects')->onUdpate('cascade');
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
        Schema::dropIfExists('team_projects');
    }
}
