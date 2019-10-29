<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class PagesController extends Controller{
    public function index() {
        $movies = Movie::latest()->get();
        
        return view('pages/index', compact('movies'));
    }

    public function detail($id)
    {
        $detail = Movie::where('id', $id)->first();
        $comment = Comment::where('movie_id', $id)->get();

        return view('pages/detail', compact('detail', 'comment'));
    }

    public function send_comment(Request $request, $id)
    {
        $send = new Comment;
        $send->movie_id = $id;
        $send->name = 'Anonymous'.rand();
        $send->comments = $request->comments;
        $send->save();

        return redirect('detail/'.$id);
    }
}
