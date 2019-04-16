<li>
    <div>
        <label class="checkbox">
            <input type="checkbox">
            {{$todo->description}}
        </label>
        <a href="{{ route('todo.edit', $todo->id) }}" class="button is-light">Edit</a>
        <a href="/todos/{{$todo->id}}/{{ gen_url($todo->description) }}" class="button is-light">Show</a>
        <a data-item="{{$todo->id}}" class="button is-dark todoDelete">Delete</a>
    </div>
    <div>
        @foreach ($todo->tags as $tag)
            <span class="tag is-info">{{$tag->tag}}</span>
        @endforeach
    </div>
</li>
