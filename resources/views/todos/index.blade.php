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
            <form method="POST" action="{{ route('todo.store')}}">
                <div class="field is-grouped">
                    @csrf
                    <p class="control is-expanded">
                        <input class="input {{ $errors->has('description') ? 'is-danger' :'' }}" name="description"
                            type="text" placeholder="Add Todo" value="{{ old('description') }}">
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
                            Add New
                        </button>
                    </p>
                </div>
            </form>
            <br><br>
            <h2 class="title is-2">Tags</h2>
            <form method="POST" action="{{ route('tag.store')}}">
                <div class="field is-grouped">
                    @csrf
                    <p class="control is-expanded">
                        <input class="input {{ $errors->has('tag') ? 'is-danger' :'' }}" name="tag" type="text"
                            placeholder="Add Tag" value="{{ old('tag') }}">
                    </p>
                    <p class="control">
                        <button type="submit" class="button is-info">
                            Add Tag
                        </button>
                    </p>
                </div>
            </form>
            <br>
            <div>
                @foreach ($tags as $tag)
                <span class="tag is-info">{{$tag->tag}}</span>
                @endforeach
            </div>
            <br><br>
            <h2 class="title is-2">Todos</h2>
            <ul class="is-size-4">
                @foreach($todos as $todo)
                @include('todos.todo')
                @endforeach
            </ul>
        </div>
    </div>
    {{ $todos->links() }}
</div>
<script>
    var token = '{{Session::token() }}'
    var urlDelete = '{{ route('todo.delete')}}'

</script>
@endsection
