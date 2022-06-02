<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        border:solid black;
        text-align: center; 
    }
    .parent{
        border:solid black;
        background-color: aquamarine;
        display: grid;
        grid-template-columns:auto auto auto;
        height: 400px; 
        
    }
    .c1{
        padding: 30px;
       grid-column:1/4 ; 
    }
    .c2{
        padding: 30px;
        grid-row: 2/4;
    }
    .c3{
        padding: 30px;
        grid-column: 2/3;
    }
    .c4{
        padding: 30px;
        grid-column: 3/4;
    }
    .c5{
        padding: 30px;
        grid-column: 2/4;
    }
    

</style>
<body>
    <div class="parent">
        <div class="c1">header</div>
        <div class="c2">sidebar</div>
        <div class="c3">content1</div>
        <div class="c4">content2</div>
        <div class="c5">footer</div>
        
         
    </div> 
    <div>
        <img src="{{ asset ('images/1.jpg') }}">
    </div>
</body>
</html>