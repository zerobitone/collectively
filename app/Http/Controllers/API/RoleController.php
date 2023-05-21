<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function createRole(Request $request)
    {
        $role = new Role;
        $role->name = $request->input('name');
        $role->save();

        return response()->json(['message' => 'Rolle erfolgreich erstellt'], 200);
    }
}
