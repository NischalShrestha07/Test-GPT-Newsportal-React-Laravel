<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }


public function store(Request $request)
{
    $request->validate([
        'title'=>'required',
        'content'=>'required',
    ]);
    return Post::create($request->all());
}
public function show($id){
    return Post::find($id);
} 
public function update(Request $request,$id)
{
    $post =Post::find($id);
    $post ->update($request -> all());
    return $post;

}
public function destroy($id){
    return Post::destroy($id);
}
}