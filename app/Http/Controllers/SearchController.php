<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\User;
class SearchController extends Controller
{
    //
    function index(){
         
         if(isset($_GET['search'])){
            $key=$_GET['search'];
            $user=User::where('name','LIKE',"%{$key}%")->get();
         }
       else $user='';
        
        return view('Search',['user'=>$user]);
    }
    // function getSearchAjax(Request $request)
    // {
    //     if($request->get('query'))
    //     {
    //         $query = $request->get('query');
    //         $data = DB::table('users')
    //         ->where('name', 'LIKE', "%{$query}%")
    //         ->get();
    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    //         foreach($data as $row)
    //         {
    //            $output .= '
    //            <li><a href="data/'. $row->id .'">'.$row->name.'</a></li>
    //            ';
    //        }
    //        $output .= '</ul>';
    //        echo $output;
    //    }
    //    return view('Search');
    // }
  
}
