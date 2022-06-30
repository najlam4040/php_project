<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script> 
                //  ....for in loop.....
            for(a=1; a < 15; a++ ){
                console.log(a)
            } 
            
            
        var person={
            name:"najla",
            age:20
        }
        for(var key in person)
        {
            console.log(person[key])
        }

            //   ....while loop...
            i=0
        while (i < 10){
            console.log(i)
            i++
        }


        var i=0;
        while(i<10)
        {
            console.log(i)
            i++;
        }   
        var arr=[1,2,3,4,]
        for (var i of arr)
        {
            console.log(i)
        }
        //  ......do while.....
          i=0
        do{
            console.log (i)
             i++
        }while(i<10)
        // a=1

    </script>
</body>
</html>