<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello</p>
    <script>
    // var i=0
    
    // do{
    //    console.log(i)
    //    i++
    // }
    // while(i<0)

    // for(i=0;i<5;i++){
    //     for(var j=0;j<10;j++){
    //         console.log(i,j)
    //     }
    // } 
    // var i=1000
    // for(let i=10;i<10;i++){
    //     console.log(i)
    // } 
    // console.log(i)  
    
    // var marks=[20,30,40,50,60,70,68,46]
    // var top_score=0
    // var length=marks.length
    // for(let i=0;i<length;i++){
    //     if(marks[i]>top_score){
    //         top_score=marks[i]
    //     }
    // }   
    // console.log("top_score is=",top_score)
    var mark=[66,65,90,43]
    var top_score=0
    var second_last=0
    var length=mark.length
    for(let i=0;i<length;i++){
        if(mark[i]>top_score){
            top_score=mark[i]
        }
    }
    
        for(let i=0;i<length;i++){
            if(mark[i] != top_score ){
                if(mark[i] >second_last){
                    second_last = mark[i];
                }
                
            }
        }
        console.log(second_last)
        document.write(top_score)  
    console.log("top_score is=",top_score)
    console.log("second_last is=",second_last)              
    


    var array2=[34,44,55,66,77,88,44,23]
    var input_no=parseInt(prompt("enter a number"))
    var length=array2.length
    var flag=0 
    for(let i=0;i<length;i++){
        if(input_no==array2[i]){
            flog=1
             break
        }
    }
    if(flag=1){
        console.log("input_no found")
    }else{ 
    console.log("input_no is not found")
    }
     
            //continue....
    // for(let i=0;i<5;i++){
    //     if(i==4){
    //         break
    //     }
    //     console.log(i)
    // }
    //         continue...
    // for(let i=0;i<9;i++){  
    //     if(i==5){
    //         continue
    //     }
    //     console.log(i)
    // }
    // function addition(num1,num2){
            
    //         var sum =num1+num2
    //         console.log("sum is "+sum)
    //     }
    //     addition(45,78)
    //     addition(45,87)
    //     addition(56,90)



    // function addition(num1,num2){
    //     var sum =num1+num2
    //         console.log("sum is "+sum)
    //     return sum
    //   console.log('hello')
    //     }
    //     addition(10,20)
    //  var res=   addition(6,87)
    
     </script>
</body>
</html> 