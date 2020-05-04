<?php

namespace App\Policies;

use App\Filter;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any filters.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the filter.
     *
     * @param  \App\User  $user
     * @param  \App\Filter  $filter
     * @return mixed
     */
    public function view(User $user, Filter $filter)
    {
        //
    }

    /**
     * Determine whether the user can create filters.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->is_admin();
    }

    /**
     * Determine whether the user can update the filter.
     *
     * @param  \App\User  $user
     * @param  \App\Filter  $filter
     * @return mixed
     */
    public function update(User $user, Filter $filter)
    {
        return $user->is_admin();
    }

    /**
     * Determine whether the user can delete the filter.
     *
     * @param  \App\User  $user
     * @param  \App\Filter  $filter
     * @return mixed
     */
    public function delete(User $user, Filter $filter)
    {
        return $user->is_admin();
    }

    /**
     * Determine whether the user can restore the filter.
     *
     * @param  \App\User  $user
     * @param  \App\Filter  $filter
     * @return mixed
     */
    public function restore(User $user, Filter $filter)
    {
        return $user->is_admin();
    }

    /**
     * Determine whether the user can permanently delete the filter.
     *
     * @param  \App\User  $user
     * @param  \App\Filter  $filter
     * @return mixed
     */
    public function forceDelete(User $user, Filter $filter)
    {
        return $user->is_admin();
    }
}
