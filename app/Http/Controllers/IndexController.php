<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Resources\CommentResource;
use App\Http\Requests\CommentRequest;
class IndexController extends Controller
{
    public function comments(CommentRequest $request){
        $request->validated();
        $comments=  Comment::withCount('likes')->sortable()->paginate(10);
        return CommentResource::collection($comments);
    }
}
