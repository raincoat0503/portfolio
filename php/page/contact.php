<?php include('../../php/module/header.php') ?>

<h2 class="jp" style="margin-top: 50px; font-size:34px;">ただいま改装中、送信しても何も起きません。</h2>

<form action="../module/check.php" method="POST" class="contact">
    <div class="contact_box">
        <div class="contact_text">
            <p>Mail address</p>
        </div>
        <input class="contact_form contact_form-mail" placeholder="Email address" type="text">
    </div>
    <div class="contact_box">
        <div class="contact_text">
            <p>Fitst name</p>
        </div>
        <input class="contact_form contact_form-fname" placeholder="First name" type="text">
    </div>
    <div class="contact_box">
        <div class="contact_text">
            <p>Last name</p>
        </div>
        <input class="contact_form contact_form-lname" placeholder="Last name" type="text">
    </div>
    <div class="contact_box">
        <div class="contact_text">
            <p>Contact us</p>
        </div>
        <textarea class="contact_form contact_form-form" placeholder="Inquiry details" type="text"></textarea>
    </div>
    <div class="contact_box">
        <div class="contact_text">
        </div>
        <input class="contact_form contact_form-submit btn-black" value="SUBMIT" type="submit">
    </div>
</form>

<?php include('../../php/module/footer.php') ?>