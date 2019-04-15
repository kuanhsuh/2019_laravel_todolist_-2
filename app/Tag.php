<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function todos()
    {
        return $this->belongsToMany(Todo::class, 'todo_tags');
    }

    public function addTag() {
        Tag::create([
            'tag' => request('tag')
        ]);
    }
}
