<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogQuestionAnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_question_ans', function (Blueprint $table) {
            $table->id();
            $table->integer('question_id');
            $table->integer('user_id');
            $table->logText('question_ans');
            $table->integer('agree');
            $table->integer('disagree');
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
        Schema::dropIfExists('blog_question_ans');
    }
}
