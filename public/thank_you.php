<?php 

require_once("../resources/config.php");

include(TEMPLATE_FRONT .  "/header.php");

/* Thank you page will display only if the transaction was successful
*/
if(isset($_GET['tx'])){
    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $transasction = $_GET['tx'];
    $status = $_GET['st'];

    $query = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES ('{$amount}', '{$transasction}', '{$status}', '{$currency}')");
    confirm($query);

    session_destroy();
    
} else {
    redirect("index");
}


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