<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->morphs('commentable');
            $table->text('body');
            $table->string('group')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('group');
        });
    }

    public function down()
    {
        Schema::drop('comments');
    }
}
