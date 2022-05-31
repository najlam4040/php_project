<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border: solid blue;
        }
        .name{
            height: 500px;
            background-color: aqua;
            border: solid 2px black;
            display: grid;
            grid-template-columns:auto auto auto;  
            /* grid-template-columns:   50px  100px  150px ;
            grid-template-rows:auto; */
            /* column-gap:5px ; */
            /* gap: 50px 100px; */
            /* justify-content: center;
            justify-content: end;
            justify-content: start; */
             /* justify-content: space-evenly;
            justify-content:space-between;  */
            /* align-content: start; */
            /* align-content:end ;  */
            /* align-content: center; */
            /* align-content: space-around; */
            /* align-content: space-between; */
            /* align-content: space-evanly; */
            



        }
        /* .child{
            border: solid 3px rgb(204, 26, 26);
            /* margin: 5px; */
       
        .child{
            /* grid-column-start:1;
            grid-column-end: 4; */
            /* grid-column:1/4 ; */
             grid-area:   ; 
        }
        .child4{
            /* grid-row-start:4;
            grid-row-end:5; */
            /* grid-column: 1/4; */
            /* grid-column: 2/span 3 ;
            grid-row: 2/span 3; */
            /* grid-area: 2/2/4/4; */
        }
    </style>
</head>
<body>
    <div class="name" >
        <div class="child">1</div>
        <div class="child1">2</div>
        <div class="child2">3</div>
        <div class="child3">4</div>
        <div class="child4">5</div>
        <div class="child5">6</div>
    </div>
    <div>
        <img src="{{ asset ('images/1.jpg') }}">
    </div>
</body>
</html>