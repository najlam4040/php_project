<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td><label for="">Enter No</label></td>
            <td><input type="text" name="" id="p1"></td>
        </tr>
        <tr>
            <td><label for="">Select Operation</label></td>
            <td>
                 
                <select id="operetion">  
                    <option value="">select</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for=""> Entry Select No </label></td>
            <td><input type="text" name="" id="p2"></td>
        </tr>
        <tr>
            <td><button onclick="submit()">submit</button></td>
        </tr>
       
    </table>
    <p id="result">The result is</p>
  
    <script>
        function submit(){
            var frist=document.getElementById("p1").value 
            var secound=document.getElementById("p2").value 
            var select_option=document.getElementById("operetion").value
            var result ;
            
            
            switch(select_option)
            {
                case "+":result= parseInt(frist)+parseInt(secound);
                break;
                case "-":result=parseInt(frist)-parseInt(secound);
                break;
                case "*":result=parseInt(frist)+parseInt(secound);
                break;
                case "/":result=parseInt(frist)+parseInt(secound);
                break;
            }
            if(result>30){
              
                document.getElementById("result").style.color ="blue";
            }
            if(result<0){
                document.getElementById("result").style.color ="red";
            }
                        
            console.log(result)

            document.getElementById("result").innerHTML += result;
            
        }
       
         

         
    </script>
    
    
    
</body>
</html>