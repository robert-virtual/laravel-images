<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Images;
use App\Models\Like;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $images = Images::all();
    return view('images.index', ['images' => $images]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return view('images.Create');
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

  public function comment(Request $req)
  {
    $comment = new Comment;
    $comment->content = $req->content;
    $comment->user_id = session('id');
    $comment->image_id = $req->image_id;
    $comment->save();
    return redirect('/images');
  }
  public function like(Request $req)
  {
    $like = new Like;
    $like->user_id = session('id');
    $like->image_id = $req->image_id;
    $like->save();
    return redirect('/images');
  }
}
