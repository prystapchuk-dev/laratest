<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;

use App\Services\ArticleService;

class ArticleController extends Controller
{

    protected $services;

    /**
     * @param $services
     */
    public function __construct(ArticleService $services)
    {
        $this->services = $services;
    }

    public function show(Request $request)
    {
        $article = $this->services->getArticleBySlug($request);
        return new ArticleResource($article);
    }

    public function viewsIncrement(Request $request)
    {
        $article = $this->services->getArticleBySlug($request);

        $article->state->increment('views');
        return new ArticleResource($article);
    }

    public function likesIncrement(Request $request)
    {
        $article = $this->services->getArticleBySlug($request);

        $inc = $request->get('increment');
        $inc ? $article->state->increment('likes') : $article->state->decrement('likes');
        return new ArticleResource($article);
    }
}
