<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('service_id')->nullable();
            $table->string('promotion_id')->nullable();
            $table->string('technician_id')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('rating')->nullable();
            $table->string('service_time')->nullable();
            $table->string('creator')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('services');
    }
}
