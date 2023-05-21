<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function createOrganization(Request $request)
    {
        $organization = new Organization;
        $organization->name = $request->input('name');
        $organization->industry = $request->input('industry');
        $organization->address = $request->input('address');
        $organization->city = $request->input('city');
        $organization->state = $request->input('state');
        $organization->country = $request->input('country');
        $organization->postal_code = $request->input('postal_code');
        $organization->save();

        return response()->json(['message' => 'Organisation erfolgreich erstellt'], 200);
    }
}
