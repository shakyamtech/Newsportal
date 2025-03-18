<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class pageController extends Controller
{
    public function __construct()
    {
        $company = Company::first();
        $categories = Category::where('status',true)->get();
        View::share([
            "company" => $company,
            "categories" => $categories,

        ]);
    }

    public function home()
    {
        $article = Article::where('status', 'approved')->get();
        $latest_article = Article::orderBy('id','desc')->where('status','approved')->first();
        $trending_articles = Article::orderBy('views','desc')->where('status','approved')->limit(5)->get();
        $company = Company::first();
        return view('frontend.home', compact('article','latest_article','trending_articles','company'));
    }
}
