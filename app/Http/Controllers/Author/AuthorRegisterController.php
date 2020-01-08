<?php

namespace App\Http\Controllers\Author;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorRegisterController extends Controller
{
    public function index()
    {
        return view('author.pages.dashboard');
    }

    public function  profile($id){
        $customer = User::find($id)->first();
        return view('author.pages.customer_profile',compact('customer'));
    }

    public function register()
    {
        return view('author.register');
    }

    public function login()
    {
        return view('author.login');
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
