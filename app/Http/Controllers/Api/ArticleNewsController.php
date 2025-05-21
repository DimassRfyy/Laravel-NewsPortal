<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ArticleNewsResource;
use App\Models\ArticleNews;
use Illuminate\Http\Request;

class ArticleNewsController extends Controller
{
    public function index(Request $request) {
        $articles = ArticleNews::with(['category']);

        if ($request->has('limit')) {
            $articles->take($request->input('limit'));
        }

        if($request->has('category_id')) {
            $articles->where('category_id', $request->input('category_id'));
        }

        if($request->has('user_id')) {
            $articles->where('user_id', $request->input('user_id'));
        }

        if($request->has('search')) {
            $articles->where('title', 'like', '%'.$request->input('search').'%');
        }

        if($request->has('hashtag_id')) {
            $articles->whereHas('hashtags', function($query) use ($request) {
                $query->where('hashtag_id', $request->input('hashtag_id'));
            });
        }

        return ArticleNewsResource::collection($articles->get());
    }

    public function show(ArticleNews $articleNews) {
        $articleNews->load(['category','user','hashtags','newsComments.user','newsComments']);
        $articleNews->loadCount(['newsComments']);

        return new ArticleNewsResource($articleNews);
    }
}
