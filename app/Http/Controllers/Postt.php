<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Cat;

class Postt extends Controller
{
    public function show(){

        $posts=Post::all();
    return view('post/add',compact("posts"));
    //
}
public function add(){

    
    $cat=Cat::all();
    return view('post/adds',compact("cat"));

//
}
public function insertpost(Request $request)
{
     $request->validate([
        'address' => 'required',
        'url' => 'required',
    ]);
    
$addpost=new Post;
$addpost->address=requset("address");
$addpost->img=requset("address");
$addpost->url=requset("url");
$addpost->post_cat=requset("cat");
$addpost->save();
return view('post/adds',compact("cat"));

//
}

}
