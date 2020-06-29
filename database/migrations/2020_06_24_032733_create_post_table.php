<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->text('body');
            // $table->string('imagepath')->nullable()->change();
            // $table->integer('likes');
            // $table->integer('dislikes');
            // $table->integer('userId');
            // $table->foreign('catagoryId')->references('id')->on('catagory');
            // $table->integer('majorId');
            // $table->integer('commentId');
            // $table->integer('reportId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}