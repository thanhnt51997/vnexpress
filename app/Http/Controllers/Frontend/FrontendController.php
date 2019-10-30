<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Comment;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $category_desktop = Category::where('id', '<', '8')->get();
        $category_mobile = Category::where('id', '>=', '8')->get();
        $related_news = Post::with('category')->latest('created_at')->paginate(config('app.paginate'));
        $hot_news = $related_news->first();
        foreach ($related_news as $re) {
            $slug_related_news = $re->category->slug;
        }
        $latest_pots = Category::with('latestPost')->limit(4)->get();
        $categories = Category::limit(4)->get();
        foreach ($categories as $category) {
            $category->load('latest_posts');
        }
        $most_view_posts = Post::latest('view')->limit(6)->get();
        return view('frontend.pages.index', compact('category_mobile', 'category_desktop', 'hot_news', 'related_news', 'slug_related_news', 'latest_pots', 'categories', 'most_view_posts'));
    }

    public function postView($category, $slug)
    {
        $string_arr = explode('-', $slug);
        $id = (int)end($string_arr);
        $post = Post::with('category')->findOrFail($id);
        if ($post->category->slug != $category) {
            return abort(404);
        }
        $comments = Comment::with('user', 'post')->where('post_id',$id)->get();
        $related_pots = Post::whereHas('category', function ($q) use ($post) {
            return $q->where('slug', $post->category->slug);
        })->with('category')
            ->where('id', '!=', $id) // So you won't fetch same post
            ->limit(5)
            ->get();
        return view('frontend.pages.post', compact('post', 'related_pots','comments'));
    }
}
