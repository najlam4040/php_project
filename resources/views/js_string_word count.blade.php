<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <label for="">Enter sentence</label>
    <input type="text" id="input">
    <br><br>
    <button onclick="count()">get count</button>
    <p id="demo"></p>
    <p id="show">word count</p>

    <script>
        function count(){
        var text = document.getElementById("input").value;
        var num=0;
        for (var i = 0; i < text.length; i++) {
                var currentCharacter = text[i];
                if (currentCharacter == " ") {
                    num += 1;
                }
            }
        num += 1;
        document.getElementById("show").innerHTML = num;
        console.log (num)
        }
    </script> -->


    <label for="">Enter sentence</label>
    <input type="text" id="input">
    <br><br>
    <button onclick="count()">get count</button>
    <p id="demo"></p>
    <p id="show">word count</p>

    <script>
        function count(){
           
         var text = document.getElementById("input").value;
        var num=0;
        var text_arr=['@','#','$',',%']
        for (var i = 0; i < text_arr.length; i++) { 
                var currentCharacter = text_arr[i];
                if (currentCharacter == " ") {
                    num += 1;
                }
            }
        num += 1;
        document.getElementById("show").innerHTML = num;
        console.log (num)
        }  


        // function count(){
        //     var text = document.getElementById("input").value;
        //     var arr ="!@#$%^&*()_+\-=\[\]{};':\\|,.<>\/?"
        //     var num=0;
        //     for (let i = 0; i < arr.length; i++) {
        //         text += arr[i];
        //         if (arr == "") {
        //         num +=1;
        //         }
        //     }
        //     document.getElementById("show").innerHTML = num;
        //     console.log (num)
        // }
     </script>   

    
</body>
</html>