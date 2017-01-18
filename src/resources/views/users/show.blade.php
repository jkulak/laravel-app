@extends('layout')

@section('content')
    <ul>
        <li>Username: {{ $user->username }}</li>
        <li>E-mail: {{ $user->email }}</li>
        <li>Account created: {{ $user->created_at }}</li>
    </ul>
@stop
