<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('top_user')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            //$table->boolean('owner')->default(false);
            $table->enum('profile', [
                'viewer', 'enterprise',
                'admin', 'super-admin'
            ])->default('viewer')->nullable();
            $table->string('photo_path', 100)->nullable();
            $table->string('phone')->nullable();
            $table->string('reset_code')->nullable();
            $table->integer('activated_code')->index()->nullable();
            //$table->boolean('activated')->default(false);
            $table->json('properties')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
