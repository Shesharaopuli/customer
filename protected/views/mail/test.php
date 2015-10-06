<html>
	<head>
	</head>
	<body>
		<h2>Hello <?php echo $name; ?>,</h2> 
		
		
		<h3>Thanks For Purchasing our Product.</h3>
		<h4>The Product Details are:</h4>
		<table border="1">
		<tr><td>Order ID</td><td><?php echo $model->order_product_id; ?>   </td></tr>
		<tr><td>Actual Price</td><td> <?php echo $actualprice; ?> </td></tr>
		<tr><td>Shipping charges</td> <td><?php echo $shippingprice; ?> </td></tr>
		<tr><td>Total Amount</td><td><?php echo $model->order_amount; ?>  </td></tr>
		</table>
	</body>
</html>