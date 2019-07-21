<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PostController extends Controller
{
	public function posts(){
		$posts = Posts::all();
		return $posts;
	}

	public function create(Request $request){
		$post = new Posts;
	    $post->title = $request->title;
	    $post->description = $request->description;
	    $post->date = $request->date;
	    return $post;
	}

	public function store(Request $request){
	    $post = new Posts;
	    $post->title = $request->title;
	    $post->description = $request->description;
	    $post->date = $request->date;

	    $post->save();
	    return $post;
	}

	public function search($posts)
	{
		$post = Posts::find($posts);
        return $post;
	}

}