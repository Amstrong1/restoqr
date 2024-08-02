<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'structure' => ['required', 'string', 'max:255'],
            'email_struct' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:structures,email'],
            'tel' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $fileName = time() . '.' . $request->logo->extension();
        $path = $request->file('logo')->storeAs('logos', $fileName, 'public');

        $structure = Structure::create([
            'name' => $request->structure,
            'email' => $request->email_struct,
            'tel' => $request->tel,
            'address' => $request->address,
            'logo' => $path,
            'slug' => $request->slug,
        ]);

        $user = User::create([
            'structure_id' => $structure->id,
            'name' => $request->lname . ' ' . $request->fname,
            'role' => 'admin',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        if ($user->structure->active) {
            Auth::login($user);
            return redirect(route('dashboard', absolute: false));
        } else {
            return redirect(route('soon'));
        }
    }
}
