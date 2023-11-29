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
        $posts = Post::select('id', 'content', 'media', 'created_at')->limit(5)->withCount('comments')->orderBy('created_at', 'desc')->get();
        return view('index', ['posts' => $posts]);
    }

    public function dev() {
        $users = User::all();
        return view('dev', ['users' => $users]);
    }
}