<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Format;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('franchises.create');

    }

    
    public function store(Request $request)
    {
 
        $franchise = new Franchise;
        $franchise->name = $request->name;
        $franchise->email = $request->email;
        $franchise->user_id =   auth::user()->id;
        $franchise->phone = $request->phone;
        $franchise->designation = $request->designation;
        $franchise->brand_name = $request->brand_name;
        $franchise->website = $request->website;
        $franchise->offering = $request->offering;
        $franchise->industry = $request->industry;
        $franchise->brand_description = $request->brand_description;
        $franchise->all_products_services = $request->all_products_services;
        $franchise->brand_start_year = $request->brand_start_year;
        $franchise->brand_location = $request->brand_location;
        $franchise->brand_latitude = $request->brand_latitude;
        $franchise->brand_longitude = $request->brand_longitude;
        $franchise->expectation = $request->expectation;
        $franchise->support = $request->support;
        $franchise->expand_location = $request->expand_location;
        $franchise->franchise_format_count = $request->franchise_format_count;
        $franchise->brand_logo = $request->brand_logo;
        $franchise->store_photo = $request->store_photo;
        $franchise->procedure = $request->procedure;
        $franchise->brochure = $request->brochure;
        $franchise->business_proof = $request->business_proof;
        $franchise->current_plan_price = $request->current_plan_price;
        $franchise->current_plan_title = $request->current_plan_title;

     
     if( $franchise->save())
     {
        // dd($franchise);

        $format = new Format;
        $format->franchise_id = $franchise->id;
        $format->name = $request->format_name;
        $format->min_required_space = $request->min_required_space;
        $format->max_required_space = $request->max_required_space;
        $format->min_investment = $request->min_investment;
        $format->max_investment = $request->max_investment;
        $format->brand_fee = $request->brand_fee;
        $format->staff_number = $request->staff_number;
        $format->charged_royality = $request->charged_royality;
        $format->monthly_sales = $request->monthly_sales;
        $format->profit_margin = $request->profit_margin;
  
        $format->save();
        return back()->with('message', 'item stored successfully');

     }

     
    
 
    }

    
    public function show(Franchise $franchise)
    {
        //
    }

    
    public function edit(Franchise $franchise)
    {
        //
    }

    
    public function update(Request $request, Franchise $franchise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Franchise $franchise)
    {
        //
    }
}
