<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function store(Todo $todo) {
        $attributes = request()->validate([
            'description' => 'required|min:5|max:255'
        ]);
        $todo->addTodo($attributes);
        session()->flash('success', 'Todo Has Been Created!');
        return back();
    }

    public function edit(Todo $todo) {
        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo) {
        $todo->update([
            'description' => request('description')
        ]);
        session()->flash('success', 'Todo Has Been updated!');
        return redirect()->view('todos.index');
    }

    public function destroy() {
        $todo = Todo::find(request('todoId'));
        $todo->delete();
        return response()->json(['new_body' => 'testing' ],200);
    }
}
