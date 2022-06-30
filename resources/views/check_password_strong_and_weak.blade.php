<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style=" margin: 30px;">
        <label for=""id=>Enter password</label>
        <input type="text" name="" id="password">
        <button onclick="check_password()">Check</button>
     </div>
     <ul>
        <li id="password_status"></li>
     </ul>

     <script>
        var arr=['@','#','!','$','/']
        function check_password(){
            var user_password= document.getElementById("password").value;
            var result = 0;

            
        for(let i=0;i<arr.length; i++){
                if(user_password.includes(arr[i]))
                result++;
            }   if(result > 0){
            document.getElementById("password_status").innerText="strong";
           }else{ 
            document.getElementById("password_status").innerText="weak"
           }
        }
     </script> 
</body>
</html>