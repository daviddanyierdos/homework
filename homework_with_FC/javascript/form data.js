


window.onload = function() {
	
};

function check() {
	var ok = true;
	var current = null;
	
	// check text
	var text = document.getElementById("text");
	if (text) {
		if (text.value.length==0) {
			ok = false;
			current = text;
		}
	}
	
	// check e-mail
	var email = document.getElementById("email");
	if(email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (!checkPattern.test(email.value)) {
			ok = false;
			current = email;
		}
	}
	
	// check name
	var name = document.getElementById("name");
	if(name) {
		if(name.value.length < 8 || name.value.length > 30) {
			ok = false;
			current = name;
		}
	}
	
	// set focus
	if(current) {
		current.focus();
	}

	return ok;
}
