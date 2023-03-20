<?php

namespace App\Modules\Pub\Register\Services;

use App\Modules\Pub\User\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoreService
{

    public function save(Request $request, Model $model)
    {
        $user = $model->fill($request->only($model->getFillable()));  // fill() - заполняет модель теми данными которые разрешены к массовому заполнению в $fillable конкретной модели; only - говорит что нам нужны какие-то конкретные данные; getFillable() - возвращает те поля которые перечислены в $fillable

        $user->password = Hash::make($request->password);

        $model->save();

        Auth::login($user);

        return true;
    }

    public function getCountries()
    {
        $countries = DB::table('country')->get();
        $countriesNames = [];

        foreach ($countries as $country) {
            array_push($countriesNames, $country->Name);
        }
//        dd($countriesNames);
        return $countriesNames;
    }

}
