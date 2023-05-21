<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function createAuthor(Request $request)
    {
        $author = new Author;
        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->rating = $request->input('rating', 0);
        $author->level = $request->input('level', 'Beginner');
        $author->experience = $request->input('experience', 0);
        $author->save();

        return response()->json(['message' => 'Autor erfolgreich erstellt'], 200);
    }

    public function updateAuthor(Request $request, $id)
    {
        $author = Author::findOrFail($id);

        // Verify that the logged in user is the author or has admin rights

        if (!Auth::user()->isAdmin() && $author->id !== Auth::user()->author_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $author->name = $request->input('name');
        $author->email = $request->input('email');
        $author->rating = $request->input('rating', 0);
        $author->level = $request->input('level', 'Beginner');
        $author->experience = $request->input('experience', 0);
        $author->save();

        return response()->json(['message' => 'Autor erfolgreich aktualisiert'], 200);
    }

    public function deleteAuthor($id)
    {
        $author = Author::findOrFail($id);

        // Verify that the logged in user is the author or has admin rights

        if (!Auth::user()->isAdmin() && $author->id !== Auth::user()->author_id) {
            return response()->json(['message' => 'Keine Berechtigung'], 403);
        }

        $author->delete();

        return response()->json(['message' => 'Autor erfolgreich gelöscht'], 200);
    }

}
