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
            $table->integer('role_id')->nullable();
            $table->integer('is_active')->nullable();
            $table->string('name',100)-> nullable();
            $table->string('username',100)-> nullable();
            $table->string('photo',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('email',100)->nullable();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('rating')->nullable();
            $table->string('is_blocked')->nullable();

            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->string('status')->default(1);
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
