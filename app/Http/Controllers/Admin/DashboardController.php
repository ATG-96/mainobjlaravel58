<?php

namespace App\Http\Controllers\Admin;

use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function registered()
   {
       $users = User::all();
       return view('admin.register')->with('users',$users);
   }
//    public function dashboard()
//    {
       
//    }

   public function dashboard1()
   {
       $safecheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.safe_check.line_id, public.safe_check.is_safe, public.safe_check.safe_location, public.safe_check.safe_mess, public.safe_check.time_update FROM public.safe_check,public.users_line WHERE public.users_line.line_userid = public.safe_check.line_id ');
       //return view('admin.dashboardchart')->with('safecheck',$safecheck); 
       
       $data = DB::table('tbl_employee')
            ->select(
            DB::raw('gender as gender'),
            DB::raw('count(*) as number'))
            ->groupBy('gender')
            ->get();
        $array[] = ['Gender', 'Number'];
        foreach($data as $key => $value)
        {
        $array[++$key] = [$value->gender, $value->number];
        }
        return view('admin.dashboard1')->with('gender', json_encode($array))->with('safecheck',$safecheck);
        //return view('admin.dashboardchart', compact('bus','user','employer'));
   }

      public function dashboard2()
   {
        $tempcheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.temp_check.line_id, public.temp_check.temp, public.temp_check.temp_time FROM public.temp_check,public.users_line WHERE public.users_line.line_userid = public.temp_check.line_id ');
        $data = DB::table('tbl_employee')
            ->select(
            DB::raw('gender as gender'),
            DB::raw('count(*) as number'))
            ->groupBy('gender')
            ->get();
        $array[] = ['Gender', 'Number'];
        foreach($data as $key => $value)
        {
        $array[++$key] = [$value->gender, $value->number];
        }
        return view('admin.dashboard2')->with('gender', json_encode($array))->with('tempcheck',$tempcheck);      
        
   }

   public function getSafeCheck1()
   {
        $fields = Input::get('defaultExampleRadios');
        if($fields == 'safe'){
            $safecheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.safe_check.line_id, public.safe_check.is_safe, public.safe_check.safe_location, public.safe_check.safe_mess, public.safe_check.time_update FROM public.safe_check,public.users_line WHERE public.users_line.line_userid = public.safe_check.line_id AND public.safe_check.is_safe = "safe"');
            return view('admin.dashboard')->with('safecheck',$safecheck); 
        }
        elseif ($fields == 'notsafe') {
            $safecheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.safe_check.line_id, public.safe_check.is_safe, public.safe_check.safe_location, public.safe_check.safe_mess, public.safe_check.time_update FROM public.safe_check,public.users_line WHERE public.users_line.line_userid = public.safe_check.line_id AND public.safe_check.is_safe = "not safe"');
            return view('admin.dashboard')->with('safecheck',$safecheck); 
        }

             
   }

   //my code

   public function dashboardtemp()
   {
        $dashtempcheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.temp_check.line_id, public.temp_check.temp, public.temp_check.temp_time FROM public.temp_check,public.users_line WHERE public.users_line.line_userid = public.temp_check.line_id ');
        return view('admin.dashboard')->with('dashtempcheck',$dashtempcheck);      
        
   }

   
}
