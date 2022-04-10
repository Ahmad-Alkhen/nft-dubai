<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bookmark()
    {
        return $this->hasMany('App\Bookmark');
    }
    
    public function file()
    {
        return $this->hasMany('App\File');
    }
    public function industryProfile()
    {
        return $this->hasMany('App\industryProfile');
    }
    public function profileplan()
    {
        return $this->hasMany('App\ProfilePlan');
    }

    
    public function advisor()
    {
        return $this->hasOne('App\Advisor');
    }

    public function business()
    {
        return $this->hasOne('App\Business');
    }
    public function franshise()
    {
        return $this->hasOne('App\Franshise');
    }
    public function investor()
    {
        return $this->hasOne('App\Investor');
    }
   

//   public function products()
//     {
//         return $this->belongsToMany(Product::class, 'product_categories', 'category_url', 'product_id');
//     }



}
