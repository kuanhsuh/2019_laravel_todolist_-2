@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="notification is-danger">
    <button class="delete"></button>
    {{$error}}
</div>
@endforeach
@endif
