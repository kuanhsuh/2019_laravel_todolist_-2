<li>
    <label class="checkbox">
        <input type="checkbox">
        {{$todo->description}}
    </label>
    <a href="{{ route('todo.edit', $todo->id) }}" class="button is-light">Edit</a>
    <a href="/todos/{{$todo->id}}/testing-123" class="button is-light">Show</a>
    <a data-item="{{$todo->id}}" class="button is-dark todoDelete">Delete</a>
</li>
