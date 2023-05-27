<?php
    $to="kit.25.21bcb010@gmail.com";
    $subject="Today's Absentees";
    $headers=array(
        "MIME-Version"=>"1.0",
        "Context-Type"=>"text/html;charset=UTF-8",
        "From"=>"abishek0309@gmail.com",
        "Reply-To"=>"abishek0309@gmail.com"
    );
    $message=file_get_contents("mail1.php");
    $send=mail($to,$subject,$message,$headers);
    echo($send ? "Mail is sent":"Error");
?>