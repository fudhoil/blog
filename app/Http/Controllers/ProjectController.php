<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = [
            'count_user' => Project::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_project',
            'title'    => 'Table Project'
        ];

        if ($request->ajax()) {
            $q_user = Project::select('*');
            return Datatables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div data-toggle="tooltip" data-id="' . $row->id_project . '" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn . ' <div data-toggle="tooltip" data-id="' . $row->id_project . '" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('layouts.v_template', $data);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image'
        // ]);

        // if ($request->hasFile('image') == true) {
        //     $file_name = $request->file('image')->store('gambar/post');

        // }
        // return response()->json(['code'=>1,'msg'=>'Updated']);
        Project::updateOrCreate(['id_project' => $request->id_project],
            [
                'nama_project' => $request->nama_project,
                'description_project' => $request->description_project,
                // 'image' => $file_name,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,

            ]
        );
        return response()->json(['success' => 'Produk saved successfully!']);
    }


    public function edit($id)
    {
        $User = Project::find($id);
        return response()->json($User);
    }

    public function destroy($id_project)
    {
        Project::find($id_project)->delete();

        return response()->json(['success' => 'Post deleted!']);
    }
}
