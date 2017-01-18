@extends('layout')

@section('content')
    <h1>Edit a note</h1>

    <form class="post" action="{{ route('notes_update', ['note' => $note->id]) }}" method="post">
        {{ method_field('patch') }}
        {{ csrf_field() }}
        <div class="form-group">
            <textarea name="body" class="form-control">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
    </form>
@stop
