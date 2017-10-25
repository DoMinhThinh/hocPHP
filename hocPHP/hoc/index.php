<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("myphp/conect.php");
$b = new connection();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
div{
	border :1px solid black;	
	
}
</style>

</head>

<body>


<?php
	/*
	while($r = mysql_fetch_array($res)){
				echo $r['ten'].'**********8';					 	
			$id1 = $r['id'];
			$ten1 = $r['ten'];
			$pwd1 = $r['pwd'];
			$quyen1 = $r['quyen'];
			echo $id1.'***'.$ten1.'***'.$pwd1.'***'.$quyen1.'<br />';
		
	}*/
	$b->loadUser();
	$pi = 3;
	$a= $_SESSION['test'];echo $a.$pi;
	$j=0;
	while(1){
		
		echo '123';
		echo '<h3>'.$_SESSION['userid1'].'</h3>';
			if($user == 0 )
				break;
			$j++;
	}
	
	
	
?>





<div class='jumbotron text-center'>
<h1> HELLO</h1>
</div>
<div class='nav alert-danger>
<p>aksdjhaksjdhakjsdas</p>
</div>

<div class='col-lg-5 text-center '>
	<p style='background:red'>bhlsdfhalsjfhsldf></p>
    
</div>
<div class='col-lg-7 text-center'>
	<p style='background:green'>sds</p>
</div>

<style>
	.panel-footer{
	background:yellow;
	border:1px solid black;
	}
	.modal-footer{
	background:yellow;
	border:1px solid black;
	}
</style>




<div class='modal-footer'>

<p>dlksnfkjshflkjdsfn</p>
</div>

</body>
</html>