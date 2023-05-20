<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function createNote(Request $request)
    {
        $note = new Note;
        $note->content = $request->input('content');
        $note->author_id = $request->input('author_id');
        $note->save();

        return response()->json(['message' => 'Notiz erfolgreich erstellt'], 200);
    }
}
