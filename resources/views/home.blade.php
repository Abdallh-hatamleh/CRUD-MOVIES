<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <a href="/add" class="m-4 block bg-blue-500 w-fit p-3 rounded">Add a movie</a>
    <div class="flex justify-center flex-col w-fit p-10 m-auto">
        <h2>Movie List: </h2>
        @foreach ($movies as $movie)
        <a href="m/{{$movie['id']}}" class="bg-red-400 p-4 w-full block m-2 text-center">
            <div>
                <h2>{{$movie['name']}}</h2>
                <p>{{$movie['genre']}}</p>
                <!-- <p>{{$movie['desc']}}</p> -->
            </div>
        </a>
        @endforeach
    </div>
</body>
</html>