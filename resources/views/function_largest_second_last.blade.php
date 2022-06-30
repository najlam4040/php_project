<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hai

    <script>
        //         //    ...FUNCTION....      
        function addition(num1,num2){
            var sum =num1+num2
            console.log("sum is       : "+sum)
            return sum
        }
        addition(10,20)
        addition(6,87)
                //    ------------

                // ...TOP SCORE.....
        var mark =[23,34,96,43,90,78]
        var top_score=0
        var length=mark.length
        for( let i=0;i<length;i++){
            if(mark[i]>top_score){
                top_score=mark[i]
            }
        }
        console.log('top_score    : '+top_score)
                //  ------------

             
                // ...SECOND LAST....


        var marks =[23,55,67,99,100]
        var top_score=0
        var second_last=0
        var length=marks.length
        for(let i=0;i<length;i++){
            if(marks[i]>top_score){
                top_score=marks[i]
            }
        }
            for(let i=0;i<length;i++){
                if(marks[i] != top_score){
                    if(marks[i] > second_last){
                        second_last = marks[i];
                    }
                }
            }
        console.log( 'second_last  : '+second_last)
                //    ..........


        var mark = [3 , 6, 2, 56, 32, 5, 89, 32];
        var top_score= 0;

        for (i=0; i<=top_score;i++){
            if (mark[i]>top_score) {
                var top_score=mark[i];
            }
        }
        console.log('top_score    : '+top_score);
        
        //     //   .................


        var array =[2,3,1,9,8];
        var minvalue = array[0]; 
        for (var i = 0; i < array.length; i++) {
            if(array[i]<minvalue){
                minvalue = array[i];
            }
        }
        console.log('minvalue   :');
               //..............

               //largest......
        var a=10,b=35,c=a+b
        console.log(c)
        var mark = [23,45,67,87,86,32];
        largest = 0;
        for(i=0; i<mark.length; i++){
            if(mark[i] > length){
                length = mark[i];
            }
        }
        console.log('largest:'+largest);

        var num   = [12, 5, 63, 8, 7, 4, 26, 21, 23];
        largest   = num[0];
        smallest  = num[0];
        for(i=0; i<num.length; i++){
            if(num[i] > largest){
                largest = num[i];
            }
        }    
        for(i = 0; i < num.length; i++){
            if(num[i]<smallest){
                smallest = num[i];
            }
        }
        console.log("largest:"+largest)
        console.log("smallest:"+smallest)
        var marks = [23,32,43,56,67,23];
        largest  = 0;
        smallest = 0;
       
        var marks = [23,32,43,56,67,23];
        largest  = marks[0];
        smallest = marks[0];
        for( i = 0; i < marks.length; i++){
            if(marks[i]>largest){
            largest = marks[i];
            }
            if(marks[i] < smallest){
            smallest = marks[i];
        }
          
        }
        console.log('largest:' +  largest)
        console.log('smallest:'+ smallest)
   
        

    </script>
    

  
    
</body>
</html>