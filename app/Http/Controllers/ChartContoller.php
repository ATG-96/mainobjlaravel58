<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Charts;

class ChartContoller extends Controller
{
    public function index(){

        
        $a = DB::select('SELECT DISTINCT
 
        count(*) 
         
        FROM 
         
        public.users_line 
         
        LEFT JOIN 
         
        public.safe_check
         
        ON 
         
        public.users_line.line_userid = public.safe_check .line_id 
         
        WHERE 
         
        public.safe_check .line_id IS NULL');
         
        print_r($a);
        $a = $a[0]->count;
        print($a);
         
        $pie = Charts::create('pie', 'highcharts')
         ->title('Rep or not')
         ->labels(['Replied', 'Not repply'])
         ->values([2,$a])
         ->dimensions(1000,500)
         ->responsive(false);
         
         return view('admin.chart')->with('pie',$pie);
         }
}
