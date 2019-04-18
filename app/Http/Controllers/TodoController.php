<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Tag;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        // $tags = Tag::all();
        // return view('todos.index', compact(['todos', 'tags']));
        return view('todos.index', compact(['todos']));
    }

    public function store(Todo $todo) {
        $attributes = request()->validate([
            'description' => 'required|min:5|max:255',
            'tags' => 'required'
        ]);
        $todo->addTodo($attributes);
        session()->flash('success', 'Todo Has Been Created!');
        return back();
    }

    public function show(Todo $todo, $slug=null) {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo) {
        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo) {

        // dd(request());
        request()->validate([
            'description' => 'required|min:5|max:255',
            'tags' => 'required'
        ]);
        $todo->update([
            'description' => request('description'),
        ]);
        // foreach(request['tags'] as $tag) {
        //     $todo->tags()->sync(request('tags'), false);
        // }
        $todo->tags()->sync(request('tags'), false);
        session()->flash('success', 'Todo Has Been updated!');
        return redirect('/');
    }

    public function destroy() {
        $todo = Todo::find(request('todoId'));
        $todo->tags()->detach();
        $todo->delete();
        return response()->json(['new_body' => 'testing' ],200);
    }
}
