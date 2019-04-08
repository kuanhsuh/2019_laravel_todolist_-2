@extends('layouts/master')

@section('content')
<div class="container">
    <div class="columns is-mobile">
        <div class="column is-10 is-offset-1">
            <h1 class="title">
                Laravel Todolist with Bulma
            </h1>
            @include('layouts.flash-msg')
            @include('layouts.error')
            <form method="POST" action="{{ route('todo.store')}}" >
            <div class="field is-grouped">
                    @csrf
                    <p class="control is-expanded">
                        <input class="input {{ $errors->has('description') ? 'is-danger' :'' }}" name="description" type="text" placeholder="Add Todo" value="{{ old('description') }}">
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-info">
                            Add New
                        </button>
                    </p>
                </div>
            </form>
            <br><br>
            <h2 class="title is-2">Tags</h2>
            <div>
                <span class="tag is-info">Info</span>
            </div>
            <br><br>
            <h2 class="title is-2">Todos</h2>
            <ul class="is-size-4">
                @foreach($todos as $todo)
                <li><label class="checkbox">
                        <input type="checkbox">
                        {{$todo->description}}
                    </label><a class="button is-light">Edit</a> <a class="button is-dark">Delete</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
