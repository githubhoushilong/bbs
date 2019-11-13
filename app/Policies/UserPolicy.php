<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    //第一个参数为当前登录用户实例，第二个参数则为要进行授权的用户实例
    public function update(User $currentUser, User $user){
        return $currentUser->id === $user->id;
    }
}
