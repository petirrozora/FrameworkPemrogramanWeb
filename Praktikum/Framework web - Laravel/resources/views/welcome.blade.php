<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Halaman Welcome</h1>
    <nav>
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('contact') }}">Contact</a> |
        <a href="{{ route('user.profile', 1) }}">User ID 1</a> |
        <a href="{{ route('greeting', 'Fathir') }}">Greeting Fathir</a> |
        <a href="{{ route('greeting') }}">Greeting Default</a> |
        <a href="{{ route('admin.edit') }}">Admin Edit</a>
    </nav>
</body>
</html>
