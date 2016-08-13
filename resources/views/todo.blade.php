<!DOCTYPE html>
<html>
    <head>
        <title>Head</title>
    </head>
    <body>
    <ul>
        @foreach($todos as $todo)
        <li>{{ $todo->title }} &raquo; {{ $todo->description }}</li>
        @endforeach
    </ul>
    </body>
</html>
