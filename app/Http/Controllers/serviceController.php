<?php

namespace App\Http\Controllers;

use App\Service;
use App\Slider;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index()
    {
      $service = Service::all();
      return view('admin.service.index',compact('service'));
    }
    public function create()
    {
      $sliders = Slider::all();
      return view('admin.service.add',compact('sliders'));
    }
    public function store(Request $request)
    {
      $service = new Service;
      $service->name = $request->name;
      $service->description = $request->description;
      $service->slider_id = $request->slider_id;
    $file=$request->file('photo');
    $destinationpath = 'images';
    $service->photo = $file->getClientOriginalName();
    $file->move($destinationpath,$service->photo);

      $service->save();
      return redirect('/adminpanel/services');
    }

    public function edit($id)
    {
      $service = Service::find($id);
      $sliders = Slider::all();
      return view('admin.service.edit',compact('service','sliders'));
    }

    public function update($id, Request $request)
    {
      $service = Service::find($id);
      $service->name = $request->name;
      $service->description = $request->description;
      $service->slider_id = $request->slider_id;

      if ($file = $request->file('photo')){
        // unLink(public_path().'/images/'.$service->photo);
        $destinationpath = 'images';
        $service->photo = $file->getClientOriginalName();
        $file->move($destinationpath,$service->photo);
      }else{
        $service->photo = $service->photo;
      }


      $service->save();
      return redirect('/adminpanel/services');
      }

      public function destroy($id)
      {
        $service = Service::find($id);
        unLink(public_path().'/images/'.$service->photo);
        $service->delete();
        return redirect()->back();
      }
}
