@extends('layout')

@section('content')
<h1>Users</h1>
<ul id="users" class="list">
@foreach ($users as $user)
    <li><a href="{{ $user->path() }}">{{ $user->username }}</a></li>
@endforeach
</ul>
@stop
