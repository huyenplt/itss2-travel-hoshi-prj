<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserBlogComment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserBlogComment  $userBlogComment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, UserBlogComment $userBlogComment)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserBlogComment  $userBlogComment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, UserBlogComment $userBlogComment)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserBlogComment  $userBlogComment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, UserBlogComment $userBlogComment)
    {
        return $user->isRole('admin')||$user->id === $userBlogComment->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserBlogComment  $userBlogComment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, UserBlogComment $userBlogComment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserBlogComment  $userBlogComment
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, UserBlogComment $userBlogComment)
    {
        //
    }
}
