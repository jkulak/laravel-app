This is about blade php file

@if (empty($people))
    There are no people
@else
    You can see the list of the poeople below

    <ul>
    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach
    </ul>

@endif

@unless (empty($person))
    <p>There are some people</p>
@endunless
