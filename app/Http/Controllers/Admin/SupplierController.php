<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::orderBy('id','desc')->get();
        return view('admin.supplier.index',compact('suppliers'));
    }

    public function create()
    {
        return view('admin.supplier.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Supplier::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'status' => $request->status,
            ]
        );
        return redirect()->route('admin.supplier.index')->with('message','SubCategory Add successfully !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.supplier.edit',compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $supplier = Supplier::find($id);

        $supplier->update(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'status' => $request->status,
            ]
        );
        return redirect()->route('admin.supplier.index')->with('message','Supplier Update successfully !');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return back()->with('message', 'Supplier Deleted Successfully !');
    }
}
