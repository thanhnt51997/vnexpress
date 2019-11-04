<?php

namespace App\Policies;

use App\Model\User;
use App\Model\Post;
use Illuminate\Auth\Access\HandlesAuthorization;


class PostPolicy
{
    use HandlesAuthorization;

    public function view(User $user,  $id)
    {
        $post = Post::findOrFail($id);
        return $user->hasAccess(['post.update']) or $user->id == $post->user_id;
    }

    public function create(User $user)
    {
//        dd($user->hasAccess(['post.create']));
        return $user->hasAccess(['post.create']);
    }

    public function edit(User $user, $id)
    {
        $post = Post::findOrFail($id);
        return $user->hasAccess(['post.update']) and $user->id == $post->user_id;
    }

    public function update(User $user, $id)
    {
        $post = Post::findOrFail($id);
        return $user->hasAccess(['post.update']) and $user->id == $post->user_id;
    }

    public function delete(User $user, $id)
    {
        $post = Post::findOrFail($id);
        return $user->hasAccess(['post.delete']) or $user->id == $post->user_id;
    }

//    public function publish(User $user)
//    {
//        return $user->hasAccess(['post.publish']);
//    }
//
//    public function draft(User $user)
//    {
//        return $user->inRole('editor');
//    }

    /**
     * Determine whether the user can restore the post.
     *
     * @param \App\Model\User $user
     * @param \App\Post $post
     * @return mixed
     */
    public function restore(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param \App\Model\User $user
     * @param \App\Post $post
     * @return mixed
     */
    public function forceDelete(User $user, Post $post)
    {
        //
    }

//    public function publish(User $user)
//    {
//        return $user->hasAccess(['post.publish']);
//    }

//    public function draft(User $user)
//    {
//        return $user->inRole('editor');
//    }
}
