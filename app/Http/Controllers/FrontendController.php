<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;
use DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      $post = DB::table('posts')->latest('id')->paginate(6);
      return view('frontend.index',compact('post'));
    }


    public function singlepost($id)
    {
        $category = DB::table('category')->latest('id')->paginate(5);
        $post = Post::findOrFail($id);
        //$comments = Comment::all();
       $comments = DB::table('comments')->where('post_id',$id)->get();

        $tag = Tag::all();
      return view('frontend.singleblog',compact('category','post','comments','tag'));
    }

    public function commentSave(Request $request)
    {
  // return $request->all();
      $validatedData = $request->validate([
        'user_name' =>['required','min:1','max:100'],
        'post_id'=>['required','min:1'],
        'user_name'=>['nullable','max:100'],
        'email'=>['required'],
        'comments'=>['nullable'],
        'website' => ['nullable'],
      ]);
      if (!$validatedData)
      {
    //echo "fail";
  return back()->with('Failed','Please Enter Correct input');
      }
      else
      {
    //  echo 'done';
        $comment = new Comment;
        $comment->user_name = $request->user_name;
        $comment->post_id = $request->post_id;
        $comment->user_name = $request->user_name;
        $comment->email = $request->email;
        $comment->comments = $request->comments;
        $comment->website = $request->website;
        $comment->save();
        $data = $request->input('user_name');
      //  return $request->all();

     return back()->with('success','Comments Has Been Updated Successfully');
      }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
