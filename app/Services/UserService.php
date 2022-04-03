<?php


namespace App\Services;


use App\Models\User;

class UserService
{
    public function store($data)
    {
        User::firstOrCreate($data);
    }

    public function update($user, $data)
    {
        $user->update($data);
    }
}
