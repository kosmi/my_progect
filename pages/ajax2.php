<?php 
include_once("functions.php");
connect();
$hid = $_POST['hid'];
$res = mysql_query('SELECT id, hotel, stars, cost FROM hotels WHERE cityid='.$hid);
echo '<table align="center" class="table table-stripped">';
echo '<tr><th>Hotel</th><th>Stars</th><th>Cost</th><th>Info</th></tr>';
while($row=mysql_fetch_array($res, MYSQL_NUM)) {
	echo '<tr>';
	echo '<td>'.$row[1].'</td><td>'.$row[2].'*</td><td>'.$row[3].'</td><td><a target="_blank" href="pages/hotelinfo.php?hid='.$row[0].'">...</a></td></tr>';
}
echo '</table>';
mysql_free_result($res);
 ?>