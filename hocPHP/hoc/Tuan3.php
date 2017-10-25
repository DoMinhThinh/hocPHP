<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="css/tuan3.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('myphp/tuan3php.php');
$p = new baitap();

?>
<title>Untitled Document</title>
</head>

<div id="cont">
 <form action="Tuan3.php" method="post">
	Nhập số lượng phần tử của mảng<input type="text" name="input_n_tf"/><input type="submit" value="OK"/><hr>
</form>

    <?php
		$p->them($_REQUEST['input_n_tf']);	
	
	?>




</div>

<body>
</body>
</html>