<?php
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
class ProductPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->role === User::ROLE_SELLER;
    }

    public function delete(User $user)
    {
        return $user->role === User::ROLE_ADMIN;
    }
}
