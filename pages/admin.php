<h1>Admin</h1>
<div class="row">
        <div class="left col-lg-6  col-md-6 col-sm-6 col-xs-6">
        <h3>Countries</h3>
		    <?php
			//добавляем страну в таблицу 
			//$ins1="insert into Countries(country) values('Аргентина')";
			connect();
			//mysql_query($ins1);
			// $err=mysql_errno();
			// if ($err) {
			// 	echo $err;
			// }
			$sel='select*from countries';
			$res=mysql_query($sel);
			echo "<form action='index.php?page=2' method='post'>";
			echo "<table width='30%' align='center' class='table-bordered'>";
			while ($row=mysql_fetch_array($res,MYSQL_NUM)) {
				echo "<tr>";
				echo "<td>".$row[0]."</td><td>".$row[1]."</td>";
				echo "<td><input type='checkbox' name='cb".$row[0]."'></td>";//вставляем чекбокс и соеденяем имя с id
				echo "</tr>";
			}
			echo "</table>";
			mysql_free_result($res);
			
			echo "<input type='text' name='country'>";
			echo "<input type='submit' name='addcountry' value='Add'>";
			echo "<input type='submit' name='delcountry' value='Delete'>";
			echo "</form>";
			//добавление страны
			if (isset($_POST['addcountry'])) {
				$country=trim(htmlspecialchars($_POST['country']));
				if ($country==''){
					exit();
				}
				$ins='insert into Countries (country) values ("'.$country.'")';
				mysql_query($ins);
				echo "<script>window.location.href=document.URL;</script>";
				//header("Location:index.php?page=3");
			}
			//кнопка удаление
			if (isset($_POST['delcountry'])) {
				foreach ($_POST as $k => $v) {//ключь имя элем
					if (substr($k,0,2)=="cb") {//ищем элем с именем начинающимся на cb
						$idc=substr($k, 2);//получаем id удаляя cb с имени чекбокса
						$del='delete from Countries where id='.$idc;//удаляем с таблицы выбраную страну
						mysql_query($del);//выполняем запрос
					}
				}
				echo "<script>window.location.href=document.URL;</script>";//сразу обновляется страница
			}
			?>
		</div>
		<div class="right col-lg-6  col-md-6 col-sm-6 col-xs-6">
		<h3>Cities</h3>
		 	<?php 
		 	echo "<form action='index.php?page=2' method='post'>";
		 	$sel="select ci.id, ci.city, co.country from Countries co, Cities ci where ci.countryid=co.id";
		 	$res=mysql_query($sel);
		 	echo "<table width='50%' class='table-bordered'>";
		 	while ($row=mysql_fetch_array($res, MYSQL_NUM)) {
		 		echo "<tr>";
		 		echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td>";
		 		echo "</tr>";
		 	}
		 	echo "</table>";
		 	mysql_free_result($res);
		 	$res=mysql_query('select * from countries');
		 	echo "<select name='countryname'>";
		 	while ($row=mysql_fetch_array($res, MYSQL_NUM)) {
		 		echo "<option value='".$row[0]."'>".$row[1]."</option>";
		 	}
		 	echo "</select>";
		 	echo "<br>";
		 	echo "<input type='text' name='city'>";
		 	echo "<input type='submit' name='addcity' value='Add city'>";
		 	echo "</form>";
		 	if (isset($_POST['addcity'])) {
		 		$city=trim(htmlspecialchars($_POST['city']));
		 		if ($city=='') {
		 			exit();
		 		}
		 		$countryid=$_POST['countryname'];
		 		$ins='insert into Cities (city,countryid) values ("'.$city.'",'.$countryid.')';
		 		mysql_query($ins);
		 		//echo mysql_errno();
		 		echo "<script>window.location.href=document.URL;</script>";
		 	}
		 ?>	
		</div>
	</div>
	<br>
	<div class="row block_hr"></div>
	<div class="row">
	<h3 class="hotel">Hotels</h3>
	<div class="left col-lg-6  col-md-6 col-sm-6 col-xs-6">
		<form action='index.php?page=2' method='post'>
		<?php 
		$sel="select ci.id, ci.city, co.country, co.id AS co_id from Countries co, Cities ci where ci.countryid=co.id";
		$res=mysql_query($sel);
		//select Hotels.*, ci.city, co.country from Hotels, Countries co, Cities ci where Hotels.countryid=co.id AND Hotels.cityid=ci.id
		 ?>
			<select name='country_city_name'>
		 	<?php while ($row=mysql_fetch_array($res, MYSQL_NUM)) { ?>
		 		<option value="<?php echo $row[0].':'.$row[3]; ?>"><?php echo $row[2].' '.$row[1]; ?></option>
		 	<?php } ?>
		 	</select>
		 	<label for="stars">Stars</label>
		 	<select name="stars">
		 		<?php 
		 		for ($i=0; $i < 5 ; $i++) { ?>
		 			<option><?php echo $i+1;?></option>
		 		<?php } ?>
		 		 
		 	</select><br>
		 	<label for="cost">Price:</label>	
		 	<input type="number" name="cost"><br>
		 	<label for="inform">Information:</label><br>
		 	<textarea class="form-control" rows="5" id="comment"></textarea><br>
		 	<input type='text' name='hotel'>
		 	<input type='submit' name='addhotel' value='Add hotel'>
		</form><br>
		
		
		</div>
		<div class="right col-lg-6  col-md-6 col-sm-6 col-xs-6">
			<form action="index.php?page=2" method='post' enctype="multipart/form-data">
				<select name="hotelid">
					<?php 
						$sel = 'select ho.id, co.country, ci.city, ho.hotel from countries co, cities ci, hotels ho where co.id=ho.countryid and ci.id=ho.cityid order by co.country';
						$res = mysql_query($sel);
						while($row=mysql_fetch_array($res, MYSQL_NUM)) {
							echo '<option value="'.$row[0].'">';
							echo $row[1].'&nbsp;&nbsp;'.$row[2].'&nbsp;&nbsp;'.$row[3].'</option>';
						}
						mysql_free_result($res); // очищает память
					?>
					
				</select>
				<input type="file" name="file[]" multiple accept="image/*">
				<input type="submit" name="addImage" value="Add img">
			</form>
			<?php 
			if(isset($_REQUEST['addImage'])) {
				foreach ($_FILES['file']['name'] as $key => $value) {
					if($_FILES['file']['error'][$key] !=0) {
						echo '<script>alert("Wrong file size: '.$value.'")</script>';
						continue;
					}
					if(move_uploaded_file($_FILES['file']['tmp_name'][$key], 'images/'.$value )) {
						$ins = 'INSERT INTO images(hotelid, imagepath) VALUES ('.$_REQUEST['hotelid'].',"images/'.$value.'")';

						mysql_query($ins);
					}

				}
			}

			 ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12" >
			<?php 
		$hotel_list = mysql_query("SELECT Hotels.*, ci.city, co.country FROM Hotels, Countries co, Cities ci WHERE Hotels.countryid=co.id AND Hotels.cityid=ci.id");
		 ?>
		<table width="100%" class='table-bordered'>
			<thead>
				<tr>
					<th>№</th>
					<th>Hotel name</th>
					<th>City</th>
					<th>Country</th>
					<th>Stars</th>
					<th>Price, $</th>
					<th>Information</th>
				</tr>
				<?php 
				$cnt = 1;
				while ($row=mysql_fetch_array($hotel_list, MYSQL_NUM)) {
		 		echo "<tr>";
		 		echo "<td>".$cnt."</td><td>".$row[1]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td>";
		 		echo "</tr>";
		 		$cnt++;
		 	}
				 ?>
			</thead>
		</table>

		<?php
		if (isset($_POST['addhotel'])) {
		 		$hotel=trim(htmlspecialchars($_POST['hotel']));
		 		if ($hotel=='') {
		 			exit('ERROR');
		 		}
		 		$country_city = explode(":", $_POST['country_city_name']);
		 		$city = $country_city[1];
		 		$country = $country_city[0];
		 		$stars = $_POST['stars'];
		 		$cost = $_POST['cost'];
		 		$info = trim(htmlspecialchars($_POST['inform']));

		 		$ins = "INSERT INTO Hotels (hotel, countryid, cityid, stars, cost, info) VALUES ('$hotel',$city, $country, $stars, $cost, '$info')";
		 		mysql_query($ins);
		 		echo "<script>window.location.href=document.URL;</script>";
		 	}
		?>
		</div>
	</div>
	