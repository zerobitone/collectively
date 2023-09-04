<?php

use App\Http\Controllers\API\ActivityController;
use App\Http\Controllers\API\AuthorController;
use App\Http\Controllers\API\AuthorRatingController;
use App\Http\Controllers\API\NoteController;
use App\Http\Controllers\API\OpportunityController;
use App\Http\Controllers\API\OrganizationController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\API\CostumerController;
use App\Http\Controllers\API\PostController;
use Illuminate\Support\Facades\Route;


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

Route::get('/api/posts', [PostController::class, 'index']);


// Customers routes
Route::get('/customers/{id}', [CostumerController::class, 'getCustomer']);
Route::post('/customers', [CostumerController::class, 'createCustomer']);
Route::put('/customers/{id}', [CostumerController::class, 'updateCustomer']);
Route::delete('/customers/{id}', [CostumerController::class, 'deleteCustomer']);

// Contacts routes
Route::get('/contacts/{id}', [CostumerController::class, 'getContact']);
Route::post('/contacts', [CostumerController::class, 'createContact']);
Route::put('/contacts/{id}', [CostumerController::class, 'updateContact']);
Route::delete('/contacts/{id}', [CostumerController::class, 'deleteContact']);

// Organizations routes
Route::get('/organizations/{id}', [OrganizationController::class, 'getOrganization']);
Route::post('/organizations', [OrganizationController::class, 'createOrganization']);
Route::put('/organizations/{id}', [OrganizationController::class, 'updateOrganization']);
Route::delete('/organizations/{id}', [OrganizationController::class, 'deleteOrganization']);

// Opportunities routes
Route::get('/opportunities/{id}', [OpportunityController::class, 'getOpportunity']);
Route::post('/opportunities', [OpportunityController::class, 'createOpportunity']);
Route::put('/opportunities/{id}', [OpportunityController::class, 'updateOpportunity']);
Route::delete('/opportunities/{id}', [OpportunityController::class, 'deleteOpportunity']);

// Activities routes
Route::get('/activities/{id}', [ActivityController::class, 'getActivity']);
Route::post('/activities', [ActivityController::class, 'createActivity']);
Route::put('/activities/{id}', [ActivityController::class, 'updateActivity']);
Route::delete('/activities/{id}', [ActivityController::class, 'deleteActivity']);

// Authors routes
Route::get('/authors/{id}', [AuthorController::class, 'getAuthor']);
Route::post('/authors', [AuthorController::class, 'createAuthor']);
Route::put('/authors/{id}', [AuthorController::class, 'updateAuthor']);
Route::delete('/authors/{id}', [AuthorController::class, 'deleteAuthor']);

// Author Ratings routes
Route::get('/author-ratings/{id}', [AuthorRatingController::class, 'getAuthorRating']);
Route::post('/author-ratings', [AuthorRatingController::class, 'createAuthorRating']);
Route::put('/author-ratings/{id}', [AuthorRatingController::class, 'updateAuthorRating']);
Route::delete('/author-ratings/{id}', [AuthorRatingController::class, 'deleteAuthorRating']);

// Notes routes
Route::get('/notes/{id}', [NoteController::class, 'getNote']);
Route::post('/notes', [NoteController::class, 'createNote']);
Route::put('/notes/{id}', [NoteController::class, 'updateNote']);
Route::delete('/notes/{id}', [NoteController::class, 'deleteNote']);

// Users routes
Route::get('/users/{id}', [UserController::class, 'getUser']);
Route::post('/users', [UserController::class, 'createUser']);
Route::put('/users/{id}', [UserController::class, 'updateUser']);
Route::delete('/users/{id}', [UserController::class, 'deleteUser']);

// Roles routes
Route::get('/roles/{id}', [RoleController::class, 'getRole']);
Route::post('/roles', [RoleController::class, 'createRole']);
Route::put('/roles/{id}', [RoleController::class, 'updateRole']);
Route::delete('/roles/{id}', [RoleController::class, 'deleteRole']);

