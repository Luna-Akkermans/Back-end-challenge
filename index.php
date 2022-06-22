<?php 
require_once 'backend/init.php';


$item = $db->prepare("
SELECT id, name, done FROM items WHERE user = :user");

$item->execute([
    'user' => $_SESSION['user_id']
]);

$items = $item->rowCount() ? $item : [];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="styles/style.css">
<title>Document</title>
<div class="list-wrap w-100 align-items-center bg-light p-3 rounded shadow-sm">
    <h1 class="header">To do!</h1>
    <?php if(!empty($items)): ?>
    <ul>
        <?php  foreach($items as $item):?>

        <li class="d-flex justify-content-between">
            <span class="task <?php echo $item['done'] ? 'finnished-task' : '' ?>"><?=$item['name']?></span>
            <?php if(!$item['done']): ?>
            <a  href="backend/functions/done.php?as=done&item=<?=$item['id'] ?>"class="btn btn-sm btn-success" href="#">Finnished</a>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p>No tasks!</p>
    <?php endif; ?>
    <form class="task-adder" method="post" action="backend/functions/add.php">
        <input autocomplete="off" required type="text" name="name" placeholder="New task" class="input">
        <input type="submit" value="Add" class="add-button btn btn-primary d-block text-dark">
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</body>

</html>