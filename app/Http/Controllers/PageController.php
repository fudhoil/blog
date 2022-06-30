<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Partner;
use App\Models\Galery;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(3)->get();
        $products = Product::all();
        $galery = Galery::all();
        $clients = Partner::all();
        return view('welcome', ['posts' => $posts, 'products' => $products, 'galeries' => $galery, 'clients' => $clients]);
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

    public function services()
    {
        return view('page/services');
    }

    public function galery()
    {
        $galery = Galery::all();
        return view('page/galery', ['galeries' => $galery]);
    }

    public function allPosts()
    {
        $products = Product::all();
        return view('page/products', ['products' => $products]);
    }

    public function allArticles()
    {
        $posts = Post::all();
        $products = Product::all();
        return view('page/articles', ['posts' => $posts, 'products' => $products]);
    }

    public function getArticle($id)
    {
        $post = Post::where('id_post', $id)->first();
        $post->update([
            'views' => $post->views + 1
        ]);
        return view('page/article', ['post' => $post]);
    }

    public function getProduct($id)
    {
        $product = Product::where('id_product', $id)->first();
        return view('page/product', ['product' => $product]);
    }
}
