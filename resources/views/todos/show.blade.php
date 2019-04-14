@extends('layouts/master')

@section('content')

<h1>{{ $todo->description}} </h1>

<a href="/" class="button is-light">Back</a>
@endsection
