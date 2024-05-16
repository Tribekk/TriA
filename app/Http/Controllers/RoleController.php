<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function add (Request $request){
        $request->validate([
            'name' => 'required|max:255'
        ]);

        $newRole = Role::create([
            'name' => $request->name
        ]);

        return redirect(route('edit.role', ['role'=>$newRole]));
    }

    public function edit (Request $request, Role $role){
        $request->validate([
            'name' => 'required|max:255|unique:roles'
        ]);

        $role->name = $request->name;
        $role->save();

        return redirect(route('edit.role', ['role' => $role]));
    }

    public function delete (Role $role){
        $role->delete();

        return redirect(route('role'));
    }
}
