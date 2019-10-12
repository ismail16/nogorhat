<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png',
            'name' => 'required',
        ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $imagename = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('images/category_image')) {
                mkdir('images/category_image', 777, true);
            }
            $image->move('images/category_image', $imagename);
        } else {
            $imagename = 'default.jpg';
        }

        Category::create(
            [
                'name' => $request->name,
                'slug' => $slug,
                'image' => $imagename,
                'status' => $request->status,
            ]
        );

        return redirect()->route('admin.category.index');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('admin.order.invoice', compact('order'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png',
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {
            unlink('images/category_image/' . $category->image);
            $imagename = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!file_exists('images/category_image')) {
                mkdir('images/category_image', 777, true);
            }
            $image->move('images/category_image', $imagename);
        } else {
            $imagename = $category->image;
        }

        $category->update(
            [
                'name' => $request->name,
                'slug' => $slug,
                'image' => $imagename,
                'status' => $request->status,
            ]
        );

        return redirect()->route('admin.category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (file_exists('images/category_image/' . $category->image)) {
            unlink('images/category_image/' . $category->image);
        }
        $category->delete();
        return back()->with('message', 'Category Deleted Successfully !');
    }
}
