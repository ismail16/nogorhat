<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Setting;

class SettingController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $setting = Setting::first();
        return view('admin.setting.edit',compact('setting'));
    }

    public function update(Request $request, $id)
    {

        $settings = Setting::find($id);

        $settings->store_name = $request->store_name;
        $settings->store_title = $request->store_title;
        $settings->store_phone = $request->store_phone;
        $settings->store_email = $request->store_email;
        $settings->store_website = $request->store_website;
        $settings->store_currency = $request->store_currency;
        $settings->store_address = $request->store_address;

        $settings->footer_text = $request->footer_text;
        $settings->facebook = $request->facebook;
        $settings->instagram = $request->instagram;
        $settings->youtube = $request->youtube;
        $settings->twitter = $request->twitter;
        $settings->linkedIn = $request->linkedIn;
        $settings->status = 1;

        $store_logo = $request->file('store_logo');

        if (isset($store_logo)){

            $logo_name = str_slug($request->store_name).'-'.uniqid().'.'.$store_logo->getClientOriginalExtension();

            if (!file_exists('images/store_logo')){
                mkdir('images/store_logo', 777, true);
            }
            $store_logo->move('images/store_logo',$logo_name);
            $settings->store_logo = $logo_name;
        }

        $settings->save();
        return back();
    }


    public function destroy($id)
    {
        //
    }
}
