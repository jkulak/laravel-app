@extends('layout')

@section('content')
<h1>All cards</h1>
<div class="section">
    <ul>
        @foreach ($cards as $card)
        <li><a href="{{ $card->path() }}">{{ $card->title }}</a></li>
        @endforeach
    </ul>

</div>
@stop
