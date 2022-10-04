<?php
// 顯示留言功能
require  '../parts/connect_db.php';

$sql = [];

if(empty($_GET['sid'])){ 
   echo '';
}
else{
    $get = $_GET['sid'];
    $sql_command ="
    SELECT * FROM chat 
    LEFT JOIN chat_commit on chat_commit.chat_event_sid = chat.sid 
    LEFT JOIN member01 on chat_commit.member_sid = member01.id 
    WHERE chat.sid = $get
    ORDER BY `comment_date` ASC";
    
    $sql = sprintf($sql_command);
    $rows = $pdo->query($sql_command)->fetchAll();
    
    
    foreach ($rows as $r) {
        $userPic = $r['avatar'];
        $userName = $r['name'];
        $date = $r['comment_date'];
        $comment = $r['comment'];
        echo "
        <div id='messageCard' class='messageCard'>
            <div style='background-image: url(./img/member/profile-image/$userPic);' class='memberPic'></div>
                <div class='content_wrap d-flex'>
                    <span class='poster'>
                    $userName     
                    </span>
                    <span class='date'>
                    $date                      
                    </span>
                    <p class='message_text'>
                    $comment            
                    </p>
            </div>
        </div>";
    }
}
