<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $title = 'RS | ADMIN';
        $projects = Project::all();
        return view('admin', compact('title', 'projects'));
    }

    public function add(Request $request){
        $this->validate($request, [
            'title' => 'required|unique:projects,title,',
            'description' => 'required',
            'file' => 'required|image|max:5000',
            'detail_description' => 'required',
            'languages' => 'required',
            'link' => 'required',
            'detail_file' => 'required',
            'detail_file.*' => 'image|max:5000'
        ]);

        $image = $request->file('file');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("images"), $new_name);

        if($request->hasfile('detail_file'))
        {

            foreach($request->file('detail_file') as $file)
            {
                $name=rand() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path("images"), $name);
                $data[] = $name;
            }
        }

        Project::insert(
            [   'title' => request('title'),
                'description' => request('description'),
                'source' => $new_name,
                'detail_description' => request('detail_description'),
                'languages' => request('languages'),
                'link' => request('link'),
                'images' => json_encode($data),
                'created_at' => NOW(),
            ]
        );
        return redirect('/projects');
    }

    public function delete(Request $request){
        $option = request('option');
        Project::where('title', $option)->delete();
        return redirect('/projects');
    }

}
