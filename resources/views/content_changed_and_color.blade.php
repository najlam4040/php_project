<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p id=p1>hai</p>
    <input type="text" name="" id="content_fech">
     
    <button type="text"onclick="content_change()">submit</button>
    <button type="text"ondblclick="alert('dfgdhsfhs')" >double click</button>
    <script>
        console.log(document)
        var p_tag = document.getElementById("p1").innerHTML;
        console.log(p_tag)

        function content_change(){
            document.getElementById("p1").innerHTML="content changed"
            var input_content = document.getElementById("content_fech").value;
            // text color will change onclick
            document.getElementById("p1").style.color ="red"
            console.log(input_content)
        }
    </script>
</body>
</html>