<?php include('../../php/module/header.php') ?>

<html>

<p class="check_address"></p>
<p class="check_fname"></p>
<p class="check_lname"></p>
<p class="check_text"></p>

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

$(function(){
    $('.check_address').text(params.get('address'));
    $('.check_fname').text(params.get('fname'));
    $('.check_lname').text(params.get('lname'));
    $('.check_text').text(params.get('text'));
});
</script>