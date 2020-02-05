<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('home_team_id');
            $table->unsignedInteger('away_team_id');
            $table->string('result1_id');
            $table->string('result2_id');
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
        Schema::dropIfExists('live_scores');
    }
}
