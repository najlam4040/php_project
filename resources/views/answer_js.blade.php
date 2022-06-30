<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <p class="students">dfs</p>
    <p class="students">fdsfa</p>
    <h1 class="students">fdg</h1>
    <h1 class="students">yfyg</h1> -->
    <label for="">enter first No:</label>
    <input type="text" name="" id="first">
    <label for="">enter second no</label>
    <input type="text" name="" id="second">
    <button type="submit"onclick="add()">add</button>
    <p id="result">THE result is</p>
    

    <script>
        // var students = document.getElementsByClassName("students")
        // console.log(students[2])
        function add(){
            var first= document.getElementById("first").value;
            var second= document.getElementById("second").value;
            var sum =parseInt(first)+parseInt(second)
            document.getElementById("result").innerHTML += sum;
            console.log(sum);
        }
    </script>
</body>
</html>