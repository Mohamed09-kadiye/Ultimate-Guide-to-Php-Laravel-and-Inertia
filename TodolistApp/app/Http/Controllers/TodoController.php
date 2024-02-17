<?php
// app/Http/Controllers/TodoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // Fetch all todos from the database
        $todos = Todo::all();

        // Return view with todos data
        return view('todos.index', compact('todos'));
    }
    public function create()
    {
        return view('todos.create');
    }
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
    ]);

    // Create and save the new todo item
    Todo::create($validatedData);

    // Redirect back to the todo list page
    return redirect()->route('todos.index')->with('success', 'Todo created successfully!');
}
public function edit($id)
{
    // Find the todo by ID
    $todo = Todo::findOrFail($id);

    // Return view with todo data
    return view('todos.edit', compact('todo'));
}

public function update(Request $request, $id)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
    ]);

    // Find the todo by ID and update its data
    Todo::findOrFail($id)->update($validatedData);

    // Redirect back to the todo list page
    return redirect()->route('todos.index')->with('success', 'Todo updated successfully!');
}

public function destroy($id)
{
    // Find the todo by ID and delete it
    Todo::findOrFail($id)->delete();

    // Redirect back to the todo list page
    return redirect()->route('todos.index')->with('success', 'Todo deleted successfully!');
}


}
