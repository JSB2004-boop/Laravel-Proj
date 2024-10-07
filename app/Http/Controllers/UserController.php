<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request -> validated([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' .User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'profile' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], 
        ]);

        if (request->hasFile('profile')) {
            $filenameWithExtension = $request->file('profile')->getClientOriginName();
            $filename = pathinfro($filenameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('profile')->getClientOriginalExtension();
            $filenameToStore = $filname . '_' . time() . '_' . $extension;
            $request->file('profile')->storeAs('Uploads/users-profile', $filenameToStore);
            $validated['profile'] = $filenameToStore;
        }

        $user = User::create($valited);

        return redirect(route('users', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
