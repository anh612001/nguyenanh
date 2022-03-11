<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;

class DetailController extends Controller
{
    //
    function index($ID){
        $detail = User::where('id', '=', $ID)->select('*')->first();   
        return view('detail', ['detail'=>$detail]);
    }
    function addfriend(Request $request){
        if (Auth::user()->id) {
            $friend=$request->get('id');
            $user=Auth::user()->id;
            $find=Friend::where([
                            ['user_id','=', $user],
                            ['friend_id','=',$friend]
                        ])->count();

            if($find<1){
                $success=Friend::insert(['user_id'=>$user,'friend_id'=>$friend,'status'=>0]);
            }
             return redirect()->back();
        }
        
    }
}
