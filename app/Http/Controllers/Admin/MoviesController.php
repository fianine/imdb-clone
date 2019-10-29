<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;
use Auth;
use Redirect;
use Validator;

class MoviesController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies = Movie::latest()->get();

        return view('admin/movies/index', compact('movies'));
    }

    public function add(Request $request)
    {
        if(!$request->title) {
            return view('admin/movies/add');
        } else {
            $movie = new Movie;

            if($request->hasFile('file')) {
                $image = $request->file('file');
                $filename = time().'.'.$image->guessExtension();
                $path = $request->file('file')->move(base_path() . '/public/upload/image/', $filename);

                $movie->title = $request->title;
                $movie->slug = str_slug($request->title);
                $movie->year = $request->year;
                $movie->synopsis = $request->synopsis;
                $movie->img_movie = $filename;
                $movie->save();
            }

            return redirect('admin/movies');
        }
    }

    public function edit(Request $request, $id)
    {
        if(!$request->title) {
            $movies = Movie::where('id', $id)->first();

            return view('admin/movies/edit', compact('movies'));
        } else {
            $movie = Movie::find($id);

            if($request->hasFile('file')) {
                $image = $request->file('file');
                $filename = time().'.'.$image->guessExtension();
                $path = $request->file('file')->move(base_path() . '/public/upload/image/', $filename);

                $movie->title = $request->title;
                $movie->slug = str_slug($request->title);
                $movie->year = $request->year;
                $movie->synopsis = $request->synopsis;
                $movie->img_movie = $filename;
                $movie->save();
            } else {
                $movie->title = $request->title;
                $movie->slug = str_slug($request->title);
                $movie->year = $request->year;
                $movie->synopsis = $request->synopsis;
                $movie->save();
            }

            return redirect('admin/movies');
        }
    }

    public function delete($id)
    {
        $movies = Movie::find($id);
        $movies->delete();
        
        return redirect('admin/movies');
    }

}
