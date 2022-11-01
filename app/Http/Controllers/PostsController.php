<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::orderBy("id",'asc')->paginate(3);
        return view('pages.users.blogs.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.users.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'postimage'=>'image|nullable|max:2048|mimes:png,jpg',
        ]);
         // Handling file upload restrictions
         if($request->hasFile('postimage'))
         {
        // // Obtain file properties such as size extension
        // $filenamewithExt=$request->file('postimage')->getClientOriginalName();
        // // Obtain filename
        // $filename=pathinfo($filenamewithExt,PATHINFO_FILENAME);
        // // Obtain extension
        // $extension=$request->file('postimage')->getClientOriginalExtension();
        // $filenametostore=$filename.'_'.time().'.'.$extension;
        // // Upload image
        // // $path=$request->file('postimage')->storeAs('public/cover_images',$filenametostore);
        $postimgpath= 'storage/'.$request->file('postimage')->store('cover_images','public');
 
         }
         else{
             $postimgpath='storage/cover_images/noimage.jpg';
         }
        $userpost = new Post();
        $userpost->title = $request->input('title');
        $userpost->user_id=Auth::user()->id;
        $userpost->slug=Str::slug($request->input('title'), '-');
        $userpost->body = $request->input('body');
        $userpost->imagepath=$postimgpath;
        $userpost->save();
        // return redirect()->route('admin.userposts.show', $userpost->id);
        // return view('pages.users.blogs.create')->with('success','Post Saved Successfully');
        return redirect()->back()->with('success','Post Saved Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('pages.users.blogs.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('pages.users.blogs.edit');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
