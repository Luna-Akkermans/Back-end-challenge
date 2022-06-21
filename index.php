<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="list-wrap">
        <h1 class="header">To do!</h1>

        <ul>
            <li><span class="task">Get happy</span></li>
            <li><span class="task status">Sleep</span></li>
        </ul>

        <form class="task-adder" method="post" action="addTask.php">
                <input autocomplete="off" required type="text" name="task-item" placeholder="New task" class="input">
                <input type="submit" value="Add" class="submit-button">
            </form>
        
    </div>
</body>
</html>