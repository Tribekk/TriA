<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add (Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'firstname' => 'required|max:255|string',
            'otchestvo' => 'required|max:255|string',
            'email' => 'email|required|max:255|unique:clients',
            'number' => 'integer|required|digits:11|unique:clients'
        ]);

        $newClient = Client::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'otchestvo' => $request->otchestvo,
            'email' => $request->email,
            'number' => $request->number,
            'burn' => $request->burn
        ]);

        return redirect(route('edit.client', ['client'=>$newClient]));
    }

    public function edit (Request $request, User $client){
        $request->validate([
            'name' => 'required|max:255|string',
            'firstname' => 'required|max:255|string',
            'otchestvo' => 'required|max:255|string',
            'email' => 'nullable|email|max:255|unique:users,email,' .$client->id,
            'number' => 'nullable|numeric|digits:11|unique:users,number,' .$client->id
        ]);

        $client->name = $request->name;
        $client->firstname = $request->firstname;
        $client->otchestvo = $request->otchestvo;
        $client->email = $request->email;
        $client->number = $request->number;
        $client->burn = $request->burn;
        $client->save();

        return redirect(route('edit.client', ['client' => $client]));
    }

    public function delete (User $client){
        $client->delete();

        return redirect(route('client'));
    }
}
