<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>cliccando il link hai aperto una nuova pagina congratulazioni</h3>
        <a href="{{ route('home') }}">clicca qui per tornare alla homepage</a>
        <h2>ecco i programmi di {{$name}} {{$lastname}}</h2>
        <div>
            <ul>
                @forelse($programmi as $programs)
                        <li>{{ $programs }}</li>
        
                    
        
                    @empty
                        <p>Non ci programmi</p>
                    @endforelse
            </ul>
        </div>
    </div>
</body>
</html>
