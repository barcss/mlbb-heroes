<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero list</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class=" bg-gray-800 flex justify-center p-5">
        <div class="container flex justify-between items-center text-white">
            <h1>MLBB Heroes</h1>
        <nav class="">
            <a class="highlights-underline" href="/heroes">All heroes</a>
            <a class="highlights-underline" href="/heroes/add">Add new heroes</a>
        </nav>
        </div>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>