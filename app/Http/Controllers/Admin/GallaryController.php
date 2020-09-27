<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Gallary;
use App\Http\Controllers\Controller;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gallaries = Gallary::all();
         return view('admin.gallaries.index', compact('gallaries'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('assets/admin/images/gallaries'),$imageName);
            $gallary = new Gallary();
            $gallary->image = $imageName;
            $gallary->save();
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors("Something went wrong");
        }
        return redirect()->route('admin.gallaries.index')
            ->with('success', "Successfully created image");
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallary = Gallary::find($id);
        return view('admin.gallaries.show', compact('gallary'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary = Gallary::find($id);
        if ($gallary == null)
            return redirect()->back()
                ->withErrors("Image Not Found");

        if ($gallary->delete()) {
            return redirect()->route('admin.gallaries.index')
                ->with('success', "Successfully deleted image");
        }

        return redirect()->back()
            ->withErrors("Something went wrong");
    }
   
}
