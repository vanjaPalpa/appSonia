<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CitizenData;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    public function index(Request $request){

        if(User::find($request->user()->id)->citizenData){
            return response([
                'citizen_data' => User::find($request->user()->id)->citizenData
            ]);
        }
        $citizen = CitizenData::create([
            'name' => $request->user()->name,
            'user_id' => $request->user()->id
        ]);

        return response([
            'citizen_data' => $citizen
        ]);
    }

    public function getAllCitizen(){
        return response([
            'allCitizen' => User::with('citizenData')->get()
        ]);
    }
}
