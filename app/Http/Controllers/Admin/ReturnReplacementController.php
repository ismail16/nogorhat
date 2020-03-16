<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReturnReplacement;

class ReturnReplacementController extends Controller
{
    public function index()
    {
        $returns_replacements = ReturnReplacement::orderBy('id','desc')->get();
        return view('admin.returns_replacement.index',compact('returns_replacements'));
    }

    public function create()
    {
        return view('admin.returns_replacement.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        ReturnReplacement::create(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.return-replacement.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $return_replacement = ReturnReplacement::find($id);
        return view('admin.returns_replacement.edit',compact('return_replacement'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $returns_replacement = ReturnReplacement::find($id);

        $returns_replacement->update(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.return-replacement.index');
    }

    public function destroy($id)
    {
        $returns_replacement = ReturnReplacement::find($id);
        $returns_replacement->delete();
        return back()->with('message', 'Returns Replacement Deleted Successfully !');
    }
}
