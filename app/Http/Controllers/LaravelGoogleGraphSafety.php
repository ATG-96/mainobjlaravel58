<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelGoogleGraphSafety extends Controller
{
    function safetyGraphFunc()
    {
     $data = DB::table('users_line')
       ->select(
        DB::raw('user_id as user_id'),
        DB::raw('count(*) as number'))
    //   ->groupBy('gender')
       ->get();
     $array[] = ['user_id', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->gender, $value->number];
     }
     return view('admin.dashboardchart')->with('gender', json_encode($array));
    }
}
