<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titile', 250);
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->text('content');
            $table->string('keywords');
            $table->string('');
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
        Schema::drop('page');
    }

}
