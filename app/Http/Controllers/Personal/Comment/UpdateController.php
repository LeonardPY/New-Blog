<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Http;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $update, Comment $comment)
    {
        $data = $update->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }

}
