<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <x-index>
        <x-slot name="title">
            My Titles
        </x-slot>

        <x-slot name="users">
            {{ $users }}
        </x-slot>
    </x-index>
</body>
</html>