<?php

namespace App\Repository\Frontend;

use App\Model\Post;
use App\Repository\RepositoryInterface;
use Throwable;

interface FrontendRepositoryInterface extends RepositoryInterface
{
    public function getListData($user_id = null, $category_id = null, $with = false, $status = null, $limit = false, $paginate = false);
}
