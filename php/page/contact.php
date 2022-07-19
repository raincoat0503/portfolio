<?php include('../../php/module/header.php') ?>

<?php

// 変数の初期化
$page_flag = 0;

if (!empty($_POST['btn_confirm'])) {

    $page_flag = 1;
} elseif (!empty($_POST['btn_submit'])) {

    $page_flag = 2;
}
?>

<?php if ($page_flag === 1) : ?>

    <form class="contact_checkbox" method="post" action="">
        <div class="element_wrap contact_box">
            <div class="contact_text">
                <p class="contact_head">Mail address</p>
            </div>
            <p class="contact_check"><?php echo $_POST['address']; ?></p>
        </div>
        <div class="element_wrap contact_box">
            <div class="contact_text">
                <p class="contact_head">Your name</p>
            </div>
            <p class="contact_check"><?php echo $_POST['fname'] .' ' . $_POST['lname']; ?></p>
        </div>
        <div class="element_wrap contact_box">
            <div class="contact_text">
                <p class="contact_head">Conform</p>
            </div>
            <p class="contact_check"><?php echo $_POST['text']; ?></p>
        </div>
        <div class="element_wrap contact_box">
            <div class="contact_text">
                <p class="contact_head"></p>
            </div>
            <input class="contact_btn btn-black" type="submit" name="btn_back" value="Back">
        <input class="contact_btn btn-black" type="submit" name="btn_submit" value="Transmission">
        </div>
        <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
        <input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>">
        <input type="hidden" name="lname" value="<?php echo $_POST['lname']; ?>">
        <input type="hidden" name="text" value="<?php echo $_POST['text']; ?>">
    </form>

<?php elseif ($page_flag === 2) : ?>

    <p>送信が完了しました。</p>

<?php else : ?>
    <form action="" class="contact" name="contact" method="post">
        <div class="contact_box">
            <div class="contact_text">
                <p class="contact_head">Mail address</p>
            </div>
            <input class="contact_form contact_form-mail" placeholder="Email address" type="text" name="address">
        </div>
        <div class="contact_box">
            <div class="contact_text">
                <p class="contact_head">Fitst name</p>
            </div>
            <input class="contact_form contact_form-fname" placeholder="First name" type="text" name="fname">
        </div>
        <div class="contact_box">
            <div class="contact_text">
                <p class="contact_head">Last name</p>
            </div>
            <input class="contact_form contact_form-lname" placeholder="Last name" type="text" name="lname">
        </div>
        <div class="contact_box">
            <div class="contact_text">
                <p class="contact_head">Contact us</p>
            </div>
            <textarea class="contact_form contact_form-form" placeholder="Inquiry details" type="text" name="text"></textarea>
        </div>
        <div class="contact_box">
            <div class="contact_text">
            </div>
            <input class="contact_form contact_form-submit btn-black" value="Submit" type="submit" name="btn_confirm">
        </div>
    </form>
<?php endif; ?>

<?php include('../../php/module/footer.php') ?>