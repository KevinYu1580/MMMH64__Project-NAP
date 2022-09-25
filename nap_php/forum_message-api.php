<?php   
require __DIR__ . '/parts/connect_db_kevin.php';


    if(isset($_POST["index"])){
        echo json_encode($_POST["index"]);
        
    }


    $comment_sql = sprintf(
        "SELECT* FROM chat 
        LEFT JOIN chat_commit on chat_commit.chat_event_sid = chat.sid 
        LEFT JOIN member01 on chat_commit.member_sid = member01.id 
        where chat.sid = '1' 
        ORDER BY `comment_date` ASC;
        "
    );
    


?>