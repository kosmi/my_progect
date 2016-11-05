<h1>Tours</h1>
<?php 
connect();
echo '<select name="countryid" id="countryid" onchange="showCities(this.value)">';
$res = mysql_query("SELECT * FROM countries");
while ($row = mysql_fetch_array($res, MYSQL_NUM)) {
	echo '<option value ="'.$row[0].'">'.$row[1].'</option>';
}
echo '</select>';
echo '<div id="citylist"></div>';
echo '<div id="hotellist"></div>';
 ?>
