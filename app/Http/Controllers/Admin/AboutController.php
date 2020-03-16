<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('id','desc')->get();
        return view('admin.about.index',compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        About::create(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.about.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit',compact('about'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $category = About::find($id);

        $category->update(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.about.index');
    }

    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return back()->with('message', 'About Deleted Successfully !');
    }
}
