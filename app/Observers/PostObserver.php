<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PostObserver
{

    public function creating(Post $post)
    {
//        $post->slug = Str::slug($post->title . '_' . $post->lang);
        $post->slug = Str::slug($post->title);
        $count = Post::where('slug', 'like', "%{$post->slug}%")->count();

        if ($count > 0) {
            $post->slug .= '-' . $count;
        }
        if (isset($post->url)) {
            unset($post->url);
        }
    }

    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        if (Cache::has("post_{$post->slug}")) {
            Cache::forget("post_{$post->slug}");
        }
    }

    public function updating(Post $post)
    {
        if (isset($post->url)) {
            unset($post->url);
        }
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        if (Cache::has("post_{$post->slug}")) {
            Cache::forget("post_{$post->slug}");
        }
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        if (Cache::has("post_{$post->slug}")) {
            Cache::forget("post_{$post->slug}");
        }
    }

    /**
     * Handle the post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        if (Cache::has("post_{$post->slug}")) {
            Cache::forget("post_{$post->slug}");
        }
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        if (Cache::has("post_{$post->slug}")) {
            Cache::forget("post_{$post->slug}");
        }
    }
}
