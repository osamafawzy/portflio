<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class sliderController extends Controller
{

  public function index()
  {
    $slider = Slider::all();
    return view('admin.slider.index',compact('slider'));
  }
    public function create()
    {
      return view('admin.slider.add');
    }

    public function store(Request $request)
    {
      $slider = new Slider;
      $slider->title = $request->title;
      $slider->description = $request->description;
      $slider->other = $request->other;
    $file=$request->file('photo');
    $destinationpath = 'images';
    $slider->photo = $file->getClientOriginalName();
    $file->move($destinationpath,$slider->photo);

      $slider->save();
      return redirect('/adminpanel/sliders');
    }

    public function edit($id)
    {
      $slider = Slider::find($id);
      return view('admin.slider.edit',compact('slider'));
    }

    public function update($id, Request $request)
    {
      $slider = Slider::find($id);
      $slider->title = $request->title;
      $slider->description = $request->description;
      $slider->other = $request->other;

      if ($file = $request->file('photo')){
        // unLink(public_path().'/images/'.$slider->photo);
        $destinationpath = 'images';
        $slider->photo = $file->getClientOriginalName();
        $file->move($destinationpath,$slider->photo);
      }else{
        $slider->photo = $slider->photo;
      }


      $slider->save();
      return redirect('/adminpanel/sliders');
      }

      public function destroy($id)
      {
        $slider = Slider::find($id);
        Service::where('slider_id',$id)->delete();
        unLink(public_path().'/images/'.$slider->photo);
        $slider->delete();
        return redirect()->back();
      }
    }
