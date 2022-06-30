<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = [
            'count_user' => Partner::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_client',
            'title'    => 'Table Partner & Client'
        ];

        if ($request->ajax()) {
            $q_user = Partner::select('*');
            return Datatables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div data-toggle="tooltip" data-id="' . $row->id_client . '" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn . ' <div data-toggle="tooltip" data-id="' . $row->id_client . '" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';

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
            $file_name = $request->file('image')->store('gambar/client');

        }
        // return response()->json(['code'=>1,'msg'=>'Updated']);
        Client::updateOrCreate(['id_client' => $request->id_client],
            [
                'nama_perusahaan' => $request->nama_perusahaan,
                'description' => $request->description,
                'image' => $file_name,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
            ]
        );
        return response()->json(['success' => 'Produk saved successfully!']);
    }

    public function edit($id)
    {
        $User = Partner::find($id);
        return response()->json($User);
    }


    public function destroy($id_client)
    {
        Partner::find($id_client)->delete();

        return response()->json(['success' => 'Post deleted!']);
    }
}
