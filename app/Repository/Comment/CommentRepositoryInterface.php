<?php

namespace App\Repository\Comment;

use App\Model\Comment;
use App\Repository\RepositoryInterface;
use Throwable;

interface CommentRepositoryInterface extends RepositoryInterface
{
    public function getListData($with = false, $post_id = null, $paginate = false);
}
