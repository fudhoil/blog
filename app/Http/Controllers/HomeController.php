<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin()
    {
        $now = \Carbon\Carbon::now()->format('Y');
        $posts = Post::select('views', 'created_at')
        ->whereYear('created_at', $now)
        ->get()
        ->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });

        $postmcount = [];
        $postArr = [];

        foreach ($posts as $key => $value) {
            $postmcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($postmcount[$i])){
                $postArr[$i] = $postmcount[$i];
            }else{
                $postArr[$i] = 0;
            }
        }

        $data = array(
            'count_user' => DB::table('users')->count(),
            'count_product' => DB::table('product')->count(),
            'count_client' => DB::table('client')->count(),
            'count_news' => DB::table('post')->count(),
            'menu'      => 'menu.v_menu_admin',
            'content' => 'content.view_dashboard',
            'count_views' => $postArr,
        );
        return view('layouts.v_template', $data);
    }
}
