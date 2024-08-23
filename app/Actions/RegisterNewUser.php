<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterNewUser
{
    /**
     * Create a new user
     * 
     * @param array $input
     * 
     * @return mixed
     */
    public function create(array $input): User
    {
        $user = DB::transaction(
            callback: function () use ($input) {
                return User::create($input);
            }
        );

        return $user;
    }
}