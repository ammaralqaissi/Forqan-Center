<?php
    session_start();
    require_once 'db_config.php';
    
    $conn = getDBConnection();

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['email']) && isset($_POST['password'])) {

        $name = validate($_POST['email']);
        $pass = validate($_POST['password']);
        
        if (empty($name)) {
            header("Location: sign_in.php?error=User Name is required");
            exit();
        } else if(empty($pass)){
            header("Location: sign_in.php?error=Password is required");
            exit();
        } else {
            // Use prepared statement to prevent SQL injection
            $stmt = mysqli_prepare($conn, "SELECT * FROM `user` WHERE email = ? AND password = ?");
            mysqli_stmt_bind_param($stmt, "ss", $name, $pass);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $name && $row['password'] === $pass) {
                    echo "Logged in!";
                    
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['user_id'];
                    $type = $_SESSION['Type'] = $row['Type'];
                    $type = strtolower($type);
                    $_SESSION['phone'] = $row['numPhone'];
                    
                    if($type == 'admin')
                        header("Location: admin/admin1.php");
                    else if($type == 'teacher')
                        header("Location: teacher.php");
                    else if($type == 'student')
                        header("Location: student/student.php");
                    else
                        header("Location: publisher/publisher.php");

                    exit();
                } else {
                    header("Location: sign_in.php?error=Incorrect User name or password");
                    exit();
                }
            } else {
                header("Location: sign_in.php?error=Incorrect User name or password");
                exit();
            }
            
            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($conn);
?>








