<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        // 读取分类ID关联的话题，并按照20条分页
        $topics = Topic::where('category_id', $category->id)->paginate(20);
        // 传参数话题和分类到模板中
        return view('topics.index', compact('topics', 'category'));
    }
}