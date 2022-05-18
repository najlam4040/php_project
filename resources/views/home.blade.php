<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hiii</h1>
    <h2></h2>
    <a href="{{ route ('welcome') }}">home pege</a>
    <br>
    <a href="{{ route('home')}}">welcom page</a>
    <br>
    <a href="{{ route ('fast')}}">fast page</a>
    <!-- <img src="images/1.jpg"> -->
    
    @yield('content')
    <img src="../images/1.jpg" alt="pic" style=width:500px>
    
    <img src="../images/1-250x250.jpg" alt="pic" style=widtth:500px>

</body>
</html>