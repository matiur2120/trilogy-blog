<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_questions', function (Blueprint $table) {
            $table->id();
            $table->string('blog_post_id');
            $table->string('comments_id');
            $table->string('question');
            $table->string('user_id');
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
        Schema::dropIfExists('blog_questions');
    }
}
