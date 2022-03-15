<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Friend;

class DetailController extends Controller
{
    function index($ID){
        $detail = User::where('id', '=', $ID)->select('*')->first();
        $user=Auth::user()->id; 
        $find=Friend::where([
                            ['user_id','=', $user],
                            ['friend_id','=',$ID]
                        ])->value('status');
        if(isset($find)){
            if($find==0)
                $status=0;
            else
                $status=1;
        }
        else
            $status=-1;

        return view('detail', ['detail'=>$detail,'status'=>$status]);
    }
   
    function addfriend(Request $request){
        if (Auth::user()->id) {
            $friend=$request->get('ID');
            $user=Auth::user()->id;
            $find=Friend::where([
                            ['user_id','=', $user],
                            ['friend_id','=',$friend]
                        ])->value('id','status');

            if(!isset($find)){
                $success=Friend::insert(['user_id'=>$user,'friend_id'=>$friend,'status'=>0]);
            }
            else
                $success=Friend::where('id',$find)->delete();

            return redirect()->back();
        }
        
    }
}
