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
            $table->unsignedInteger('max_age');
            $table->unsignedInteger('min_age');
            $table->unsignedInteger('career_id');
            $table->unsignedInteger('position_id');
            $table->float('salary');
            $table->unsignedInteger('experience');
            $table->float('soft_skill');
            $table->string('location');
            $table->float('lat');
            $table->float('lng');
            $table->text('description');
            $table->text('requirement');
            $table->text('benefits');
            $table->foreign('position_id')->references('id')->on('position');
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
