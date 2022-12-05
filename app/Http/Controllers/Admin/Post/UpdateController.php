<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $updateRequest, Post $post)
    {
        $data = $updateRequest->validated();
        $post = $this->service->update($data, $post);
        return view('admin.post.show', compact('post'));
    }
}
