<?php

namespace App\Http\Controllers;

use App\Actions\RegisterNewUser;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RegisterController extends Controller
{
    /**
     * Return the registration form
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * Create a new user
     * 
     * @param \App\Http\Requests\RegisterRequest $request
     * @param \App\Actions\RegisterNewUser $action
     * 
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function store(RegisterRequest $request, RegisterNewUser $action): RedirectResponse
    {
        // Because its bad practice to perform database operations in the controller
        // We will use the action class to create a new user
        $user = $action->create($request->validated());

        event(new Registered($user));

        return back()->with('success', 'Registration successful');
    }
}
