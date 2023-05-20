<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function createOpportunity(Request $request)
    {
        $opportunity = new Opportunity;
        $opportunity->name = $request->input('name');
        $opportunity->amount = $request->input('amount');
        $opportunity->stage = $request->input('stage');
        $opportunity->customer_id = $request->input('customer_id');
        $opportunity->save();

        return response()->json(['message' => 'Chance erfolgreich erstellt'], 200);
    }
}
