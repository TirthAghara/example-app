<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studentinfoo; // Use the correct model

class MemberController extends Controller
{
    // Show all members
    public function showMembers()
    {
        $data = Studentinfoo::all();
        return view('list', ['Studentinfoos' => $data]); // Removed redundant return statement
    }

    // Add a new member
    public function member_store(Request $req)
    {
        // Validate request data
        $req->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:100',
            'enrollno' => 'required|string',
            'branch' => 'required|string',
        ]);

        // Create a new member
        Studentinfoo::create([
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'age' => $req->age,
            'enrollno' => $req->enrollno,
            'branch' => $req->branch,
        ]);

        // Redirect with a success message
        return redirect()->route('list')->with('success', 'Member added successfully.');
    }

    // Delete a member
    public function delete($id)
    {
        $data = Studentinfoo::findOrFail($id); // Use `findOrFail` for better error handling
        $data->delete();

        return redirect()->route('list')->with('success', 'Member deleted successfully.');
    }

    // Show the edit form for a member
    public function edit($id)
    {
        $data = Studentinfoo::findOrFail($id);

        return view('edit', ['data' => $data]);
    }

    // Update a member
    public function update(Request $req, $id)
    {
        // Validate request data
        $req->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'enrollno' => 'required|string',
            'branch' => 'required|string',
        ]);

        // Find the member and update details
        $data = Studentinfoo::findOrFail($id);
        $data->update([
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'age' => $req->age,
            'enrollno' => $req->enrollno,
            'branch' => $req->branch,
        ]);

        // Redirect back to the list with success
        return redirect()->route('list')->with('success', 'Member updated successfully.');
    }
    public function detail(Request $req, $id)
    {
        $data = Studentinfoo::findOrFail($id); // Fetch item by ID
        return view('details', compact('data')); // Pass the correct variable name
    }

}
