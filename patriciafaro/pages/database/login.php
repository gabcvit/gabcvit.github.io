<?php
	
	if($_POST['login'] == "patriciafaro" && $_POST['password'] == "fono")
	{
		header("Location: ../index.php");
	}
	else
	{
		header("Location: ../../index.php");
	}

?>