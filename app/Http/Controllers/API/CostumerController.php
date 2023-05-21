<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function createCustomer(Request $request)
    {
        $customer = new Customer;
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->country = $request->input('country');
        $customer->postal_code = $request->input('postal_code');
        $customer->save();

        return response()->json(['message' => 'Kunde erfolgreich erstellt'], 200);
    }

    public function updateCustomer(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        // Verify that the logged in user has access to the customer

        if (!Auth::user()->isAdmin() && $customer->id !== Auth::user()->customer_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->country = $request->input('country');
        $customer->postal_code = $request->input('postal_code');
        $customer->save();

        return response()->json(['message' => 'Kunde erfolgreich aktualisiert'], 200);
    }
    public function deleteCustomer(Request $request, $id)
    {
        // Check if the logged in user has administrator rights

        if (!$request->user()->isAdmin()) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json(['message' => 'Kunde erfolgreich gelöscht'], 200);
    }

}
