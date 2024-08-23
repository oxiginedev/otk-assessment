<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
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
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        DB::transaction(
            callback: function () use ($request) {
                User::create($request->validated());
            }
        );

        return back()->with('success', 'Registration successful');
    }
}
