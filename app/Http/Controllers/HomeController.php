<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Category;
use App\Models\HashTag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::latest()->get();
        $hashtags = HashTag::latest()->get();
        $newsWriters = User::where('role', 'writer')->with(['articleNews'])->latest()->get();
        $populerArticles = ArticleNews::with(['category', 'hashTags', 'user'])->where('is_popular', true)->latest()->take(7)->get();
        $newsArticles = ArticleNews::with(['category', 'hashTags', 'user'])->latest()->take(7)->get();
        $technologyArticles = ArticleNews::with(['category', 'hashTags', 'user'])->where('category_id', 7)->latest()->get();
        return view('pages.home', compact('categories', 'hashtags','newsWriters','newsArticles','technologyArticles','populerArticles'));
    }

    public function category(Category $category) {
        $articles = ArticleNews::with(['category', 'hashTags', 'user'])->where('category_id', $category->id)->latest()->get();
        $popularArticles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->where('category_id', $category->id)
        ->where('is_popular', true)
        ->latest()->take(5)->get();
        return view('pages.category', compact('category','articles','popularArticles'));
    }

    public function hashtag() {
        return view('pages.hashtag');
    }

    public function writer(User $user) {
        $articles = ArticleNews::with(['category', 'hashTags'])->where('user_id', $user->id)->latest()->paginate(3);
        $popularArticles = ArticleNews::with(['category', 'hashTags'])->where('user_id', $user->id)->where('is_popular', true)->latest()->first();
        return view('pages.writer', compact('user','articles','popularArticles'));
    }

    public function details() {
        return view('pages.details');
    }

    public function search() {
        return view('pages.search');
    }
}
