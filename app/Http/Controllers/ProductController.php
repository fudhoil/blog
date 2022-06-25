<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = [
            'count_user' => Product::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_product',
            'title'    => 'Table Product'
        ];

        if ($request->ajax()) {
            $q_user = Product::select('*');
            return Datatables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div data-toggle="tooltip" data-id="' . $row->id_product . '" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn . ' <div data-toggle="tooltip" data-id="' . $row->id_product . '" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('layouts.v_template', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        if ($request->hasFile('image') == true) {
            $file_name = $request->file('image')->store('gambar/product');
        }
        // return response()->json(['code'=>1,'msg'=>'Updated']);
        Product::updateOrCreate(
            ['id_product' => $request->id_product],
            [
                'title_product' => $request->title_product,
                'description_product' => $request->description_product,
                'image' => $file_name,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
            ]
        );
        return response()->json([
            'success' => 'Produk saved successfully!',
            'error' => false,
        ]);
    }

    public function edit($id)
    {
        $User = Product::find($id);
        return response()->json($User);
    }

    public function destroy($id_product)
    {
        Product::find($id_product)->delete();

        return response()->json(['success' => 'Post deleted!']);
    }
}
