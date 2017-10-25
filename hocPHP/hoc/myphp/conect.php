<?php
session_start();
class connection{
	
	function connect(){
	 	$con = mysql_connect("localhost","thinh","thinh123");
		if(!$con){
			die	("Không thể kết nối !");	
			exit();
		}
		else{
			mysql_select_db("USER_TEST");	
			mysql_query("set name uf8");
			return $con;
		}
	}
	function loadUser(){
		$con = $this->connect();
		if($con){
			$result = mysql_query("Select * from USER",$con);
			$i = mysql_num_rows($result);
			$j = 0;
			while($row = mysql_fetch_array($result)){
				/*$i = $row['id'];
				echo 'ok roi123'.$i;
				$ten = $row['ten'];
				$pwd = $row['pwd'];
				$quyen = $row['quyen'];
				echo $ten.' - '.$pwd.' - '.$quyen."<br>";	
				$_SESSION['userid1'] = $row['id'];
				print( '<h1>*&*&^$#%& '.$id.'</h1>');
				$j++;	*/
				echo "<div id='contain'><div id='tenuser'>".$row['ten']."</div><div id='pwd'>".$row['pwd']."</div><div id='quyen'>".$row['quyen']."</div></div>";			
		}
		$_SESSION['test'] = 'thinhbumhinvssjhvlkjhl';
		}else
			echo "Không thể load danh sách";
	}
}
?>