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
        Schema::create('franchises', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('country_code')->nullable();
            $table->text('phone')->nullable();
            $table->string('designation')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('offering')->nullable();
            $table->text('brand_description')->nullable();
            $table->text('all_products_services')->nullable();
            $table->string('brand_start_year')->nullable();
            $table->string('brand_location')->nullable();
            $table->integer('existing_outlets_count')->nullable();
            $table->text('expectation')->nullable();
            $table->text('support')->nullable();
            $table->text('procedure')->nullable();
            $table->integer('franchise_format_count')->nullable();
            $table->string('expand_locations')->nullable();
           
          
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');

            // $table->text('industry')->nullable();
            // $table->text('expand_location')->nullable();

            // $table->string('current_plan_title')->nullable();
            // $table->decimal('current_plan_price', $precision = 10, $scale = 2)->nullable();

            // $table->string('brand_logo')->nullable();
            // $table->string('store_photo')->nullable();
            // $table->string('brochure')->nullable();
            // $table->string('business_proof')->nullable();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('franchises');
    }

};



  //     $table->id();
        //     $table->string('user_name')->nullable();
        //     $table->string('email')->nullable();
        //     $table->string('profile_name')->nullable();
        //     $table->string('role')->nullable();
        //     $table->text('interest')->nullable();
        //     $table->date('Establish_date')->nullable();
        //     $table->text('Industry')->nullable();
        //     $table->text('Location')->nullable();
        //     $table->integer('employees_number')->nullable();
        //     $table->string('entity_type')->nullable();
        //     $table->string('description')->nullable();
        //     $table->text('highlights')->nullable();
        //     $table->text('facility_details')->nullable();
        //     $table->integer('Avg_monthly_sales')->nullable();
        //     $table->integer('year_sales')->nullable();
        //     $table->integer('EBITDA')->nullable();
        //     $table->text('assets')->nullable();
        //     $table->text('Phisycal_assets _value')->nullable();
        //     $table->text('photo')->nullable();
        //     $table->text('document')->nullable();
        //     $table->text('proof')->nullable();
        //     $table->boolean('receiving_quotations')->nullable();
        //     $table->string('plan')->nullable();
           
        //     $table->timestamps();
    
        //     $table->foreign('user_id')->references('id')->on('users')
 
        // ->onDelete('cascade');
 
        // });

 

 