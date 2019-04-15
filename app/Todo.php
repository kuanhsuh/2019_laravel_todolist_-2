<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'todo_tags');
    }

    public function addTodo($request) {
        $todo = Todo::create([
            'description' => request('description')
        ]);

        foreach($request['tags'] as $tag) {
            $todo->tags()->attach($tag);
        }
    }
}
