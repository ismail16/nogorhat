<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::orderBy('id', 'desc')->Where('role_id',2)->get();
        return view('admin.customer.index', compact('customers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $customer = User::find($id);
        return view('admin.customer.show', compact('customer'));
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
       $Customer = User::find($id);
        $Customer->delete();
        return back()->with('message', 'Customer Deleted Successfully !');
    }
}
