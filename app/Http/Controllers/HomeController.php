<?php

namespace App\Http\Controllers;

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
        $data = array(
            'count_user' => DB::table('users')->count(),
            'menu'      => 'menu.v_menu_admin',
            'content' => 'content.view_dashboard'
        );
        return view('layouts.v_template', $data);
    }
}
