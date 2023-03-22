<?php

namespace App\Modules\Pub\Index\Services;


use App\Modules\Pub\User\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexService
{

    public function subscribeUser(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
        ]);

        $user = Auth::user();

        if ($user->email == $request->email) {
            if ($user->signed === 1) {
                return false;
            }

            $updateUser = User::find($user->id);
            $updateUser->update([
                'signed' => $updateUser->signed++,
            ]);
            return true;
        } else {
            return false;
        }
    }

    public function getPresentTime()
    {
        $x = Carbon::now();
        return $x;
    }


}
