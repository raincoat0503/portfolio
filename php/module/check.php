<?php include('../../php/module/header.php') ?>

<html>

<?php

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $from = "g3esportspingu@gmail.com";
    $to = $_REQUEST['address'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $massage = $_REQUEST['text'];

    if (mb_send_mail($from,  $to, $fname,$lname, $massage)) {
        echo "メールを送信しました";
    } else {
        echo "メールの送信に失敗しました";
    }
    echo $to;
    ?>

</html>

<?php include('../../php/module/footer.php') ?>