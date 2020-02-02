<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacy_policys = PrivacyPolicy::orderBy('id','desc')->get();
        return view('admin.privacy_policy.index',compact('privacy_policys'));
    }

    public function create()
    {
        return view('admin.privacy_policy.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        PrivacyPolicy::create(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        return redirect()->route('admin.privacy-policy.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $privacy_policy = PrivacyPolicy::find($id);
        return view('admin.privacy_policy.edit',compact('privacy_policy'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $privacy_policy = PrivacyPolicy::find($id);

        $privacy_policy->update(
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );
        return redirect()->route('admin.privacy-policy.index');
    }

    public function destroy($id)
    {
        $privacy_policy = PrivacyPolicy::find($id);
        $privacy_policy->delete();
        return back()->with('message', 'Privacy Policy Deleted Successfully !');
    }
}
