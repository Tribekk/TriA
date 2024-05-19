<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function edit(Request $request)
    {
        $user = User::findOrFail($request->worker);

        $request->validate([
            'firstname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'otchestvo' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,'. $user->id,
            'number' => 'nullable|integer|unique:users,number,'. $user->id
        ]);

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->otchestvo = $request->otchestvo;
        $user->burn = $request->burn;
        $user->passport = $request->passport;
        $user->email = $request->email;
        $user->number = $request->number;


        $user->save();

        $user->syncRoles($request->role);

        return redirect(route('worker'));
    }

    public function delete (User $user){
        $user->delete();

        return redirect(route('worker'));
    }
}
