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

   public function getSafeCheck()
   {
       $safecheck = DB::select('SELECT public.users_line.user_id, public.users_line.user_name, public.safe_check.line_id, public.safe_check.is_safe, public.safe_check.safe_location, public.safe_check.safe_mess, public.safe_check.time_update FROM public.safe_check,public.users_line WHERE public.users_line.line_userid = public.safe_check.line_id ');
       return view('admin.dashboard')->with('safecheck',$safecheck);       
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
}
