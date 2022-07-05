<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>word count</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <!-- <div style="padding: 10px; max-width:600px;margin:auto;">
        <div>
            <label for="">Enter sentence</label><br>
            <textarea type="text" id="input" class="form-control" placeholder="Enter sentence"></textarea>
        </div>
        <br>
        <div>
            <button class="btn btn-primary" onclick="count()">get count</button>
        </div>
        <br>
        <b>word count: <span id="show">0</span> </b>
    </div>
    
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

<div style="padding: 10px; max-width:600px;margin:auto;">
    <div>
        <label for="">Enter sentence</label><br>
        <textarea type="text" id="input" class="form-control" placeholder="Enter sentence"></textarea>
    </div>
    <br>
    <div>
        <button class="btn btn-primary" onclick="count()">get count</button>
    </div>
    <br>
    <b>word count: <span id="show">0</span> </b>
</div>
     <script>
        function count(){
            var text = document.getElementById("input").value;
            var num=0;
            var text_arr=['@','#','%','!','?','>','"','&','*','/','.','<']
            for (var i = 0; i < text_arr.length; i++) {
                if(text.includes(text_arr[i])){
                    num += 1;
                }
            }
            document.getElementById("show").innerHTML = num;
            console.log (num)
        }  
     </script>    

    
</body>
</html>