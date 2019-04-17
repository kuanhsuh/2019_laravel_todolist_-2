@extends('layouts/master')

@section('content')

<h1>{{ $todo->description}} </h1>
@foreach ($todo->tags as $tag)
<span class="tag is-info">{{$tag->tag}}</span>
@endforeach
<br><br>
<a href="/" class="button is-light">Back</a>
@endsection
