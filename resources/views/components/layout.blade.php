<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falanee Laravel Site</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite("resources/css/app.css")
</head>

<body>

    <header class="mb-4">
        <nav class="flex items-center gap-5 bg-gray-500/20 py-2 px-4">
            <a href="/">Home</a>
            <a href="/ninjas">Ninja</a>
            <a href="/ninjas/create">Create Ninja</a>
        </nav>
    </header>

    <main class="px-4">{{ $slot }}</main>

</body>

</html>
