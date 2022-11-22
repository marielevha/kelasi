<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 19/11/22
 * Time: 21:45
 */

namespace App\Services;


use App\Models\User;

class UserService
{
    public function viewers()
    {
        return User::where('profile', env('PROFILE_VIEWER'))->get();
    }

    public function enterprise()
    {
        return User::where('profile', env('PROFILE_ENTERPRISE'))->get();
    }

    public function admin()
    {
        return User::where('profile', env('PROFILE_ADMIN'))
            ->orWhere('profile', env('PROFILE_SUPER_ADMIN'))
            ->get();
    }

    public function super_admin()
    {
        return User::where('profile', env('PROFILE_SUPER_ADMIN'))->get();
    }

    public function get_all_deleted_users()
    {
        return User::onlyTrashed()->get();
    }

    public function find_user_by_email($email)
    {
        return User::withTrashed()->where('email', $email)->first();
    }

    public function update_user_by_email($email, $data)
    {
        $user = User::where('email', $email)->where('deleted_at', null)->first();

        return $user->update([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'phone' => $data->phone,
        ]);
    }

    public function disable_user_by_email($email)
    {
        return User::where('email', $email)->first()->delete();
    }

    public function enable_user_by_email($email)
    {
        return User::withTrashed()->where('email', $email)->first()->restore();
    }
}
