function validateForm()
{
	
	var username = document.forms["loginForm"]["username"].value;
	var surname = document.forms["loginForm"]["surname"].value;
	var position = document.forms["loginForm"]["position"].value;
	
	//var username = document.forms["loginame"]["username"].value;
	
	
	document.getElementById("pic").innerHTML=username;
	document.getElementById("pic1").innerHTML=surname;
	document.getElementById("C1").innerHTML=position;
	document.getElementById("image").src="image1.jpg";
	
	
	

	
	return false;
}
