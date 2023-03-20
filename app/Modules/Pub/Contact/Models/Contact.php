<?php

namespace App\Modules\Pub\Contact\Models;

use App\Modules\Pub\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['user_id', 'name', 'email', 'phone', 'message',];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
