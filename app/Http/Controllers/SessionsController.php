<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view("sessions.create");
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        $attribute = request()->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if (! auth()->attempt($attribute)) {
            throw ValidationException::withMessages(["username" => "Your provided credentials could not be verified"]);
        }
        session()->regenerate();
        //session fixation:
        return redirect("/")->with("success", "Welcome back!");
    }

    public function destroy()
    {
        auth()->logout();

        return redirect("/")->with("success", "Goodbye");
    }
}
