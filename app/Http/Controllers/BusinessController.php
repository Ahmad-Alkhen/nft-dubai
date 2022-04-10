<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', compact('businesses'));
    }

    public function create(Request $request)
    {

      

        $plan = implode(',',$request->post('plan'));
        $request->request->set('plan', $plan);

        $receiving_quotations = ($request->post('receiving_quotations') && $request->post('receiving_quotations')!='') ? '1' : '0';
        $request->request->set('receiving_quotations', $receiving_quotations);

        // $current_plan_title = implode(',',$request->post('current_plan_title'));
        // $request->request->set('current_plan_title', $current_plan_title);

        $request->request->set('user_id', auth::user()->id);

        Business::create($request->all());

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Business::create($request->all());

        return back()->with('message', 'item stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        return view('businesses.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $business->update($request->all());

        return back()->with('message', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business->delete();

        return back()->with('message', 'item deleted successfully');
    }
}
