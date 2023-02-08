<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola {{$name}}
    @if($tipo=="vip")
        <span>👑👑👑</span>
    @endif
    </h1>
    <h2>Tu email es {{$email}}</h2>
    <h2>Tus Hobbies</h2>
    <ul>
        @foreach ($hobbies as $h)
            <li>
                {{$h}}
            </li>
        @endforeach
    </ul>
</body>
</html>