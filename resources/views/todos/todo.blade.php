<li>
    <label class="checkbox">
        <input type="checkbox">
        {{$todo->description}}
    </label>
    <a class="button is-light">Edit</a>
    <a data-item="{{$todo->id}}" class="button is-dark todoDelete">Delete</a>
</li>
