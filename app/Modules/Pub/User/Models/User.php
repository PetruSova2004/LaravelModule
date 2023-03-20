<?php

namespace App\Modules\Pub\User\Models;

use App\Modules\Pub\Contact\Models\Contact;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    protected $fillable = ['firstname', 'lastname', 'email', 'password', 'country', 'phone_number'];
    use HasFactory;
    use Notifiable;
    protected $primaryKey = 'id';

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }


    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForVonage($notification)
    {
        return $this->phone_number;
    }

}
