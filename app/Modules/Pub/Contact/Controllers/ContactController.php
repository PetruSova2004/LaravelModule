<?php

namespace App\Modules\Pub\Contact\Controllers;

use App\Modules\Pub\Contact\Models\Contact;
use App\Modules\Pub\Contact\Services\ContactService;
use App\Modules\Pub\User\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @var Contact $contact */
        $contacts = Contact::all();
        $user = Auth::user()->id;

        return view('Pub.account-messages', compact('contacts', 'user'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->service->addContact($request);

        return redirect()->route('indices.index')->with('success', 'Message has been send');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Pub\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $selectedContact = Contact::where('id', $contact->id)->first();

        return view('Pub.account-one-message', compact('selectedContact'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Pub\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Pub\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Pub\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
