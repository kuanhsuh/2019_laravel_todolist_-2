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
                    <div class="select is-multiple">
                        <select multiple size="{{$tags->count()}}" name="tags[]">
                            @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->tag}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="control">
                        <button type="submit" class="button is-info">
                            Edit Todo
                        </button>
                    </p>
                </div>
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection
