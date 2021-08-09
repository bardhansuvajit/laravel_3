<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function index() {
        return view('dashboards.admins.index');
    }
    public function profile() {
        return view('dashboards.admins.profile');
    }
    public function settings() {
        return view('dashboards.admins.settings');
    }

    function updateInfo(Request $request){
        $validator = \Validator::make($request->all(),[
            'name'=>'required',
            'email'=> 'required|email|unique:users,email,'.Auth::user()->id,
            'favoritecolor'=>'required',
        ]);

        if(!$validator->passes()) {
            return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'favoriteColor'=>$request->favoritecolor,
            ]);

            if(!$query) {
                return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
            } else {
                return response()->json(['status'=>1,'msg'=>'Your profile info has been update successfuly.']);
            }
        }
    }
}