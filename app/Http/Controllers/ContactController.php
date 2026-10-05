<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(StoreLeadRequest $request)
    {
        Lead::create($request->validated());

        // Optional: notify the team of a new lead.
        // Mail::to(config('mail.leads_inbox'))->send(new NewLeadReceived($lead));

        return redirect()
            ->route('contact')
            ->with('status', 'Thanks — your project details were received. A senior consultant will reach out within one business day.');
    }
}
