<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController
{
    public function indexAction(Request $request): View
    {
        if ($request->getMethod() === 'POST'){
            $validated = $request->validate([
                'username' => ['required', 'max:255'],
                'email' => ['email','max:255'],
            ]);
        }
        return view('index');
    }
}
