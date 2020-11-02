<?php

namespace App\Http\Controllers;
use DB;
use Charts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaravelGoogleGraph extends Controller
{
    function index()
    {
    //  $data = DB::table('tbl_employee')
    //    ->select(
    //     DB::raw('gender as gender'),
    //     DB::raw('count(*) as number'))
    //    ->groupBy('gender')
    //    ->get();
        
    //  $array[] = ['Gender', 'Number'];
    //  foreach($data as $key => $value)

    //  {
    //   $array[++$key] = [$value->gender, $value->number];
    //  }
     
    //  return view('admin.dashboardchart')->with('gender', json_encode($array));
    $pie  =	 Charts::create('pie', 'highcharts')
      ->title('My nice chart')
      ->labels(['First', 'Second', 'Third'])
      ->values([5,10,20])
      ->dimensions(1000,500)
      ->responsive(false);
    return view('admin.chart')->with('pie',$pie);
  }

    // function gettime()
    // {
        
    //  $current_timestamp = Carbon::now()->timestamp; 
    //  $tempcheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.temp_check.line_id, public.temp_check.temp, public.temp_check.temp_time FROM public.temp_check,public.users_line WHERE public.users_line.line_userid = public.temp_check.line_id AND public.temp_check.temp_time >= 100');
    //  return view('admin.dashboard1')->with('tempcheck',$tempcheck); 
     
    // }


}
