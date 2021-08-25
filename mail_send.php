<?php

    if (!$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo $_POST['email'];    
        echo '入力された値が不正です。';
    }
         
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    $to = $_POST['email'];
    $contents = $_POST['contents'];
    if(mb_send_mail($to,"本内容を受け付けました",$contents)){
      echo "メールを送信しました";
    } else {
      echo "メールの送信に失敗しました";
    };
?>
