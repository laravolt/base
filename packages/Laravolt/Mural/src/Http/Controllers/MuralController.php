<?php

namespace Laravolt\Mural\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravolt\Mural\Comment;

class MuralController extends Controller
{

    /**
     * ContentController constructor.
     */
    public function __construct()
    {
    }

    public function fetch(Request $request)
    {
        $content = Post::findOrFail($request->get('commentable_id'));
        $comments = $content->comments()->latest($request->get('last_id'))->paginate(config('mural.per_page'));

        return view('mural::list', compact('comments', 'content'));
    }

    public function store(Request $request)
    {
        $content = Post::findOrFail($request->get('commentable_id'));

        $comment = Comment::create(['body' => $request['body']]);
        $comment->author()->associate(auth()->user());
        $content->comments()->save($comment);

        return view('mural::item', compact('comment'));
    }
}
