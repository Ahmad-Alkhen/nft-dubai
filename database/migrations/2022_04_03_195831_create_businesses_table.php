<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->integer('country_code')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('role')->nullable();
            $table->date('establish_date')->nullable();
            $table->text('interest')->nullable();
            $table->string('location')->nullable();
            
            $table->integer('employees_number')->nullable();
            $table->string('entity_type')->nullable();
            $table->string('description')->nullable();
            $table->text('highlights')->nullable();
            $table->text('facility_details')->nullable();
            $table->text('currency')->nullable();
            $table->integer('Avg_monthly_sales')->nullable();
            $table->integer('year_sales')->nullable();
            $table->integer('EBITDA')->nullable();
            $table->text('assets')->nullable();
            $table->text('Phisycal_assets_value')->nullable();
      
            $table->integer('receiving_quotations')->nullable();
            $table->string('plan')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');

            $table->text('industry')->nullable();


            // $table->text('photo')->nullable();
            // $table->text('document')->nullable();
            // $table->text('proof')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};
