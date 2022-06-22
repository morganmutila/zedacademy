<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Shot;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $categories = Category::all();
        $shots = Shot::orderByDesc('created_at')
                  ->with(['user', 'category'])
                  ->get();

        return view('home',
        [
            'categories'   => $categories,
            'shots'        => $shots
        ]);
    }
}
