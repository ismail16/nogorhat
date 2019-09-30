<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::orderBy('id','desc')->get();
//        dd($subcategories->category());
        return view('admin.subcategory.index',compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::orderBy('id','desc')->where('status',1)->get();
        return view('admin.subcategory.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
        ]);

        Subcategory::create(
            [
                'category_id' => $request->category_id,
                'name' => $request->name,
                'slug' => str_slug($request->name),
                'status' => $request->status,
            ]
        );
        return redirect()->route('admin.subcategory.index')->with('message','SubCategory Add successfully !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::orderBy('id','desc')->where('status',1)->get();
        return view('admin.subcategory.edit',compact('subcategory','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
        ]);

        $subcategory = Subcategory::find($id);

        $subcategory->update(
            [
                'category_id' => $request->category_id,
                'name' => $request->name,
                'slug' => str_slug($request->name),
                'status' => $request->status,
            ]
        );
        return redirect()->route('admin.subcategory.index')->with('message','SubCategory Update successfully !');
    }

    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return back()->with('message', 'Sub-Category Deleted Successfully !');
    }
}
