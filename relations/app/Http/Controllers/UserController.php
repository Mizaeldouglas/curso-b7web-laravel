<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUsers(Request $request)
    {
        $newUsers = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::updateOrCreate(['email' => $newUsers['email']], $newUsers);

        if (response()->json($user, 201)) {
            # code...
            return response()->json($user, 201);
        }

        return response()->json($user, 404);
    }

    public function index(Request $request)
    {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r)
    {
        $users = User::find($r->id);
        return $users->address;
    }
}