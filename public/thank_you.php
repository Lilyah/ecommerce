<?php 

require_once("../resources/config.php");

include(TEMPLATE_FRONT .  "/header.php");

    proccess_transaction();

?>

    <div class="container">
		<h1 class="text-center" style="margin-top:50px">THANK YOU!</h1>
    </div>

	<div class="main-content text-center">
    <span class="glyphicon glyphicon-ok text-success" style="font-size: 400%; margin-top: 20px; margin-bottom: 20px"></span>
    <p class="text-center">Thank you for your purchase. <br>We already send you confirmation email with details of your order.</p>
	</div>

<?php 

include(TEMPLATE_FRONT .  "/footer.php");

?>