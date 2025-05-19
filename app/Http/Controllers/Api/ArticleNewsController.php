<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ArticleNewsResource;
use App\Models\ArticleNews;
use Illuminate\Http\Request;

class ArticleNewsController extends Controller
{
    public function index(Request $request) {
        $articles = ArticleNews::with(['category', 'user', 'hashTags','newsComments']);

        if ($request->has('limit')) {
            $articles->take($request->input('limit'));
        }

        return ArticleNewsResource::collection($articles->get());
    }
}
