<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DiscountCode;

class DiscountCodeController extends Controller
{

    public function index()
    {
        $discounts = DiscountCode::orderBy('id','desc')->get();
        return view('admin.discount.index',compact('discounts'));
    }

    public function create()
    {
        return view('admin.discount.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'discount_code' => 'required|unique:discount_codes',
            'discount' => 'required',
        ]);

        DiscountCode::create(
            [
                'title' => $request->title,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'discount_code' => $request->discount_code,
                'discount' => $request->discount,
                'status' => $request->status,
            ]
        );
        return redirect()->route('admin.discount.index')->with('message', 'Discount Saved Successfully !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $discount = DiscountCode::find($id);
        return view('admin.discount.edit',compact('discount'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'discount_code' => 'required|unique:discount_codes',
            'discount' => 'required',
        ]);

        $discount = DiscountCode::find($id);

        $discount->update(
            [
                'title' => $request->title,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'discount_code' => $request->discount_code,
                'discount' => $request->discount,
                'status' => $request->status,
            ]
        );

        return redirect()->route('admin.discount.index')->with('message', 'Discount Updated Successfully !');
    }

    public function destroy($id)
    {
        $discount = DiscountCode::find($id);
        $discount->delete();
        return back()->with('message', 'Discount Deleted Successfully !');
    }
}
