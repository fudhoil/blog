<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function selayangPandang()
    {
        return view('page/selayang-pandang');
    }
}
