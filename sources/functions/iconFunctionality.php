<?

if (isset($_GET['p'])) {
    $conn = dbConn();
    $stmt= $conn->prepare("DELETE FROM `list` WHERE id=:id");
    $stmt->execute([':id' => $_GET['p']]);
    }

    if (isset($_GET['y'])) {
        $conn = dbConn();
        $stmt= $conn->prepare("UPDATE `list` SET `Status` = '0' WHERE `list`.`id` = :id;");
        $stmt->execute([':id' => $_GET['y']]);
        }

        if (isset($_GET['z'])) {
            $conn = dbConn();
            $stmt= $conn->prepare("UPDATE `list` SET `Status` = '1' WHERE `list`.`id` = :id;");
            $stmt->execute([':id' => $_GET['z']]);
            }
    