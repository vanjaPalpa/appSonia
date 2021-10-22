<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function update(Request $request, $id){

        if(Gate::allows('isMyAccount',$id)){
            $user = User::find($id);

            $user->update($request->all());

            return response([
                'user' => $user
            ]);
        }else{
            return response([
                'message' => 'vous n est pas le prorpietaire ->'.$request->id
            ]);
        }
    }

    public function index(Request $request){

        if(!Gate::allows('isAdmin')){
            return response([
                'message' => 'vous ete pas admin'
            ]);
        }

        $users = User::find($request->user()->id)->documents;

        return response([
            'user_document' => $users
        ]);
    }
}
