<?php
include "config.php";
session_start();
if(session_destroy()){
unset($_SESSION['user_name']);
	header('location:../index.php');
}
?>