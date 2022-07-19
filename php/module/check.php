<?php include('../../php/module/header.php') ?>

<html>

<?php
if( !empty($_POST['contact']) ) {

	// 変数とタイムゾーンを初期化
	$auto_reply_subject = null;
	$auto_reply_text = null;
	date_default_timezone_set('Asia/Tokyo');

	// 件名を設定
	$auto_reply_subject = 'お問い合わせありがとうございます。';

	// 本文を設定
	$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
下記の内容でお問い合わせを受け付けました。\n\n";
	$auto_reply_text .= "氏名：" . $_POST['address'] . "\n";
	$auto_reply_text .= "メールアドレス：" . $_POST['fname'] . $_POST['lname']. "\n\n";
	$auto_reply_text .= "GRAYCODE 事務局";

	// メール送信
	mb_send_mail( $_POST['address'], $auto_reply_subject, $auto_reply_text);

    echo "aaa";
}

    // mb_language("Japanese");
    // mb_internal_encoding("UTF-8");

    // $headers = "From: g3esportspingu@gmail.com";
    // $to = $_POST['address'];
    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $massage = $_POST['text'];

    // if (mb_send_mail($headers, $to, $fname, $lname, $massage)) {
    //     echo "メールを送信しました";
    // } else {
    //     echo "メールの送信に失敗しました";
    // }
    ?>

</html>

<?php include('../../php/module/footer.php') ?>