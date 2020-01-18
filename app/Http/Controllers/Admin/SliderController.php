<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use File;

class SliderController extends Controller
{
     public function index()
    {
        $sliders = Slider::orderBy('id','desc')->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png',
            'title' => 'required',
        ]);

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->slider_text = $request->slider_text;
        $slider->text_position = $request->text_position;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->status =  $request->status;

        $image = $request->file('image');
        $slug = str_slug($request->title);

        if (isset($image)){
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/slider_image')){
                mkdir('images/slider_image', 777, true);
            }
            $image->move('images/slider_image',$imagename);
            $slider->image = $imagename;
        }
        $slider->save();
        return redirect()->route('admin.slider.index')->with('message', 'Slider Saved Successfully !');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'mimes:jpeg,jpg,png',
            'title' => 'required',
        ]);
        
        $slider = Slider::find($id);

        $slider->title = $request->title;
        $slider->slider_text = $request->slider_text;
        $slider->text_position = $request->text_position;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->status =  $request->status;

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if (isset($image)){
            if (file_exists('images/slider_image/'.$slider->image)){
                unlink('images/slider_image/'.$slider->image);
            }
            $imagename = $slug.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('images/slider_image')){
                mkdir('images/slider_image', 777, true);
            }
            $image->move('images/slider_image',$imagename);
            $slider->image = $imagename;
        }else{
            $slider->image = $slider->image;
        }

        $slider->save();
        return redirect()->route('admin.slider.index')->with('message', 'Slider Updated Successfully !');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if (!is_null($slider)) {
            if(File::exists('images/slider_image/'.$slider->image))
            {
                File::delete('images/slider_image/'.$slider->image);
            }
        }
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('message', 'Slider Deleted Successfully !');
    }
}
