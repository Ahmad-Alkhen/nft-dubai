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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('content')->nullable();
            $table->text('type')->nullable();
            $table->decimal('price')->nullable();
            $table->timestamps();

            
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->unsignedBigInteger('profile_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
};
