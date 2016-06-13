<?php
        session_start();
        
        
        if(empty($_SESSION['login'])){
		header("Location:/index.php");
	}
?>