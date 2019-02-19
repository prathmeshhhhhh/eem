<?php
session_start();
function checkSession(){
	if(isset($_SESSION['id']))
		return true;
	else
		return false;
}
?>