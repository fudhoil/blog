<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
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

    public function allPosts()
    {
        $products = Product::all();
        return view('page/products', ['products' => $products]);
    }

    public function allArticles()
    {
        $articles = Post::all();
        $products = Product::all();
        return view('page/articles', ['articles' => $articles, 'products' => $products]);
    }
}
