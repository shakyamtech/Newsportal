<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        $article = Article::where('status', 'approved')->get();
        return view('frontend.home', compact('article'));
    }
}
