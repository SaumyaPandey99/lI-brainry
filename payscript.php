<?php
$apiKey="rzp_test_NSrsJJKYDxgbif";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="" method=post>
    <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="100"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Li-Brainry"
    data-description="new home to your preloved books!"
    data-image=""
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['contact'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" customer="Hidden Element" name="hidden">
</form>