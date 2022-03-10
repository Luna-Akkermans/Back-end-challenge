<? 
function selectAll(){
    $conn = dbConn();
    $stmt = $conn->prepare('SELECT * FROM `list`');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}