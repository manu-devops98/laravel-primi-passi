<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao {{ $name }} {{ $lastname }}</h1>
    @if ($skills)
    <h3>Skills:</h3>
    <ul>
        @foreach ($skills as $skill)
        <li>{{ $skill }}</li>
        @endforeach    
    </ul>
    @endif
</body>
</html>