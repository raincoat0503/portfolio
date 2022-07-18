<?php include('../../php/module/header.php') ?>

<form action="../module/check.php" class="contact" name="contact">
    <div class="contact_box">
        <div class="contact_text">
            <p>Mail address</p>
        </div>
        <input class="contact_form contact_form-mail" placeholder="Email address" type="text" name="address" method="POST">
    </div>
    <div class="contact_box">
        <div class="contact_text">
            <p>Fitst name</p>
        </div>
        <input class="contact_form contact_form-fname" placeholder="First name" type="text" name="fname" method="POST">
    </div>
    <div class="contact_box">
        <div class="contact_text">
            <p>Last name</p>
        </div>
        <input class="contact_form contact_form-lname" placeholder="Last name" type="text" name="lname" method="POST">
    </div>
    <div class="contact_box">
        <div class="contact_text">
            <p>Contact us</p>
        </div>
        <textarea class="contact_form contact_form-form" placeholder="Inquiry details" type="text" name="text" method="POST"></textarea>
    </div>
    <div class="contact_box">
        <div class="contact_text">
        </div>
        <input class="contact_form contact_form-submit btn-black" value="SUBMIT" type="submit">
    </div>
</form>

<?php include('../../php/module/footer.php') ?>