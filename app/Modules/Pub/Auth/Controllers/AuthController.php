<?php

namespace App\Modules\Pub\Auth\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pub.authentication-signin');
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

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {

            if (Auth::user()->is_admin) {
                return redirect()->route('admin.indices.index');
            } else {
                return redirect()->route('indices.index')->with('success', 'You successfully logged in');
            }
        }else {
            return redirect()->back()->with('error', 'Email or password are incorrect');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Pub\Auth\Models\Auth $auth
     * @return \Illuminate\Http\Response
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Modules\Pub\Auth\Models\Auth $auth
     * @return \Illuminate\Http\Response
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Modules\Pub\Auth\Models\Auth $auth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Modules\Pub\Auth\Models\Auth $auth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auth $auth)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('indices.index');
    }
}
