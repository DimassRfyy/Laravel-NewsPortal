<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::latest()->get();
        return view('pages.home', compact('categories'));
    }

    public function category() {
        return view('pages.category');
    }

    public function hashtag() {
        return view('pages.hashtag');
    }

    public function writer() {
        return view('pages.writer');
    }

    public function details() {
        return view('pages.details');
    }

    public function search() {
        return view('pages.search');
    }
}
