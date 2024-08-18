<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-red-400 w-full mb-5">
    <a href="/" class="p-4 bg-slate-400">Home</a>
    </div>
    <div class="w-6/12 m-auto flex flex-col">
        <div class="flex justify-center text-center relative">
            <h1 class="text-center text-3xl">{{$movie['name']}}</h1>
            <p class="relative bottom-0 mt-3">{{$movie['genre']}}</p>
        </div>
        <p class="mt-12 bg-slate-200 p-5 rounded">Description : <br>{{$movie['desc']}}</p>
        <div class="flex">

        </div>
        <div class="flex justify-between">
            
            <form action="/m/{{$movie['id']}}" method="post">
                @csrf
                @method('PATCH')
                <button class="bg-blue-700 p-2 rounded">Edit</button>
            </form>
            <form action="/m/{{$movie['id']}}" method="post">
                @csrf
                @method('DELETE')
                <button class="bg-red-700 p-2 rounded">Delete</button>
            </form>
        </div>
        </div>
</body>
</html>