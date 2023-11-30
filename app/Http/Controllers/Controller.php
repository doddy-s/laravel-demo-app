<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $posts = Post::with('user')->with('community')->with('comment')->withCount('comment')->withCount('like')->limit(20)->get();
        return view('index', ['posts' => $posts]);
    }

    public function dev() {
        // $dev = Post::select('id', 'content', 'media', 'created_at')->limit(5)->with('user')->withCount('comment')->orderBy('created_at', 'desc')->get();
        $dev = Post::with('user')->with('community')->with('comment')->withCount('comment')->limit(5)->get();
        $users = User::all();
        return view('dev', ['users' => $users, 'dev' => $dev]);
    }
}