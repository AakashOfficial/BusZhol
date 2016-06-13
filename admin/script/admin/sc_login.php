<?php 

	session_start();
	$error="";
        
	if(isset($_POST['submit'])){

		if(empty($_POST['login']) || empty($_POST['password'])){
			$error='Fill all blanks above';
			header("Location:/index.php?error=$error");
		}

		else{

                        include_once 'config.php';

			$query=mysql_query("SELECT * FROM `administration` where password='$_POST[login]' AND login='$_POST[password]'") or die(mysql_error());

			$rows=mysql_num_rows($query);			
                        $res=mysql_fetch_array($query);
			if($rows==1){
				$_SESSION['login']=$res['login'];
                                $_SESSION['id']=$res['id'];
				header("Location:/admin/index.php");
			}

			else{
				$error='Username or Password is invalid';
				header("Location:/index.php?error=$error");
			}

			mysql_close($connection);
		}

	}
?>