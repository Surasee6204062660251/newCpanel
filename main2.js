const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

function validateLogin() {
	var textbox1Value = document.getElementById("username").value;
	var textbox2Value = document.getElementById("password").value;
  
	var regex = /^[^*/='"`]+$/;
  
	if (textbox1Value === "") {
	  document.getElementById("username").classList.add("error");
	  alert("username cannot be blank.");
	  return false;
	}
  
	if (textbox2Value === "") {
	  document.getElementById("password").classList.add("error");
	  alert("password cannot be blank.");
	  return false;
	}
  
	if (!regex.test(textbox1Value)) {
	  document.getElementById("username").classList.add("error");
	  alert("Invalid input in username. Special characters (*, /, ', \", =, `) are not allowed.");
	  return false;
	}
  
	if (!regex.test(textbox2Value)) {
	  document.getElementById("password").classList.add("error");
	  alert("Invalid input password. Special characters (*, /, ', \", =, `) are not allowed.");
	  return false;
	}
  
  
	return true;
}
