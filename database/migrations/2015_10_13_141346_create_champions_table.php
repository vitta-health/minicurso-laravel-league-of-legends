<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('riot_id')->index();
            $table->string('name');
            $table->string('title');
            $table->string('key');
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            $table->string('stats')->nullable();
            $table->text('enemytips')->nullable();
            $table->text('lore')->nullable();
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
        Schema::drop('champions');
    }
}
