<?php

namespace App\Modules\Pub\Contact\Services;

use App\Modules\Pub\Contact\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ContactService
{

    public function addContact($request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
    }

    public static function getDate($created_at)
    {
        $createdAt = Carbon::parse($created_at);
        return $createdAt->format('M d Y');
    }

}
