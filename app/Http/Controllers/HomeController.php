<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\Category;
use App\Models\HashTag;
use App\Models\NewsComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::latest()->get();
        $hashtags = HashTag::latest()->get();

        $newsWriters = User::where('role', 'writer')
            ->with(['articleNews'])
            ->latest()->get();

        $populerArticles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->where('is_popular', true)
        ->latest()->take(7)->get();

        $newsArticles = ArticleNews::with(['category', 'hashTags', 'user'])
            ->latest()->take(7)->get();
        $technologyArticles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->where('category_id', 7)->latest()->get();

        return view('pages.home', compact('categories', 'hashtags','newsWriters','newsArticles','technologyArticles','populerArticles'));
    }

    public function category(Category $category) {
        $articles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->where('category_id', $category->id)
        ->latest()->get();

        $popularArticles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->where('category_id', $category->id)
        ->where('is_popular', true)
        ->latest()->take(5)->get();
        
        return view('pages.category', compact('category','articles','popularArticles'));
    }

    public function hashtag(HashTag $hashtag) {
        $articles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->whereHas('hashTags', function($query) use ($hashtag) {
            $query->where('slug', $hashtag->slug);
        })
        ->latest()
        ->paginate(3);
        
        $popularArticles = ArticleNews::with(['category', 'hashTags', 'user'])
        ->whereHas('hashTags', function($query) use ($hashtag) {
            $query->where('slug', $hashtag->slug);
        })
        ->where('is_popular', true)
        ->latest()
        ->take(5)
        ->get();

        $trendingHashtags = HashTag::where('is_trending', true)->latest()->take(5)->get();

        return view('pages.hashtag', compact('hashtag','articles','trendingHashtags','popularArticles'));
    }

    public function writer(User $user) {
        $articles = ArticleNews::with(['category', 'hashTags'])->where('user_id', $user->id)->latest()->paginate(3);
        $popularArticles = ArticleNews::with(['category', 'hashTags'])->where('user_id', $user->id)->where('is_popular', true)->latest()->first();
        return view('pages.writer', compact('user','articles','popularArticles'));
    }

    public function details(ArticleNews $articleNews) {
        $articleNews->load(['category', 'user', 'newsComments', 'hashTags']);
        $trendingHashtags = HashTag::where('is_trending', true)->latest()->take(5)->get();
        $relatedArticles = ArticleNews:: where('category_id', $articleNews->category_id)
        ->where('id', '!=', $articleNews->id)
        ->latest()
        ->take(4)
        ->get();
        return view('pages.details', compact('articleNews','trendingHashtags','relatedArticles'));
    }

    public function search(Request $request) {
        $query = $request->input('q');
        $articles = [];

        if ($query) {
            $articles = ArticleNews::with(['category', 'hashTags', 'user'])
                ->where('title', 'like', "%{$query}%")
                ->orWhere('content', 'like', "%{$query}%")
                ->latest()
                ->paginate(6);
        }

        return view('pages.search', compact('articles', 'query'));
    }

    public function comment(Request $request) {
        $data = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['article_news_id'] = $request->article_news_id;

        NewsComment::create($data);
        return redirect()->back()->with('success', 'Comment posted successfully.');
    }
}
