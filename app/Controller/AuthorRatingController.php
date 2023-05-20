<?php

namespace App\Http\Controllers;
use App\Models\AuthorRating;
use Illuminate\Http\Request;
class AuthorRatingController extends Controller
{
    public function createAuthorRating(Request $request)
    {
        $authorRating = new AuthorRating;
        $authorRating->author_id = $request->input('author_id');
        $authorRating->customer_id = $request->input('customer_id');
        $authorRating->rating = $request->input('rating');
        $authorRating->comment = $request->input('comment');
        $authorRating->save();

        return response()->json(['message' => 'Bewertung erfolgreich erstellt'], 200);
    }
}
