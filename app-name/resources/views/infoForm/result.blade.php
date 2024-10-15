<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{ session('name', 'Anonymous') }} {{ session('lastname', 'User') }}</h1>
    <p>Your age is: {{ session('age', 0) }}</p>

    <a href="{{ route('form') }}">Back</a>
</body>
</html>