<?php 



function getListName(){
    echo $_POST['NameOfList'];
}



// function CreateTable($name) {
//     $conn = dbConn();
//     $statement = $conn->prepare("CREATE TABLE :table( 
//             id   INT AUTO_INCREMENT,
//             NameOfTask  VARCHAR(100) NOT NULL, 
//             TimeOfTask  TIME NOT NULL,
//             StatusTask VARCHAR(100) NOT NULL,
//             CategoryTask VARCHAR(100) DEFAULT NULL,
//             PRIMARY KEY(id)
//         );");
//     $statement->execute([
//         ':table' => $name
//     ]);
// }



