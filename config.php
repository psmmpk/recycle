<?php

$link = mysql_connect('www.sisa.my:3306', 'root','');
if (!$link)
{
	die('Not Connected : '.mysql_error());
}

//make current db
$db_selected = mysql_select_db('3r4life',$link);
if (!$db_selected)
{
	die('DB not selected : '.mysql_error());
}
?>