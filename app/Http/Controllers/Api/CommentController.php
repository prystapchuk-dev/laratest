<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\AddNewComment;

use Validator;

use App\Http\Request\Comment\CreateRequest;

class CommentController extends Controller
{
    public function store (CreateRequest $request)
    {
        AddNewComment::dispatch($request['subject'], $request['body'], $request['article_id']);

        return response()->json([
            'status' => 'success',
        ], 201);
    }
}
