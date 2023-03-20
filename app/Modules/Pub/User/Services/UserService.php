<?php

namespace App\Modules\Pub\User\Services;

use App\Modules\Pub\User\Models\User;
use Illuminate\Http\Request;

class UserService
{

    public function subscribeUser(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
        ]);

        $users = User::all();

        foreach ($users as $user)
        {
            if ($user->email == $request->email) {
                $user->signed = 1;
            }
        }
        return true;
    }

}
