<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage Laravel Movies</title>
</head>
<body>
    @dump($movies)
    <div class="h-screen bg-green-300">
        <div class=" w-[1280px] m-auto grid grid-cols-5 pt-32 gap-8"> 
            @foreach($movies as $movie)
            <div>
                <img src="{{$movie->image}}" alt="">
                <div class="text-center">
                    {{$movie->title}}
                </div>
                <div>
                    <span>
                        Date: {{$movie->date}}
                    </span>
                    <span class="text-center">
                        Ratings: {{$movie->vote}}
                    </span>
                </div>
            </div>
            @endforeach
            </ul>
        </div>
    </div>
</body>
</html>