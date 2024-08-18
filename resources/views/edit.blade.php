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
    <div class="flex justify-center mt-12">

        <form action="/m/{{$movie['id']}}" method="post" class="flex flex-col w-3/12 border-black border p-2">
            @csrf
            @method('put')
            <div class="mt-2 w-full self-center">
                <label for="">Title : </label><br>
                <input type="text" name="name" value="{{$movie['name']}}" class="bg-green-400 rounded w-full">
            </div>
            <div class="mt-2 w-full self-center">
                <label for="">Genre : </label><br>
                <input type="text" name="genre" value="{{$movie['genre']}}" class="bg-green-400 rounded w-full">
            </div>
            <label for="">Desc : </label><br>
            <textarea name="desc" id="" class="bg-green-400 rounded">{{$movie['desc']}}</textarea>
            <button class="bg-blue-400 w-fit self-center px-5 mt-4 rounded">save</button>
        </form>
    </div>
    </body>
</html>