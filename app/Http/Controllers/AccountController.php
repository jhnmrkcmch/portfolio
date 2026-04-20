<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('accounts.index');
    }

    // Fetch users (AJAX)
    public function data()
    {
        return response()->json(
            User::select('id', 'name', 'email', 'age', 'created_at','updated_at')->get()
        );
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users,email',
            'age'      => 'required|integer',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'age'      => $request->age,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User added successfully'], 201);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'age'   => 'required|integer',
            'password' => 'nullable|min:6'
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->age   = $request->age;
        $user->role = $request->role;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json(['message' => 'Updated successfully'], 200);
    }

    // DELETE
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
