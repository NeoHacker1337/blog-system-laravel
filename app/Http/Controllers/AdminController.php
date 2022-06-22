<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AdminController extends Controller
{
    //
    public function index()
    {
      $post = DB::table('posts')->count();
      $tag = DB::table('tags')->count();
      $category = DB::table('category')->count();
      return view('admin.index',compact('post','tag','category'));
    }

public function category()
{
  $category = DB::table('category')->latest('id')->paginate(50);
  return view('admin.category.index',compact('category'));
}

public function createcategory(Request $request)
{
// return $request->all();
    $validatedData = $request->validate([
      'name' =>['required','min:1','max:100'],
    ]);
    if (!$validatedData)
    {
return back()->with('Failed','Please Enter Correct input');
    }
    else
    {
    // echo 'done';
      $tag = new Tag;
      $tag->name = $request->name;
      $tag->save();
      $data = $request->input('name');
    return back()->with('success','Category Has Been Updated Successfully');
    }
return redirect('/category');
}

public function tags()
{
  $tag = DB::table('tags')->latest('id')->paginate(50);
  return view('admin.tags.index',compact('tag'));
}

public function createtags(Request $request)
{
// return $request->all();
    $validatedData = $request->validate([
      'name' =>['required','min:1','max:100'],
    ]);
    if (!$validatedData)
    {
return back()->with('Failed','Please Enter Correct input');
    }
    else
    {
    // echo 'done';
      $Tag = new Tag;
      $Tag->name = $request->name;
      $Tag->save();
      $data = $request->input('name');

    return back()->with('success','Tags Has Been Updated Successfully');
    }
return redirect('/Tag');
}

public function post()
{
  $post = DB::table('posts')->latest('id')->paginate(50);
  $category = Category::all();
  $tag = Tag::all();
  return view('admin.post.index',compact('post','category','tag'));
}

public function createpost(Request $request)
{
// return $request->tags;

$arr = $request->tags;
$ctag =  implode(" ,",$arr);
  $validatedData = $request->validate([
   'title' =>['required','max:100'],
   'category_id'=>['nullable'],
   'meta_description' =>['required'],
   'body' =>['required'],
   'tags' =>['nullable'],
   ]);

   $image = $request->file('photo');
   $image_url = '';

    if($image)
    {
       $page_image_name=date('dmy_H_s_i').Str::random(3);
       $ext=strtolower($image->getClientOriginalExtension());
       $upload_path='media/';
       $fullname_image=$page_image_name.'.'.$ext;
       $image_url=$upload_path.$fullname_image;
       $image->move($upload_path,$fullname_image);
    }
   if (!$validatedData)
 {
 return back()->with('Failed', 'Data Not Save');

 }
 else
 {
// return $request->all();
$post = new Post;
$post->title = $request->title;
$post->category_id = $request->category_id;
$post->meta_description = $request->meta_description;
$post->body = $request->body;
$post->tags = $ctag;
$post->photo = $image_url;
$post->save();
 }

 return back()->with('success', 'Data has been Save');
}

 }
