<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('superadmin') || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        if ($user->hasRole('superadmin')) {
            return true;
        }
        if ($user->hasRole('admin')) {
            // Admins can view themselves and regular users
            return $user->id === $model->id || $model->hasRole('user');
        }
        // Regular users can only view themselves
        return $user->id === $model->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Only superadmin and admin can create users
        return $user->hasRole('superadmin') || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        if ($user->hasRole('superadmin')) {
            return true;
        }
        if ($user->hasRole('admin')) {
            // Admins can update themselves and regular users
            return $user->id === $model->id || $model->hasRole('user');
        }
        // Regular users can only update themselves
        return $user->id === $model->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        if ($user->hasRole('superadmin')) {
            return true;
        }
        if ($user->hasRole('admin')) {
            // Admins can delete regular users, not themselves or other admins
            return $model->hasRole('user');
        }
        // Regular users cannot delete anyone
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return false;
    }
}
