<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\message;
use App\Models\Friend;
use App\Models\User;
use DB;
use Pusher\Pusher;
class ChatController extends Controller
{
    //
    function index(){
        $friend=DB::table('users')
                    ->join('friends','users.id','=','friends.friend_id')
                    ->select('users.*')
                    ->where('friends.user_id',4)
                    ->get();
        return view('chat',['listfriend'=>$friend]);
    }
    function test(){
        
    }
    function getmessage(Request $request){
        
        if($request->get('id'))
            $friend=$request->get('id');
            $user=Auth::id();
            $mes=message::where([
                                ['from','=', $user],
                                ['to','=',$friend]
                            ])
                            ->orWhere([
                                ['from','=', $friend],
                                ['to','=',$user]
                            ])->get();
            
            return view('message.index',['message'=>$mes]);

    }

    function sendMessage(Request $request){
        $from=Auth::id();
        $to=$request->get('received_id');
        $message=$request->get('message');
        $data = new message();
        $data->from=$from;
        $data->to=$to;
        $data->message=$message;
        $data->is_read=0;
        $data->save();
        
        
    }
}
// $mes=message::factory()->count(10)->create();
// $mes->save();
