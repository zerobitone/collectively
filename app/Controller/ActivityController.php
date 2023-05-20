<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;
class ActivityController extends Controller
{
    public function createActivity(Request $request)
    {
        $activity = new \App\Models\Activity;
        $activity->subject = $request->input('subject');
        $activity->due_date = $request->input('due_date');
        $activity->completed = $request->input('completed', false);
        $activity->customer_id = $request->input('customer_id');
        $activity->save();

        return response()->json(['message' => 'Aktivität erfolgreich erstellt'], 200);
    }

    public function updateActivity(Request $request, $id)
    {
        $activity = \App\Models\Activity::findOrFail($id);

        // Check if the activity is owned by the current user or if the user has admin rights

        if (!Auth::user()->isAdmin() && $activity->customer_id !== Auth::user()->customer_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $activity->subject = $request->input('subject');
        $activity->due_date = $request->input('due_date');
        $activity->completed = $request->input('completed', false);
        $activity->customer_id = $request->input('customer_id');
        $activity->save();

        return response()->json(['message' => 'Aktivität erfolgreich aktualisiert'], 200);
    }

    public function deleteActivity($id)
    {
        $activity = \App\Models\Activity::findOrFail($id);

        // Überprüfen, ob die Aktivität dem aktuellen Benutzer gehört oder ob der Benutzer Administratorrechte hat

        if (!Auth::user()->isAdmin() && $activity->customer_id !== Auth::user()->customer_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $activity->delete();

        return response()->json(['message' => 'Aktivität erfolgreich gelöscht'], 200);
    }

}
