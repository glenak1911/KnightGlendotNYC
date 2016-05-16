function displayContactInfo(){
		var x = document.getElementById("contactInfo").style.display;
		if(x=="none"){
			document.getElementById("contactInfo").style.display = "block";
		}else{
			document.getElementById("contactInfo").style.display = "none";
		}
		// document.getElementById("contactInfo").style.WebkitTransition =  '.5s ease';
		// document.getElementById("contactInfo").style.transition = '.5s ease';
}