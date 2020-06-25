<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("register") or die (mysql_error());

if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$emailid=$_POST['email_id'];
}







?>