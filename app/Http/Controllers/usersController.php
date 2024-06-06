<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('pages.users', compact('users'));
    }
    public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('users')->with('success', 'User deleted successfully!');
}

    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string', // Minimum 8 characters
            'auth' => 'required|integer', // Validate auth field
        ]);

        // Create new user
        $user = new User();
        $user->fullName = $validatedData['fullName'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->auth = $validatedData['auth']; // Set auth field
        $user->save();

        return redirect()->route('users')->with('success', 'User added successfully!');
    }
    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('pages.userEdit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    
    // Update user data based on request input
    $user->update($request->all());
    return redirect()->route('users')->with('success', 'User updated successfully!');
}

}
