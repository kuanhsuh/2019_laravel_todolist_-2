@extends('layouts/master')

@section('content')
<div class="container">
    <div class="columns is-mobile">
        <div class="column is-10 is-offset-1">
            <h1 class="title">
                Laravel Todolist with Bulma
            </h1>
            <div class="field is-grouped">
                <p class="control is-expanded">
                    <input class="input" type="text" placeholder="Find a repository">
                </p>
                <p class="control">
                    <a class="button is-info">
                        Add New
                    </a>
                </p>
            </div>
            <br><br>
            <h2 class="title is-2">Tags</h2>
            <div>
                <span class="tag is-info">Info</span>
            </div>
            <br><br>
            <h2 class="title is-2">Todos</h2>
            <ul class="is-size-4">
                <li><label class="checkbox">
                        <input type="checkbox">
                        Remember me
                    </label><a class="button is-light">Edit</a> <a class="button is-dark">Delete</a></li>
                <li><label class="checkbox">
                        <input type="checkbox">
                        Remember me
                    </label></li>
                <li><label class="checkbox">
                        <input type="checkbox">
                        Remember me
                    </label></li>
            </ul>
        </div>
    </div>
</div>
@endsection
