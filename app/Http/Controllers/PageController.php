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

    public function visiMisi()
    {
        return view('page/visi-misi');
    }

    public function isoCertificate()
    {
        return view('page/iso-certificate');
    }

    public function borsyaAkademi()
    {
        return view('page/borsya-akademi');
    }

    public function allPosts(){
        return view('posts.all-posts');
    }
}
