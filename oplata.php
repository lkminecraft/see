<?php
//Для покупки.
session_start();
unset($_SESSION['proverka']);
  $string = "";
	for ($i = 0; $i < 8; $i++){
		$string .= chr(rand(97, 122));}
	for ($i = 0; $i < 8; $i++){
		$string .= chr(rand(49, 57));}
		$string = str_shuffle($string);
	$_SESSION['proverka'] = $string;
print '<form name="payment" action="https://interkassa.com/lib/payment.php" method="post" 
enctype="application/x-www-form-urlencoded" accept-charset="utf8">
<input type="hidden" name="ik_shop_id" value=".'$id_ik'.">
<input type="text" size="4" name="ik_payment_amount" value="">
<input type="hidden" name="ik_payment_id" value="oplataLK">
<input type="hidden" name="ik_baggage_fields" value="Пополнение счета игрока">
<input type="hidden" name="ik_payment_desc" value="Пополнение счета игрока">
<input type="submit" name="process" value="Оплатить">
</form>';
?>
