<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->where( 'state', 'public' )->take( 5 )->get();
        return view( 'landing' )->with( 'posts', $posts );
    }
}
