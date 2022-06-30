<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"  name="form1" onsubmit="return valideteform()"> 
    <label id="namelabel"></label>
    <input type="text" name="fname" placeholder="enter name">
    <br><br>
    <label id="placelabel"></label>
    <input type="text" name="place" placeholder="enter place">
    <br><br>
    <label id="emaillabel"></label>
    <input type="text" name="mail" placeholder="enter email">
    <br><br>
    <button onclick="valideteform()">submit</button>
    </form>

    <script>
        function valideteform(){
            // document.getElementById('name1').value;
        name=document.forms["form1"]["fname"].value; 
        place=document.forms["form1"]["place"].value; 
        email=document.forms["form1"]["mail"].value ;  
        returnval=true
            if(name==""){
                document.getElementById('namelabel').innerHTML="enter name"
                document.forms["form1"]["fname"].focus()
                returnval=false;
            }
            if(place==""){
                document.getElementById('placelabel').innerHTML="enter place"
                document.forms["form1"]["place"].focus()
                returnval=false;
            }
            if(email==""){
                document.getElementById('emaillabel').innerHTML="enter email"
                document.forms["form1"]["mail"].focus()
                returnval=false;
                // console.log('emaillabel')
            }
            return returnval;

        }
    </script>
</body>
</html>