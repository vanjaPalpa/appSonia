<?php

namespace App\Http\Controllers;

use App\Models\RequestCivilStatus;
use Illuminate\Http\Request;

class RequestCivilController extends Controller
{
    public function create(Request $request){
        $fields = $request->validate([
            'name_civils_status' => 'required|string',
            'pattern' => 'required|string',
        ]);

        $user_id = $request->user()->id;

        $requestCivil = RequestCivilStatus::create([
            'name_civils_status' => $fields['name_civils_status'],
            'pattern' => $fields['pattern'],
            'user_id' => $user_id
        ]);

        return response([
            'request_civil' => $requestCivil
        ]);
    }

    public function listRequest(Request $request){
        $alll_request_civils = RequestCivilStatus::all();

        return response([
            'all_request_civils' => $alll_request_civils
        ]);
    }
}
