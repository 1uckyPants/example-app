<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-gray-800 bg-gray-50">
<main class="mx-auto px-4 py-10 max-w-4xl">
    <header class="mb-12">
        {{ $header }}
    </header>

    {{ $slot }}

    <div class="flex items-center justify-between w-full" >
        <footer class="mt-8 flex justify-center items-center py-6 w-full">
            <h1 class="text-1xl text-gray-900">
                Last updated: {{ \Carbon\Carbon::now()->format('F Y') }}
            </h1>
        </footer>
    </div>

</main>
</body>
</html>
