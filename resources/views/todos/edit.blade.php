@extends('layouts/master')

@section('content')
<div class="container">
    <div class="columns is-mobile">
        <div class="column is-10 is-offset-1">
            <h1 class="title">
                Edit Todo
            </h1>
            @include('layouts.flash-msg')
            @include('layouts.error')
            <form method="POST" action="{{ route('todo.update', $todo->id)}}">
                <div class="field is-grouped">
                    @csrf
                    {{method_field('PUT')}}
                    <p class="control is-expanded">
                        <input class="input {{ $errors->has('description') ? 'is-danger' :'' }}" name="description"
                            type="text" value="{{ $todo->description }}">
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-info">
                            Edit Todo
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
        </div>
    </div>
</div>
@endsection
