<?php
if(! isset($_SESSION)){
    session_start();
}

$connect = mysqli_connect("localhost", "chiyin_niyihc", "Admin_chiyin0209", "test-enroll");

if(isset($_POST['add-to-cart'])){
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $birthdate = $_POST["birthdate"];
    $idnum = $_POST["id-num"];
    $eat = $_POST["eating-habit"];
    $event_order_sid = $_POST["event_order_sid "];

    foreach($name as $index => $names){
        // echo $names. ' - '.$mobile[$index].' - '.$birthdate[$index].' - '.$idnum[$index].' - '.$eat[$index];
        $s_name = $names;
        $s_mobile = $mobile[$index];
        $s_birthdate = $birthdate[$index];
        $s_idnum = $idnum[$index];
        $s_eat = $eat[$index];
        $s_event_order_sid = $event_order_sid[$index];

        $query = "INSERT INTO event_enroll_list(name,mobile,birthdate,id_num,eating_habit,event_order_sid) VALUES('$s_name','$s_mobile','$s_birthdate','$s_idnum','$s_eat','$s_event_order_sid')";
        $query_run = mysqli_query($connect, $query);


    }
    if($query_run){
        $_SESSION['status'] = "Data Inserted Successfully";
        // header("Location: event-enroll-data.php");
        exit(0);
    }else{
        $_SESSION['status'] = "Data Not Inserted";
        // header("Location: event-enroll-data.php");
        exit(0);
    }


}

?>
