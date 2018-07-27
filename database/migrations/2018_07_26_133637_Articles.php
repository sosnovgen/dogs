<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('preview');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('cena');
            $table->integer('category_id');
            $table->integer('group_id');
            $table->integer('made_id');
            $table->timestamps();
        });
    }
    public function down()
    {
        //
    }
}
