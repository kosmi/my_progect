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
function register($name, $pass, $email, $image) {
	$name=trim(htmlspecialchars($name));
	$pass=trim(htmlspecialchars($pass));
	$email=trim(htmlspecialchars($email));
	$file=fopen($image,'rb'); // читаем содержимое файла
	$binary=addslashes($binary);
	fclose($file);

if($name == "" || $pass == "" || $email == "") {
	echo '<h3 style="color:red">The field is not filled<h3>';
	return false;
}
if(strlen($name)<3 || strlen($name)>30 ) {
	echo '<h3 style="color:red">Incorrect length login<h3>';
	return false;
}
if(strlen($pass)<3 || strlen($pass)>30 ) {
	echo '<h3 style="color:red">Incorrect length password<h3>';
	return false;
}
$ins = 'INSERT INTO users (login, pass, email, roleid, avatar) VALUES ("'.$name.'","'.md5($pass).'","'.$email.'",2'.$binary.')';
connect();
mysql_query($ins);
return true;
}

function login($name, $pass) {
	$name=trim(htmlspecialchars($name));
	$pass=trim(htmlspecialchars($pass));
	$sel = 'SELECT * FROM users WHERE name="'.$name.'" AND pass="'.md5($pass).'"';
	connect();
	$res =mysql_query($sel);
	$row =mysql_fetch_array($res, MYSQL_NUM);
	if($row[1] == $name) {
		session_start();
		$_SESSION['ruser']=$name;
		return true;
	}
	else {
		return false;
	}


if($name == "" || $pass == "") {
	echo '<h3 style="color:red">The field is not filled<h3>';
	return false;
}
if(strlen($name)<3 || strlen($name)>30 ) {
	echo '<h3 style="color:red">Incorrect login<h3>';
	return false;
}
if(strlen($pass)<3 || strlen($pass)>30 ) {
	echo '<h3 style="color:red">Incorrect password<h3>';
	return false;
}
}

function getComments($hotelid) {
	$res = mysql_query('SELECT * FROM Coments WHERE hotelid='.$hotelid);
	while($row=mysql_fetch_array($res, MYSQL_NUM)) {
		echo '<dt><div style="margin-top: 10px;">'.$row[3].'&nbsp;'.$row[4].'</div></dt>';
		echo '<dh>'.$row[2].'</dh>';
	}

}
