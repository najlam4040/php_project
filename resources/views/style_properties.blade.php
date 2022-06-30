<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div1{
           float:left;
           width: 100%; 
           height: 200px;
           background-color: antiquewhite;
           overflow:scroll;
           margin-bottom: 100px; 
           
            
        }
        img{
            opacity: 0.5;
        }
        img:hover{
            opacity: 1;
        }
        table,td{
            border-bottom: 2px solid black;
            width: 100%;
            height: 50px;
            border-collapse: collapse;
            /* background-color: rgb(127, 131, 131);   */
            margin-left: 200px; 
            text-align: center;
            padding: 10px;

        }
        tr:hover{
            background-color: blue;
        }
        .position{
            width: 1000px;
            /* position: relative; */
            /* right:0 ;  */
            /* top: 0px; */
            /* position: fixed; */
            border: 2px solid black;
            background-color: aquamarine;
            
        }
        .div3{
            margin-top:20px;
            border: 5px;
            /* background-color: aliceblue; */
            width: 500px;
            /* position: absolute; */
            /* position: relative; */
            /* background-image: linear-gradient(to right, red , yellow);  */
             background-image: linear-gradient(to right, blue ,green); 
        }    
        h4{
            position: sticky;
            top: 0;
             
        }
        h2{
            text-shadow: 2px 2px 5px red;
        }
        marquee{
            color: brown;
            background-color: rgb(247, 227, 200);

        }
         

    </style>
    
</head>
<body>
    <h2>hai</h2>
    <marquee width="100%" height="100px" behavior="right" direction="up">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit consequatur perspiciatis consequuntur repudiandae ut, in quibusdam, inventore vero fugit ipsa dicta accusantium maxime nulla iusto aliquam placeat illo possimus obcaecati!</marquee>
    <marquee width="100%"height=100px  behavior=" alternate" direction="right" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, soluta. Magnam suscipit, reprehenderit consectetur nostrum dolorem voluptatibus itaque hic eveniet labore quos eligendi ut deleniti blanditiis expedita doloribus illo! Soluta!</marquee>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit distinctio nam perspiciatis id atque veniam quisquam voluptatum, impedit hic nostrum eligendi alias deserunt dicta optio, excepturi perferendis eaque temporibus reprehenderit commodi sed animi molestias nulla earum officia! Maiores, tempore, similique deleniti molestiae porro debitis quos officia rerum, deserunt atque asperiores.
    <h4>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, optio. Atque esse quo at eligendi architecto consequatur incidunt recusandae nisi similique, sequi praesentium, illum consequuntur reiciendis voluptates. Accusantium, repellendus sequi.
    </h4>
    <div id="div1">
        <h1>content</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste adipisci, suscipit sint veniam 
            deleniti voluptates. Blanditiis, minus delectus. Animi, voluptates.
             Dolorum dicta maiores autem vitae delectus aliquid nulla quibusdam cum?</p>
        <img src="images/1-250x250.jpg" alt="">     
    </div>
    
    <table> 
        <tr>
            <td>content 1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>content2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>content3</td>
            <td>3</td>
        </tr>
        
    </table>
    <div class="position">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque dolores non nulla minus aut mollitia iure quos, odit facilis perspiciatis, natus nam, ipsam libero modi minima ab nemo ex nisi.
        </p>
        <div class="div3" >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam illum repellendus error nihil! Facere earum officiis ipsa voluptate et quos iusto tempora quas. 
            Architecto vero ducimus temporibus ad voluptas. Impedit.

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam vel quos, earum commodi officiis voluptatibus debitis omnis minus dolorem? Deleniti qui, ab, quod nihil eligendi, quidem aliquam officia pariatur cupiditate rerum iste ipsam amet nobis nisi soluta necessitatibus! Neque, est quod delectus odio aperiam rem excepturi fugit iste deleniti ad inventore tenetur beatae quaerat earum eligendi incidunt mollitia voluptate labore quia soluta libero? Perspiciatis non earum atque aliquid rem rerum sit omnis reiciendis alias ratione ullam aspernatur excepturi nobis dolores reprehenderit maiores ad praesentium vero et velit, commodi totam tempora amet. Velit autem optio et, maiores quas ducimus veniam officiis adipisci! Natus unde est nam saepe dolores beatae similique laudantium vel? Blanditiis minima quasi odit ducimus sapiente ratione accusamus ipsa quam distinctio, amet beatae, illum quae molestiae asperiores velit quo cupiditate magni laborum consectetur at qui. Libero aliquam odio necessitatibus voluptatem laborum delectus distinctio eaque illo nemo quo corporis quibusdam velit cumque, eligendi repudiandae quasi dignissimos maxime quam iusto sed enim atque harum veniam cum. Nihil enim labore reprehenderit magnam fugiat provident quas sapiente accusantium natus temporibus mollitia ducimus repellendus repellat consequuntur debitis cum error distinctio veniam numquam quaerat, sed quae. Quibusdam accusamus excepturi nam officia debitis, deleniti odit quae suscipit saepe esse vero rerum laborum? Minus corrupti vel voluptatem, quos voluptas ducimus qui delectus dolores nam enim eius officia! Vero est, consequatur similique, dolorem error fugiat ad facilis aperiam nostrum explicabo vel accusantium veniam debitis quaerat, sequi veritatis expedita cumque exercitationem unde voluptatem nam dicta nesciunt! Facilis non cum perferendis quod eveniet alias optio minima ab pariatur quibusdam ad numquam rem error laborum neque excepturi, adipisci beatae eaque aliquam nostrum. Distinctio quasi itaque nisi debitis quisquam placeat quis, unde eligendi adipisci assumenda maxime, voluptas fuga nam at mollitia minus ex dolor architecto beatae doloribus. Quis earum aliquam dolores incidunt.
        </div>
    </div>
</body>
</html>