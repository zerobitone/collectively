<?php

namespace App\Http\Controllers;

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
