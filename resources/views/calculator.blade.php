<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button{
        border-style:none;
        text-align: center;
        width:100%;
        }
        table{
            border-style:none ;

        }
        input{
            border-style:none ;
            text-align: right;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td colspan="4"><input id="display" type="text" readonly></td>
        </tr>
        <tr>
            <td><button onclick="opertFunction('+')">+</button></td>
            <td><button onclick="opertFunction('-')">-</button></td>
            <td><button onclick="opertFunction('*')">x</button></td>
            <td><button onclick="opertFunction('/')">/</button></td>
        </tr>
        <tr>
            <td><button onclick="setNumbers('7')">7</button></td>
            <td><button onclick="setNumbers('8')">8</button></td>
            <td><button onclick="setNumbers('9')">9</button></td>
            <td rowspan="4"><button onclick="calculation()">=</button></td>
        </tr>
        <tr>
            <td><button onclick="setNumbers('4')">4</button></td>
            <td><button onclick="setNumbers('5')">5</button></td>
            <td><button onclick="setNumbers('6')">6</button></td>
        </tr>
        <tr>
            <td><button onclick="setNumbers('1')">1</button></td>
            <td><button onclick="setNumbers('2')">2</button></td>
            <td><button onclick="setNumbers('3')">3</button></td>
        </tr> 
        <tr>
            <td><button onclick="setNumbers('0')">0</button></td>
            <td><button id="but" onclick="setNumbers1('.')">.</button></td>
            <td><button onclick="clearFunction()">c</button></td>
        </tr>   
            


    </table>
    <script>
        count=0
        
        function setNumbers1(num1){
            
            document.getElementById("display").value
            count+=1
            if(count>1){
                document.getElementById("but").disabled=true
            }else{
                document.getElementById("display").value+=num1
            }
            // val=document.getElementById("display").value
            // val_len=val.length
            // if(val[val_len-1]!='.')   {
            //     document.getElementById("display").value+=num1
            // }
        }
        function setNumbers(num){
            document.getElementById("display").value+=num
               
        }
        
        function clearFunction(){
            document.getElementById("display").value=""
               
        }
        function opertFunction(op){
            count=0
            document.getElementById("but").disabled=false
            curop=op;
            temp_val=Number(document.getElementById("display").value)
            console.log(curop)
            document.getElementById('display').value=""
        }
        function calculation(){
            
            cur_val =Number(document.getElementById("display").value)
            if(curop=='+'){
                result=temp_val+cur_val;
            }else if(curop=='-'){
                result=temp_val-cur_val
            }else if(curop=='*'){
                result=temp_val*cur_val
            }else if(curop=='/'){
                result=temp_val/cur_val 
            }      
            document.getElementById("display").value=result;
        }
    </script>
</body>
</html>