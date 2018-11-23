<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->unsignedInteger('gender');
            $table->unsignedInteger('age');
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('position_id');
            $table->unsignedInteger('salary');
            $table->unsignedInteger('experience');
            $table->float('soft_skill');
            $table->float('lat');
            $table->float('lng');
            $table->string('description');
            $table->string('requirement');
            $table->string('benefits');
            $table->foreign('postion_id')->references('id')->on('position');
            $table->foreign('career_id')->references('id')->on('career');
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
        //
    }
}
