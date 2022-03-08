<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\User;
class SearchController extends Controller
{
    //

    function index(Request $request){
        if($request->has('search')){
            $key=$request->input('search');
            $user=User::where('name','LIKE',"%{$key}%")->get();
        }
        else $user='';

        return view('Search',['user'=>$user]);
    }
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // function getSearchAjax(Request $request)
    // {
    //     if($request->get('search'))
    //     {
    //         $query = $request->get('search');
    //         $data = DB::table('users')
    //         ->where('name', 'LIKE', "%{$query}%")
    //         ->get();
    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    //         foreach($data as $row)
    //         {
    //            $output .= '
    //            <li><a href="detail/'. $row->id .'">'.$row->name.'</a></li>
    //            ';
    //        }
    //        $output .= '</ul>';
    //        echo $output;
    //    }
    //    return view('Search');
    // }
  
}
