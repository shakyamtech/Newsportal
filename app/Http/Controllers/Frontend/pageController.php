<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class pageController extends BaseController
{


    public function home()
    {
        $article = Article::where('status', 'approved')->get();
        $latest_article = Article::orderBy('id', 'desc')->where('status', 'approved')->first();
        $trending_articles = Article::orderBy('views', 'desc')->where('status', 'approved')->limit(5)->get();
        $company = Company::first();
        $advertisement = Advertisement::first();
        return view('frontend.home', compact('article', 'latest_article', 'trending_articles', 'company','advertisement'));
    }

    public function category($slug)
    {

        $category = Category::where('slug', $slug)->first();
        $articles = $category->articles()->paginate(10);
        return view('frontend.category', compact('articles', 'category'));
    }

    public function article($id)
    {
        $article = Article::findOrFail($id);
        $cookie_data = Cookie::get("article$id");
        if (!$cookie_data) {
            $article->increment('views');
            Cookie::queue("article$id", $article->id);
        }
        return view('frontend.article', compact('article'));
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $article = Article::where('title', 'like', "%$q%")->first();
        if (!$article) {
            return view('404page');
        }
        $cookie_data = Cookie::get("article$article->id");
        if (!$cookie_data) {
            $article->increment('views');
            Cookie::queue("article$article->id", $article->id);
        }
        return view('frontend.article', compact('article'));
        return $request;
    }

    public function advertisement($id)
    {
        $advertisement=Advertisement::find($id);
        return view('frontend.advertisement',compact('advertisement'));

    }
}

