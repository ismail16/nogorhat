<?php

namespace App\Http\Controllers\Author;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Order;
use Auth;

class AuthorRegisterController extends Controller
{

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
