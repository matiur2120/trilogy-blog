<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrilogyGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trilogy_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('privacy')->default(2);
            $table->string('topic');
            $table->string('category');
            $table->string('sub_topic');
            $table->string('tag');
            $table->longText('description');
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
        Schema::dropIfExists('trilogy_groups');
    }
}
