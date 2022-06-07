<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:imag(1.jpg) ;
            background-size: cover;
            background-attachment: fixed; 
        }
        .content{
            background-color: white;
            background-image: url("{{ asset('images/background.jpg') }}");
            width: 50%;
            padding: 40px;
            margin: 100px auto;
            font-family: calibri;
        }
        p{
            font-size: 25px;
            color: black;

        }
    </style> 
</head>
<body 
>
    <div class="content">
       <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aliquam enim autem praesentium, atque similique quidem deleniti, recusandae magni eaque consectetur perspiciatis odio sapiente et voluptatum sit aut vero repellendus.
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ad ipsam error quaerat excepturi cupiditate fuga ipsa iste rem officiis, eos praesentium ab nemo cumque. Quia eaque quos tenetur distinctio?
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis, laudantium ab praesentium possimus doloremque placeat ex sint totam molestias sapiente odit nulla! In debitis labore, ullam fugit iste exercitationem.</p>
    </div>
</body>
</html>