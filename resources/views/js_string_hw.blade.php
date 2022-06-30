<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text">
    <button onclick="capitalizeFirstLetter()">click</button>
     <p id="demo"></p>
    <script>
        
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice();
        }
        document.getElementById("string").innerHTML ="hai"
    </script>


   
    
    
</body>
</html>