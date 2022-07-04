<?php 
    $connect = mysqli_connect('practice', 'root', 'root', 'db_arduino');
        if (!$connect) {
             die('Ошибка: невозможно подключиться: ' . mysqli_error());
        }
    $index = 0;
    $in_area = "на плоскости";
    $out_area = "вне плоскости";
    $xc = $connect->real_escape_string($_POST["xcoordinate"]);
    $yc = $connect->real_escape_string($_POST["ycoordinate"]);
        if (!empty($_POST)){
            $query = "INSERT INTO coordinate (xcoordinate,ycoordinate) VALUES ('$xc','$yc')";
            mysqli_query($connect,$query);
           if($xc < 10 || $yc < 10){
            $query_area = "INSERT INTO check_value (allow_area) VALUES ('$in_area')";
            }
            else{
                $query_area = "INSERT INTO check_value (allow_area) VALUES ('$out_area')";
            }
           mysqli_query($connect,$query_area);
        }
    mysqli_close($connect);
        
?>