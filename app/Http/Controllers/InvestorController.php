<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InvestorController extends Controller
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
    public function create(Request $request)
    {
        return view('investors.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $franchise = new Franchise;
        // $franchise->name = $request->name;
        // $franchise->email = $request->email;
        // $franchise->country_code = $request->country_code;
        // $franchise->user_id =   auth::user()->id;
        // $franchise->phone = $request->phone;
        // $franchise->designation = $request->designation;
        // $franchise->brand_name = $request->brand_name;
        // $franchise->website = $request->website;
        // $franchise->offering = $request->offering;
        // $franchise->industry = $request->industry;
        // $franchise->brand_description = $request->brand_description;
        // $franchise->all_products_services = $request->all_products_services;
        // $franchise->brand_start_year = $request->brand_start_year;
        // $franchise->brand_location = $request->brand_location;
        // $franchise->brand_latitude = $request->brand_latitude;
        // $franchise->brand_longitude = $request->brand_longitude;
        // $franchise->expectation = $request->expectation;
        // $franchise->support = $request->support;
        // $franchise->expand_location = $request->expand_location;
        // $franchise->franchise_format_count = $request->franchise_format_count;
        // $franchise->brand_logo = $request->brand_logo;
        // $franchise->store_photo = $request->store_photo;
        // $franchise->procedure = $request->procedure;
        // $franchise->brochure = $request->brochure;
        // $franchise->business_proof = $request->business_proof;
        // $franchise->current_plan_price = $request->current_plan_price;
        // $franchise->current_plan_title = $request->current_plan_title;


        // $interests = implode(',',$request->post('interests'));
        // $request->request->set('interests', $interests);

        // $current_plan_title = implode(',',$request->post('current_plan_title'));
        // $request->request->set('current_plan_title', $current_plan_title);
        $dd(  $request);
        $request->merge(['user_id' => Auth::user()->id]);
        Investor::create($request->all());


        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function show(Investor $investor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function edit(Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investor $investor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investor $investor)
    {
        //
    }
}
