<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");


//http://localhost/Paytm/i.php?CUST_ID=CUST1&TXN_AMOUNT=1
$ORDER_ID = $_GET["ORDER_ID"];
$CUST_ID = $_GET["CUST_ID"];
$TXN_AMOUNT = $_GET["TXN_AMOUNT"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label hidden>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly hidden>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label hidden>CUSTID*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $CUST_ID?>" readonly></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>CHANNEL*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>TRANSACTION AMOUNT*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $TXN_AMOUNT?>" readonly>
					</td>
				</tr>
			</tbody>
		</table>
		<br><br><br>
	<input value="CHECKOUT" type="submit"	onclick="">
	</form>
</body>
</html>