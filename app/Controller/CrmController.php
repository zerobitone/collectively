<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\Opportunity;
use App\Models\Activity;
use App\Models\Author;
use App\Models\AuthorRating;
use App\Models\Note;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class CrmController extends Controller
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

    public function createActivity(Request $request)
    {
        $activity = new Activity;
        $activity->subject = $request->input('subject');
        $activity->due_date = $request->input('due_date');
        $activity->completed = $request->input('completed', false);
        $activity->customer_id = $request->input('customer_id');
        $activity->save();

        return response()->json(['message' => 'Aktivität erfolgreich erstellt'], 200);
    }

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

    public function createNote(Request $request)
    {
        $note = new Note;
        $note->content = $request->input('content');
        $note->author_id = $request->input('author_id');
        $note->save();

        return response()->json(['message' => 'Notiz erfolgreich erstellt'], 200);
    }

    public function createUser(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        return response()->json(['message' => 'Benutzer erfolgreich erstellt'], 200);
    }

    public function createRole(Request $request)
    {
        $role = new Role;
        $role->name = $request->input('name');
        $role->save();

        return response()->json(['message' => 'Rolle erfolgreich erstellt'], 200);
    }
}

