<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            "login" => ["required", "string", "unique:users", "max:255"],
            "password" => ["required", "confirmed", "min:8"],
            'name' => ['required', 'string'],
            'firstname' => ['required', 'string', 'max:255']
        ]);
        $user = User::create([
            'login' => $request->login,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'firstname' => $request->firstname,
            'otchestvo' => $request->otchestvo
        ]);
        $user->assignRole('user');
        if ($request['check'] != '') {
            auth()->login($user);
        }
        return redirect(route('home'));
    }

    public function login(Request $request)
    {
        $user = $request->only(['login', 'password']);
        if (auth()->attempt($user)) {
            return redirect(route('home'));
        }
        return redirect(route('login'))->withErrors(['login' => 'Не верно введён логин и/или пароль']);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'otchestvo' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,'. $user->id,
            'number' => 'nullable|integer|unique:users,number,'. $user->id
        ]);
        $user = auth()->user();

        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->otchestvo = $request->otchestvo;
        $user->burn = $request->burn;
        $user->passport = $request->passport;
        $user->email = $request->email;
        $user->number = $request->number;

        $user->save();

        return redirect(route('profile'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function password(Request $request){
        $request->validate([
            "password" => ["required", "confirmed", "min:8"],
            "oldPassword" => ['required']
        ]);
        $user = auth()->user();
        if (Hash::check($request->oldPassword, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect(route('password'))->withErrors(['oldPassword' =>'Успех']);
        }
        return redirect(route('password'))->withErrors(['oldPassword' =>'Не верный пароль']);
    }

    public function destroy(){
        auth()->user()->delete();

        return view('user.login');
    }
}
