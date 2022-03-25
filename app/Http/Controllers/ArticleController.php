<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::allPaginate(10);
        return view('app.article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::findBySlug($slug);
      //  dd($article->comments[0]->subject);
        return view('app.article.show', compact('article'));
    }

    public function allByTag(Tag $tag)
    {
        $articles = $tag->article()->findByTag();
        return view('app.article.byTag', compact('articles'));
    }
}
