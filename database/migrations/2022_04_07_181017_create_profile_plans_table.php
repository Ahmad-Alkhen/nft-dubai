<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('profile_id');

            $table->foreign('plan_id')->references('id')->on('plans');
            $table->unsignedBigInteger('plan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_plans');
    }
};
