<?php

namespace App\Modules\Pub\Register\Controllers;

use App\Modules\Pub\Register\Models\Register;
use App\Modules\Pub\Register\Services\StoreService;
use App\Modules\Pub\User\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct(StoreService $storeService)
    {
        $this->service = $storeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = $this->service->getCountries();

        return view('Pub.authentication-signup', compact('countries'));
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * StoreService a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        $this->service->save($request, new User());

        return redirect()->route('indices.index')->with('success', 'Successful Register');

//        return redirect()->back()->with('error', 'Error Register');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Pub\Register\Models\Register $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Pub\Register\Models\Register $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Modules\Pub\Register\Models\Register $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Pub\Register\Models\Register $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
