<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'company' => 'required',
            'role' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'segment' => 'required',
            'employees' => 'required|numeric',
            'message' => 'nullable|max:400'
        ]);

        // TODO: send email, save in DB, etc.

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
