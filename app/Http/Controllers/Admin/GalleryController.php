<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
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
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('assets/admin/images/galleries'), $imageName);
            $gallery = new Gallery();
            $gallery->image = $imageName;
            $gallery->save();
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()
                ->withErrors("Something went wrong");
        }
        return redirect()->route('admin.galleries.index')
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
        $gallery = Gallery::find($id);
        return view('admin.galleries.show', compact('gallery'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if ($gallery == null)
            return redirect()->back()
                ->withErrors("Image Not Found");

        if ($gallery->delete()) {
            return redirect()->route('admin.galleries.index')
                ->with('success', "Successfully deleted image");
        }

        return redirect()->back()
            ->withErrors("Something went wrong");
    }
}
