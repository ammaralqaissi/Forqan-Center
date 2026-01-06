<?php
require_once '../db_config.php';

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];
$date = $_POST['date'];
$time = $_POST['time'];
$level = $_POST['target'];
$loc = $_POST['location'];


function addActivity($tit, $des, $imag, $dat, $tim, $leve, $lo){
    $conn = getDBConnection();
    
    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "INSERT INTO `activity` (`description`, `image`, `date`, `time`, `tilte`, `targeted_student`, `location`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssss", $des, $imag, $dat, $tim, $tit, $leve, $lo);
    $result = mysqli_stmt_execute($stmt);
    
    if (!$result) {
        die("Query failed:" . mysqli_error($conn));
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

addActivity($title, $description, $image, $date, $time, $level, $loc);

?>
