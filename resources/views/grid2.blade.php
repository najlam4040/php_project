<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    .parent{
        border: solid  black;
        background-color: rgb(247, 213, 202);
        display: grid;
        grid-template-columns:auto auto auto auto;
        height: 300px;
        text-align: center;
    }
    div{
        border: solid 1px black;
    }
    .c5{
        grid-row: 1/3;
        background-color: orangered;
    }
    .c2{
        grid-column: 2/4;
        background-color: blueviolet;
    }
    /* .c10{
        grid-column: 4/5;
    } */
    /* .c3{
        grid-column:2/3;
    } */
    .c6{
        grid-column: 3/5;
        grid-row:2/5 ;
        background-color: red;
    }
    .c7{
        grid-column: 1/3;
        background-color: blue;
    }
    /* .c8{
        grid-column: 1/2;
    } */
    .c4{
        grid-column: 2/3;
        grid-row: 4/6;
        background-color:  yellow;
    }
    /* .c1{
        grid-column: 3/4;
    }*/
    .c11{
        grid-row: 5/7;
        background-color: rgb(142, 77, 202);
    } 
    /* .c9{grid-row: 4/6;
    } */
    .c12{
        grid-column: 2/5;
        background-color: rgb(247, 138, 76);
    }
    .c8{
        background-color: turquoise;
    }
    .c3{
        background-color: aqua;
    }
    .c1{
        background-color: aqua;
    }
    .c10{
        background-color: turquoise;
    }
    .c9{background-color: yellow;}

    </style>
    <div class="parent">
        <div class="c5">5</div>
        <div class="c2">2</div>
        <div class="c10">10</div>
        <div class="c3">3</div>
        <div class="c6">6</div>
        <div class="c7">7</div>
        <div class="c8">8</div>
        <div class="c4">4</div>
        <div class="c1">1</div>
        <div class="c11">9</div>
        <div class="c9">11</div>
        <div class="c12">12</div>

    </div>
</body>
</html>