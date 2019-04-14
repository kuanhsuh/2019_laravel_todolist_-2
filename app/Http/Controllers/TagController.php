<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function store(Tag $tag) {
        $attributes = request()->validate([
            'tag' => 'required|min:5|max:255'
        ]);
        $tag->addTag($attributes);
        session()->flash('success', 'Tag Has Been Created!');
        return back();
    }

}
