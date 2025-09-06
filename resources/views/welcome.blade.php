<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLBB Heroes</title>
    @vite('resources/css/app.css')
</head>
<body>
        <div class="h-screen w-screen flex flex-col justify-center items-center">
            <h2 class="text-3xl text-center"> Welcome to Mobile Legends: Bang Bang</h2>
            <p class="text-xs text-center">A Website walkthrough about the gane and list of heroes overview.</p>
            <a href="/heroes" class="button-yellow mt-10 shadow-md"> View heroes </a>
        </div>
 
    
</body>
</html>