<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServeStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serve_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->string('status',100)->default(1);
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
        Schema::dropIfExists('serve_statuses');
    }
}
