function showCities(countryid) {
	if(countryid == "") {
		document.getElementById('citylist').innerHTML="";
		exit();
	}
	if(window.XMLHttpRequest) {
		ao = new XMLHttpRequest();
	}
	else {
		ao = new ActiveXObject('Microsoft.XMLHTTP')
	}
	ao.onreadystatechange = function() {
		if(ao.readyState == 4 && ao.status == 200) {
			document.getElementById('citylist').innerHTML=ao.responseText;
		}
	}

	ao.open("GET","pages/ajax1.php?cid="+countryid, true);
	ao.send(null);
}
function showHotels(citiid) {
	if(countryid == "") {
		document.getElementById('hotellist').innerHTML="";
		exit();
	}
	if(window.XMLHttpRequest) {
		ao = new XMLHttpRequest();
	}
	else {
		ao = new ActiveXObject('Microsoft.XMLHTTP')
	}
	ao.onreadystatechange = function() {
		if(ao.readyState == 4 && ao.status == 200) {
			document.getElementById('hotellist').innerHTML=ao.responseText;
		}
	}

	//ao.open("GET","pages/ajax2.php?hid="+citiid, true);
	ao.open("POST","pages/ajax2.php", true); //POST
	ao.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ao.send("hid="+citiid);// Передаем данные
}
