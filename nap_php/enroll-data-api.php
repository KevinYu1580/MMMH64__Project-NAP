<?php
require __DIR__ . '/parts/connect_db.php';


if(isset($_POST['add-to-cart'])){
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $birthdate = $_POST["birthdate"];
    $idnum = $_POST["id-num"];
    // $eat = $_POST["eating-habit"];
    // $event_order_sid = $_POST["event_sid"];

    foreach($name as $index => $names){
        // echo $names. ' - '.$mobile[$index].' - '.$birthdate[$index].' - '.$idnum[$index].' - '.$eat[$index];
        $s_name = $names;
        $s_mobile = $mobile[$index];
        $s_birthdate = $birthdate[$index];
        $s_idnum = $idnum[$index];
        // $s_eat = $eat[$index];
        // $s_event_sid = $event_sid;

        $enroll_query = "INSERT INTO event_enroll_list(name,mobile,birthdate,id_num,eating_habit,event_sid) VALUES('$s_name','$s_mobile','$s_birthdate','$s_idnum','','')";

        $stmt = $pdo->prepare($enroll_query );
        $stmt->execute();
        // $query_run = mysqli_query($connect, $query);


    }
    


}

?>
