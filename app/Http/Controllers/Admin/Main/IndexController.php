<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Http;


class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [
            'userCount' => User::all()->count(),
            'postCount' => Post::all()->count(),
            'categoryCount' => Category::all()->count(),
            'tagCount' => Tag::all()->count(),
        ];
        return view('admin.main.index', compact('data'));
    }

}
