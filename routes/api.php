<?php

use App\Http\Controllers\API\ActivityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\CrmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Customers routes
Route::get('/customers/{id}', [CrmController::class, 'getCustomer']);
Route::post('/customers', [CrmController::class, 'createCustomer']);
Route::put('/customers/{id}', [CrmController::class, 'updateCustomer']);
Route::delete('/customers/{id}', [CrmController::class, 'deleteCustomer']);

// Contacts routes
Route::get('/contacts/{id}', [CrmController::class, 'getContact']);
Route::post('/contacts', [CrmController::class, 'createContact']);
Route::put('/contacts/{id}', [CrmController::class, 'updateContact']);
Route::delete('/contacts/{id}', [CrmController::class, 'deleteContact']);

// Organizations routes
Route::get('/organizations/{id}', [CrmController::class, 'getOrganization']);
Route::post('/organizations', [CrmController::class, 'createOrganization']);
Route::put('/organizations/{id}', [CrmController::class, 'updateOrganization']);
Route::delete('/organizations/{id}', [CrmController::class, 'deleteOrganization']);

// Opportunities routes
Route::get('/opportunities/{id}', [ActivityController::class, 'getOpportunity']);
Route::post('/opportunities', [ActivityController::class, 'createOpportunity']);
Route::put('/opportunities/{id}', [ActivityController::class, 'updateOpportunity']);
Route::delete('/opportunities/{id}', [ActivityController::class, 'deleteOpportunity']);

// Activities routes
Route::get('/activities/{id}', [CrmController::class, 'getActivity']);
Route::post('/activities', [CrmController::class, 'createActivity']);
Route::put('/activities/{id}', [CrmController::class, 'updateActivity']);
Route::delete('/activities/{id}', [CrmController::class, 'deleteActivity']);

// Authors routes
Route::get('/authors/{id}', [CrmController::class, 'getAuthor']);
Route::post('/authors', [CrmController::class, 'createAuthor']);
Route::put('/authors/{id}', [CrmController::class, 'updateAuthor']);
Route::delete('/authors/{id}', [CrmController::class, 'deleteAuthor']);

// Author Ratings routes
Route::get('/author-ratings/{id}', [CrmController::class, 'getAuthorRating']);
Route::post('/author-ratings', [CrmController::class, 'createAuthorRating']);
Route::put('/author-ratings/{id}', [CrmController::class, 'updateAuthorRating']);
Route::delete('/author-ratings/{id}', [CrmController::class, 'deleteAuthorRating']);

// Notes routes
Route::get('/notes/{id}', [CrmController::class, 'getNote']);
Route::post('/notes', [CrmController::class, 'createNote']);
Route::put('/notes/{id}', [CrmController::class, 'updateNote']);
Route::delete('/notes/{id}', [CrmController::class, 'deleteNote']);

// Users routes
Route::get('/users/{id}', [CrmController::class, 'getUser']);
Route::post('/users', [CrmController::class, 'createUser']);
Route::put('/users/{id}', [CrmController::class, 'updateUser']);
Route::delete('/users/{id}', [CrmController::class, 'deleteUser']);

// Roles routes
Route::get('/roles/{id}', [CrmController::class, 'getRole']);
Route::post('/roles', [CrmController::class, 'createRole']);
Route::put('/roles/{id}', [CrmController::class, 'updateRole']);
Route::delete('/roles/{id}', [CrmController::class, 'deleteRole']);

