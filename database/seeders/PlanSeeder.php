<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ["id"=> "1", "name"=> "Basic Plan", "content" => "Basic Advisor Profile, 2 Introductions,
            Lifetime Validity", "type"=>"Advisor", "price"=>"0.00","created_at" => null , "updated_at" => null, "profile_id"=>"1"],

        ];

        Plan::insert($data);
    }

}
