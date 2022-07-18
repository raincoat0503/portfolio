<?php include('../../php/module/header.php') ?>

<html>

<p class="check_address"></p>
<p class="check_fname"></p>
<p class="check_lname"></p>
<p class="check_text"></p>

<?php
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = $_POST['address'];
    $title = $_POST['fname'];
    $content = $_POST['lname'];
    $text = $_POST['text'];

    if (mb_send_mail($to, $title, $content.$text)) {
        echo "メールを送信しました";
    } else {
        echo "メールの送信に失敗しました";
    }
    ?>

</html>

<?php include('../../php/module/footer.php') ?>

<script>
    // URLを取得
    let url = new URL(window.location.href);

    // URLSearchParamsオブジェクトを取得
    let params = url.searchParams;

    // getメソッド
    console.log(params.get('address')); // address
    console.log(params.get('fname')); // fname
    console.log(params.get('lname')); // lname
    console.log(params.get('text')); // text

    $(function() {
        $('.check_address').text(params.get('address'));
        $('.check_fname').text(params.get('fname'));
        $('.check_lname').text(params.get('lname'));
        $('.check_text').text(params.get('text'));
    });
</script>