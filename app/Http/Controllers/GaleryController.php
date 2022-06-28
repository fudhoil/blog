<?php

namespace App\Http\Controllers;


use App\Models\Galery;
use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GaleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = [
            'count_user' => Galery::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_galery',
            'title'    => 'Table Galery'
        ];

        if ($request->ajax()) {
            $q_user = Galery::select('*');
            return Datatables::of($q_user)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<div data-toggle="tooltip" data-id="' . $row->id_galery . '" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                    $btn = $btn . ' <div data-toggle="tooltip" data-id="' . $row->id_galery . '" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';

                    return $btn;
                })
                ->addColumn('created_at', function ($row) {
                    $date =  date('d/m/Y', strtotime($row->created_at));
                    return $date;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('layouts.v_template', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image'
        ]);
        if ($request->hasFile('image') == false) {
            $id_galery = Galery::findOrFail($request->id_galery);
            $file_name = $id_galery->image_name;
            $file_path = $id_galery->image;
        }
        if ($request->hasFile('image') == true) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_path = $request->file('image')->store('gambar/galery');
        }
        Galery::updateOrCreate(
            ['id_galery' => $request->id_galery],
            [
                'title' => $request->title,
                'description' => $request->description,
                'posted_by' => Auth::user()->name,
                //  'image' => url('/').'/public/storage/files/'.$file_name,
                'image' => $file_path,
                'image_name' => $file_name,
                'created_at' => $request->created_at,
                'updated_at' => $request->updated_at,
            ]
        );
        return response()->json(['success' => 'Galery saved successfully!']);
    }

    public function edit($id)
    {
        $User = Galery::find($id);
        return response()->json($User);
    }

    public function destroy($id_galery)
    {
        Galery::find($id_galery)->delete();

        return response()->json(['success' => 'Galery deleted!']);
    }
}
