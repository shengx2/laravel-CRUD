<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    // Show all users
     
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    
     // Show create form
     
    public function create()
    {
        return view('users.create');
    }

    
     // Store a new user
     
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('users.index')->with('success', 'User created successfully!');

    }

   // Show edit form
    public function edit($id)
    {
        $user = User::FindOrFail($id);
        return view('users.edit', compact('user'));
    }

     // Update a user
     public function update(Request $request, $id)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email,' . $id,
         ]);
 
         $user = User::findOrFail($id);
         $user->update([
             'name' => $request->name,
             'email' => $request->email,
         ]);
 
         return redirect()->route('users.index')->with('success', 'User updated successfully!');
     }
 
     // Delete a user
     public function destroy($id)
     {
         User::destroy($id);
         return redirect()->route('users.index')->with('success', 'User deleted successfully!');
     }
}
