<?php 

function addTask(){
    $data = (array) null;
    $err = (array) null;
    foreach($_POST as $field => $value){
        if(!empty($_POST[$field])){
            $data[$field] = $value;
        }else{
            $err[$field] = "Invalid input!";
        }
    }
    if(!empty($err)){
        $conn = dbConn(); 
        $currDate = date("y-m-d");
        $stmt = $conn->prepare("INSERT INTO `list`(`created`, `Name`, `time`, `Description`, `Status`) VALUES (:create,:name,:time,:desc,'1')");
        $stmt->execute([
            ':create' => $currDate,
            ':name' => $data['addTaskName'],
            ':time' => $data['addTaskTime'],
            'desc' => $data['addTaskDesc'],
        ]);
    }else{
        
    }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    addTask();
}
