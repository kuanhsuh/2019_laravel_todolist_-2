<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    public function addTodo() {
        Todo::create([
            'description' => request('description')
        ]);
    }
}
