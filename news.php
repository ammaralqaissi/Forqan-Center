<?php
require_once 'db_config.php';

function viewNews(){
    $conn = getDBConnection();
    $query = "SELECT * FROM `last_news`";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));

    while ($row = mysqli_fetch_assoc($result)) {
        $title = htmlspecialchars($row['title']);
        $description = htmlspecialchars($row['description']);
        $image = htmlspecialchars($row['image']);
        
        echo '<div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-title">'.$title.'</div>
                        <div class="testimonial-info">
                    <div class="testimonial-person">
                        <img src="'.$image.'" alt="">
                    </div><!--/.testimonial-person-->
                </div><!--/.testimonial-info-->
                <div class="testimonial-comment">
                        <p style="text-align: end;">
                            '.$description.'
                        </p>	
                    </div><!--/.testimonial-comment-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->';
    }
    mysqli_close($conn);
}

function viewNewsPub(){
    $conn = getDBConnection();
    $query = "SELECT * FROM `last_news`";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    while ($row = mysqli_fetch_assoc($result)) {
        $title = htmlspecialchars($row['title']);
        $description = htmlspecialchars($row['description']);
        $image = htmlspecialchars($row['image']);
        $id = intval($row['ID_news']);
        echo '<div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-title">'.$title.'</div>
                        <div class="testimonial-info">
                    <div class="testimonial-person">
                        <img src="'.$image.'" alt="">
                    </div><!--/.testimonial-person-->
                </div><!--/.testimonial-info-->
                <div class="testimonial-comment">
                        <p style="text-align: end;">
                            '.$description.'
                        </p>	
                    </div><!--/.testimonial-comment-->
                    <div class="testimonial-button">
                            <button class="delete" onclick="deleteNews('.$id.')">delete</button>
                    </div>
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->';
    }
    mysqli_close($conn);
}


function viewActivity(){
    $conn = getDBConnection();
    $query = "SELECT * FROM `activity`";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    while ($row = mysqli_fetch_assoc($result)) {
        $title = htmlspecialchars($row['tilte']);
        $description = htmlspecialchars($row['description']);
        $image = htmlspecialchars($row['image']);
        $date = htmlspecialchars($row['date']);
        $time = htmlspecialchars($row['time']);
        $level = htmlspecialchars($row['targeted_student']);
        $location = htmlspecialchars($row['location']);
        echo '<div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-title">'.$title.'</div>
                    <div class="testimonial-info">
                        <div class="testimonial-person">
                            <img src="'.$image.'" alt="">
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                    <br>
                    <div class="dateAct">
                        <div class="act">التاريخ : <span>'.$date.'</span><i class="fas fa-calendar-alt" style="font-size:30px;color:red"></i>
                        </div>
                        <div class="act">الوقت : <span>'.$time.'</span></div>
                    </div>
                    <br>
                    <div class="dateAct">
                        <div class="act">الموقع : <span>'.$location.'</span></div>
                        <div class="act">الفئة : <span>'.$level.'</span></div>
                    </div>
                    <div class="testimonial-comment">
                        <p style="text-align: end;">
                            '.$description.'
                        </p>	
                    </div><!--/.testimonial-comment-->
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->';
    }
    mysqli_close($conn);
}
function viewActivityPub(){
    $conn = getDBConnection();
    $query = "SELECT * FROM `activity`";
    $result = mysqli_query($conn, $query) or die("Query failed:" . mysqli_error($conn));
    
    while ($row = mysqli_fetch_assoc($result)) {
        $title = htmlspecialchars($row['tilte']);
        $description = htmlspecialchars($row['description']);
        $image = htmlspecialchars($row['image']);
        $date = htmlspecialchars($row['date']);
        $time = htmlspecialchars($row['time']);
        $level = htmlspecialchars($row['targeted_student']);
        $location = htmlspecialchars($row['location']);
        $id = intval($row['ID_activity']);
        echo '<div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-title">'.$title.'</div>
                    <div class="testimonial-info">
                        <div class="testimonial-person">
                            <img src="'.$image.'" alt="">
                        </div><!--/.testimonial-person-->
                    </div><!--/.testimonial-info-->
                    <br>
                    <div class="dateAct">
                        <div class="act">التاريخ : <span>'.$date.'</span><i class="fas fa-calendar-alt" style="font-size:30px;color:red"></i>
                        </div>
                        <div class="act">الوقت : <span>'.$time.'</span></div>
                    </div>
                    <br>
                    <div class="dateAct">
                        <div class="act">الموقع : <span>'.$location.'</span></div>
                        <div class="act">الفئة : <span>'.$level.'</span></div>
                    </div>
                    <div class="testimonial-comment">
                        <p style="text-align: end;">
                            '.$description.'
                        </p>	
                    </div><!--/.testimonial-comment-->
                    <div class="testimonial-button">
                        <button class="delete" onclick="deleteAct('.$id.')">delete</button>
                    </div>
                </div><!--/.testimonial-description-->
            </div><!--/.single-testimonial-box-->';
    }
    mysqli_close($conn);
}

?>
