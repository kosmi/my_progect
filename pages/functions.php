<?
$user='root';
$pass='123456';
$host='localhost';
$dbname='travel';
//подключение к бд
function connect(){
	global $user,$pass,$host,$dbname;
	$link=mysql_connect($host,$user,$pass) or die('error server connect');
	mysql_select_db($dbname) or die('DB error');
	mysql_query("set names 'utf8'");
}

