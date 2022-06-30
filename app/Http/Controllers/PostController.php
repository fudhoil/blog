<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = [
            'count_user' => Post::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_post',
            'title'    => 'Table Post'
        ];

        if ($request->ajax()) {
            // $q_user = Post::select('*')->orderByDesc('created_at');
            $q_user = Post::select('*');
            return Datatables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div data-toggle="tooltip" data-id="' . $row->id_post . '" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn . ' <div data-toggle="tooltip" data-id="' . $row->id_post . '" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';

                    return $btn;
                })
                ->addColumn('created_at', function ($row) {
                    $date =  date('d/m/Y', strtotime($row->created_at));
                    return $date;
                })
                ->rawColumns(['action', 'created_at'])
                ->make(true);
        }

        return view('layouts.v_template', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => 'image'
        ]);
        if ($request->hasFile('image') == false) {
            $post = Post::findOrFail($request->id_post);
            $file_name = $post->image_name;
            $file_path = $post->image;
            $views = $post->views;
        }
        if ($request->hasFile('image') == true) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_path = $request->file('image')->store('gambar/post');
            $views = 0;
        }
        Post::updateOrCreate(
            ['id_post' => $request->id_post],
            [
                'title' => $request->title,
                'description' => $request->description,
                'posted_by' => Auth::user()->name,
                //  'image' => url('/').'/public/storage/files/'.$file_name,
                'image' => $file_path,
                'image_name' => $file_name,
                'views' => $views,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
            ]
        );
        return response()->json(['success' => 'Produk saved successfully!']);
    }

    public function edit($id)
    {
        $User = Post::find($id);
        return response()->json($User);
    }

    public function destroy($id_post)
    {
        Post::find($id_post)->delete();

        return response()->json(['success' => 'Post deleted!']);
    }

    public function allPosts()
    {
        return view('posts.all-posts');
    }
}
