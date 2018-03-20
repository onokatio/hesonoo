<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWakamonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wakamonos', function (Blueprint $table) {
            $table->increments('id');
						$table->string('username');
						$table->integer('userid')->unique();
						$table->integer('old');
						$table->integer('wantold');
						$table->string('area');
						$table->string('description');
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
        Schema::dropIfExists('wakamonos');
    }
}
