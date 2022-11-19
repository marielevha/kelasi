<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index()->nullable();
            $table->longText('description')->nullable();
            $table->string('address')->nullable();
            $table->string('slug')->index()->nullable();
            $table->json('properties')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->softDeletes()->nullable();
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
        Schema::dropIfExists('posts');
    }
}
