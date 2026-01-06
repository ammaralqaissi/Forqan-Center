<?php
require_once '../db_config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];


function addNews($tit, $des, $imag){
    $conn = getDBConnection();
    
    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "INSERT INTO `last_news` (`description`, `image`, `title`) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sss", $des, $imag, $tit);
    $result = mysqli_stmt_execute($stmt);
    
    if (!$result) {
        die("Query failed:" . mysqli_error($conn));
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

addNews($title, $description, $image);

?>
