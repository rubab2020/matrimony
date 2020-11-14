<?php

namespace App\Http\Controllers\Admin;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pages = Page::all();
         return view('admin.pages.index', compact('pages'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function upload(Request $request)
     {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move(public_path('assets/admin/images/pages/'), $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('assets/admin/images/pages/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
     }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){
      
      try {
        $title   = $request->input('title');
        $content = $request->input('editor');
        $page = new Page();
        $page->url = '/'.$title;
        $page->title = $title;
        $page->content = $content;
        $page->save();
    } catch (\Exception $e) {
        return redirect()->back()
            ->withErrors("Something went wrong");
    }
    return redirect()->route('admin.pages.index')
        ->with('success', "Successfully page created ");

     }


      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        return view('admin.pages.show', compact('page'));
    }


     /**
     * Display the specified resource to edit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit', compact('page'));
    }

     /**
     * Display the specified resource to edit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$page)
    {
        try {
            $page = Page::find($page);
            $title = $request->input('title');
            $content = $request->input('editor');
            $page->url = '/'.$title;
            $page->title = $title;
            $page->content = $content;
            $page->update();
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors("Something went wrong");
        }
        return redirect()->route('admin.pages.index')
            ->with('success', "Successfully page updated ");
        
    }

    

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        if ($page == null)
            return redirect()->back()
                ->withErrors("Page Not Found");

        if ($page->delete()) {
            return redirect()->route('admin.pages.index')
                ->with('success', "Successfully page deleted");
        }

        return redirect()->back()
            ->withErrors("Something went wrong");
    }
    
    
}
