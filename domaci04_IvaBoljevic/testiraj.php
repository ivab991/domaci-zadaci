<html>
    <head>
        <title>Da li je godina prestupna ili ne</title>
    </head>
</html>

<?php 

    if($_POST) {
        $year = $_POST['leapYear'];
        if( (0 == $year % 4) && (0 != $year % 100) || (0 == $year % 400) ) {
                echo $year . " je prestupna godina!";
            } 
            else {
                echo $year . " nije prestupna godina!";
            }
    }

 ?>