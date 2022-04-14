<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class createProfileCountroller extends Controller
{
    public function creteBusiness(){
        return view('layouts.create_profile.createBusinessProfile');
    }
    public function creteFranchise(){
      return view('layouts.create_profile.createFranchiseProfile');
    }
    public function creteInvestor(){
       return view('layouts.create_profile.createInvestorProfile');
    }
}
