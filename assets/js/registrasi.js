function validateEmail(email,pass){
	if (email==pass) {
		return false;
	}else{
	    var re = /([a-z\d]{1,})+@([a-z\d]{1,})+\.([a-z\d]{2,})+/;
	    return re.test(email);
	}
}

function validateUsername(username,pass){
	if (username==pass) {
		return false;
	}else{
		var re = /([a-z\d]{5,})+/;
	    return re.test(username);	
	}
}


function AjaxUsername(){
	
}
function validateNamaLengkap(namalengkap){
	//dipisahkan spasi
	var re = /([a-z\d]{8,})+/;
    return re.test(namalengkap);
}

function validatePassword(password,confirm_pass){
	var re = /([a-z\d]{8,})+/;
	if (re.test(password)) {
		return false;
	};
    return password==confirm_pass && strlen;	
}

function validator(){
	var username = document.getElementsByName("username")[0].value;
	var password = document.getElementsByName("password")[0].value;
	var confirm_pass = document.getElementsByName("confirm_pass")[0].value;
	var namalengkap = document.getElementsByName("nama_lengkap")[0].value;
	var hasil = validateEmail(input);

	var button = document.getElementById("submit_button").disabled=true;
	if (hasil) {
		document.getElementById("submit_button").disabled=false;
		alert(hasil);
	}else{
		document.getElementById("submit_button").disabled=true;
		alert(hasil);
	}

}