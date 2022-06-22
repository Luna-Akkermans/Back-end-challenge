<?php 
require_once '../../backend/init.php';

if(isset($_POST['name'])) {
    $name = trim($_POST['name']);

    if(!empty($name)) {
        $addQuery = $db->prepare("
            INSERT INTO items (name, user, done, created)
            VALUES (:name, :user, 0, NOW())
        ");

        $addQuery->execute([
            'name' => $name,
            'user' => $_SESSION['user_id'],
        ]);
    }
}

$parent = dirname('index.php');
echo $parent;
header("Location: ../../index.php");