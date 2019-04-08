@if($flash = session('success'))
<div class="notification is-primary">
    <button class="delete"></button>
    {{ $flash }}
</div>
@endif
@if($flash = session('error'))
<div class="notification is-danger">
    <button class="delete"></button>
    {{ $flash }}
</div>
@endif
