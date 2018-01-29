<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index(Setting $setting)
    {
      $setting = $setting->all();
      return view('admin.setting.index',compact('setting'));
    }

    public function store(Request $request,Setting $setting){

      foreach (array_except($request->toArray(), ['_token', 'submit']) as $key => $req){
            $setting =$setting->where('namesetting', $key)->get()->first();
            $setting->fill(['value' => $req])->save();
        }

        return redirect()->back()->withFlashMessage('Setting Updated');

    }
}
