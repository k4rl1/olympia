<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTickerTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticker_text', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('time');
            $table->boolean('is_highlight')->default(0);
            $table->integer('sport_id')->unsigned();
            $table->string('title', 256);
            $table->string('text', 5000);

            $table->foreign('sport_id', 'fk_ticker_text_has_sport')->references('id')->on('sports')->onDelete('cascade')
                ->onUpdate('no action');

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
        Schema::dropIfExists('ticker_text');
    }
}
