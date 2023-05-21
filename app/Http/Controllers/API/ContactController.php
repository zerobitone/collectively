<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function createContact(Request $request)
    {
        $contact = new Contact;
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->customer_id = $request->input('customer_id');
        $contact->save();

        return response()->json(['message' => 'Kontakt erfolgreich erstellt'], 200);
    }

    public function updateContact(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        // Verify that the logged in user is the author or has admin rights

        if (!Auth::user()->isAdmin() && $contact->customer_id !== Auth::user()->customer_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->customer_id = $request->input('customer_id');
        $contact->save();

        return response()->json(['message' => 'Kontakt erfolgreich aktualisiert'], 200);
    }

    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);

        // Verify that the logged in user is the author or has admin rights

        if (!Auth::user()->isAdmin() && $contact->customer_id !== Auth::user()->customer_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $contact->delete();

        return response()->json(['message' => 'Kontakt erfolgreich gelöscht'], 200);
    }

}
