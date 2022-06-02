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
            /* grid-template-columns:auto auto auto;   */
            grid-template-columns:   50px  100px  150px ;
            /* grid-template-rows:400px 100px ;  */
            /* column-gap:5px ; */
            /* gap: 50px 100px;                  */
            /* justify-content: center; */
            /* justify-content: end;
            justify-content: start; */
            /* justify-content:space-around; */
            /*justify-content: space-evenly; */
            /* justify-content:space-between;   */
            /* align-content: start; */
            /* align-content:end ;  */
            /* align-content: center; */
            /*align-content: space-around; */
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
            /* grid-area:  2 / 1 / span 2 / span 3; */
         } ; 
        
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
    <style>
    .parent{
        border: solid  black;
        background-color: rgb(247, 213, 202);
        display: grid;
        grid-template-columns:auto auto auto auto;
        height: 300px;
    }
    div{
        border: solid 1px black;
    }
    .c1{
        grid-row:1/3;
    }
    .c2{
        grid-column: 2/4;
    }
    .c3{
        grid-column:4/5;
    }
    .c4{grid-column:2/3;
    }
    .c5{
       grid-column: 3/5;
       grid-row: 2/5;    
    }
    
    .c6{
        grid-column: 1/3;
    }
    .c7{
        grid-column: 1/2;
    }
    .c8{
        grid-row: 4/6;
    }
    .c9{
        grid-row: 5/7;
    }
    .c10{
        grid-column: 3/5;
    }
    
     
    /* .c8{
        grid-row: 4/6;
    } */
   /* .c9{
        
    }
    .c10{
        grid-column: 3/5;
    }*/
    .c11{
        grid-column: 2/5;
    } 
</style>
<body>
    <div class=" parent">
        <div class="c1">box5</div>
        <div class="c2">box 2</div>
        <div class="c3">box 10</div>
        <div class="c4">box3</div>
        <div class="c5">box 6</div>
        <div class="c6">box 8</div>
        <div class="c7">box 4</div>
        <div class="c8">box 1</div>
        <div class="c9">box 11</div>
        <div class="c10">box 9</div> 
        <div class="c11">box12</div>
        <!-- <div class="c12">box 7</div> -->

     
</body>
</html>