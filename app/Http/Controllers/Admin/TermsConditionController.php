<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TermsCondition;

class TermsConditionController extends Controller
{
    public function index()
    {
        $terms_conditions = TermsCondition::orderBy('id','desc')->get();
        return view('admin.terms_condition.index',compact('terms_conditions'));
    }

    public function create()
    {
        return view('admin.terms_condition.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        TermsCondition::create(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.terms-condition.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $terms_condition = TermsCondition::find($id);
        return view('admin.terms_condition.edit',compact('terms_condition'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $terms_condition = TermsCondition::find($id);

        $terms_condition->update(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.terms-condition.index');
    }

    public function destroy($id)
    {
        $terms_condition = TermsCondition::find($id);
        $terms_condition->delete();
        return back()->with('message', 'Terms Condition Deleted Successfully !');
    }
}
