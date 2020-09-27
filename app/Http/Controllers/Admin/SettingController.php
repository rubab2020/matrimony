<?php

namespace App\Http\Controllers\Admin;
use Hash;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $settings = Setting::all();
         return view('admin.settings.index', compact('settings'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.settings.edit', compact('setting'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $setting = Setting::find($id);
            if ($setting == null)
                return redirect()->back()
                    ->withErrors("Items Not Found");
            else{
                if($request->hasFile('content')){
                    $image = $request->file('content');
                    $imageName = time().'.'.$image->extension();
                    $image->move(public_path('assets/admin/images/setting'),$imageName);
                    $setting->content = $imageName;
                    $setting->save(); 
                }
                else
                    $setting->content = $request->input('content');
                    $setting->save();
            } 
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()
                ->withErrors("Something went wrong");
        }

        return redirect()->route('admin.setting.index')
            ->with('success', "Successfully updated items");
    }

}
