<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Category;
use App\Model\Comment;
use App\Model\Post;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Comment\CommentRepositoryInterface;
use App\Repository\Frontend\FrontendRepositoryInterface;
use App\Repository\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;


class FrontendController extends Controller
{
    protected $frontendRepo;
    protected $categoryRepo;
    protected $postRepo;
    protected $commentRepo;

    public function __construct(FrontendRepositoryInterface $frontendRepo, CategoryRepositoryInterface $categoryRepo, PostRepositoryInterface $postRepo, CommentRepositoryInterface $commentRepo)
    {
        $this->frontendRepo = $frontendRepo;
        $this->categoryRepo = $categoryRepo;
        $this->postRepo = $postRepo;
        $this->commentRepo = $commentRepo;
    }

    public function index()
    {
        $related_news = $this->frontendRepo->getListData(null, null, false, '1', false, true);
        $hot_news = $related_news->first();

        $latest_posts = $this->categoryRepo->getListData(null, true, '4', false, false);
        foreach ($latest_posts as $post => $latest_post) {
            $count_comments = $this->commentRepo->getListData(false, $latest_post->latestPost->id, false);
            $latest_posts[$post]->count_comment = $count_comments->count();
        }
        $categories = $this->categoryRepo->getListData(null, true, '5', false, true);
        foreach ($categories as $category) {
            $posts_latest = $category->load('latest_posts');
            foreach ($category->latest_posts as $post => $post_latest) {
                $count_comments = $this->commentRepo->getListData(true, $post_latest->id, false);
                $category->latest_posts[$post]->count_comment = $count_comments->count();
            }
        }
        $most_view_posts = $this->postRepo->getListData(null, null, true, true, 6, true);

        return view('frontend.pages.index', compact('hot_news', 'related_news', 'latest_posts', 'categories', 'most_view_posts', 'comments'));
    }

    public function postView($category, $slug)
    {
        $string_arr = explode('-', $slug);
        $id = (int)end($string_arr);
        $post = $this->postRepo->findById($id, 'category');
        if ($post->category->slug != $category) {
            return abort(404);
        }

        $category_info = $this->categoryRepo->getInfoByField(['slug' => $category]);
        if (empty($category_info)) {
            return abort(404);
        }
        $viewed = Session::get('viewed_post', []);
        if (!in_array($post->id, $viewed)) {
            $post->increment('view');
            Session::push('viewed_post', $post->id);
        }
        $comments = $this->commentRepo->getListData(true, $id, false);
        $related_posts = $this->postRepo->getListData(null, $category_info->id, 1, false, 4, false, $post->id);
        Carbon::setLocale('vi');
        $now = Carbon::now();
        return view('frontend.pages.post', compact('post', 'related_posts', 'comments', 'now'));
    }
}
