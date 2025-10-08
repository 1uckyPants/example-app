<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume</title>
</head>
<body>
@php /** @var \App\DataObjects\Resume $resume */ @endphp
Hello {{ $resume->basics->name }} ({{ $resume->basics->label }})
</body>
</html>
