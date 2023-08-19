<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController
{
    public function createUser(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:191',
            'email' => 'required|email|max:1910',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 442,
                'message' => $validator->messages()
            ], 442);
        } else {
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
            return response()->json([
                'status' => 200,
                'message' => 'Benutzer erfolgreich erstellt'
            ], 200);
        }
    }

    public function updateUser(Request $request, $userId): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:191',
            'email' => 'required|email|max:1910',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 442,
                'message' => $validator->messages()
            ], 442);
        } else {
            $user = User::find($userId);
            if (!$user) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Benutzer nicht gefunden'
                ], 404);
            }

            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();

            return response()->json([
                'status' => 200,
                'message' => 'Benutzer erfolgreich aktualisiert'
            ], 200);
        }
    }

    public function deleteUser($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return response()->json([
                'status' => 404,
                'message' => 'Benutzer nicht gefunden'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Benutzer erfolgreich gelöscht'
        ], 200);
    }


}
