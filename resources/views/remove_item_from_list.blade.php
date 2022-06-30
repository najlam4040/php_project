<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 >fruits checkig</h1>
    
<div style="margin: 30px;">
        <label for="">Enter Fruits </label>
        <input type="text" name="" id="user_input">
        <button onclick="check_fruits()">Check</button>
    </div>
        <ul id="items">
            <li>apple</li>
            <li>mango</li>
            <li>orange</li>
            <li>banana</li>
            <li>papaya</li> 
        </ul>
        <div id="status"></div>
     <script>
    
        function check_fruits(){
            const user_input = document.getElementById('user_input').value;
            const items_ul = document.getElementById('items');
            const listItems = items_ul.getElementsByTagName('li');
            var search_status = false;
                
            // Loop through the NodeList object.
            for (let i = 0; i <= listItems.length - 1; i++) {
                if(listItems[i].textContent === user_input){
                    items_ul.removeChild(listItems[i]);
                    search_status = true;
                }
            } 

            if(search_status == true){
                document.getElementById('status').innerText = 'Item Removed!'
            }else{
                document.getElementById('status').innerText = 'Item Not Found!'
            }
        }
     </script>
 
</body>
</html>