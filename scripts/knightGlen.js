function displayContactInfo(){
		var x = document.getElementById("contactInfo").style.display;
		console.log(x);
		if(x=="none"){
			document.getElementById("contactInfo").style.display = "block";
			document.getElementById("submitMessage").focus();
		}else{
			document.getElementById("contactInfo").style.display = "none";
		}
		// document.getElementById("contactInfo").style.WebkitTransition =  '.5s ease';
		// document.getElementById("contactInfo").style.transition = '.5s ease';
}

/*function validateFormFields(){
	var x = document.getElementById("formName").value;
	var y = document.getElementById("formEmail").value;
	var z = document.getElementById("formContent").value;
	
	if(x == "" ||x == null){
		document.getElementById("formNameError").style.display = "inline";
	}if(y == "" ||y == null){
		document.getElementById("formEmailError").style.display = "inline";
	}if(z == "" ||z == null){
		document.getElementById("formContentError").style.display="inline";
	}
} */