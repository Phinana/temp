<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\Comment;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        $comment = new Comment();
        $comment->comment = 'test.';
        $comment->post()->associate($post)->save();
    }
}
