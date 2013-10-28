function validateEmail(email,pass){
	if (email==pass) {		
		return false;
	}else{
	    // var re = /([a-z\d]{1,})+@([a-z\d]{1,})+\.([a-z\d]{2,})+/;
	    var re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,}$/;
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
	var re = /([a-z\d]*)(([ ])([a-z\d]*){1,})+/;
    return re.test(namalengkap);
}

function validatePassword(password,confirm_pass){
	var re = /([a-z\d]{8,})+/;
	if (!re.test(password)) {
		return false;
	};
    return password==confirm_pass;	
}

function validator(){
	//ambil seluruh komponenya
	var username = document.getElementsByName("username")[0].value;
	var password = document.getElementsByName("password")[0].value;
	var confirm_pass = document.getElementsByName("confirm_pass")[0].value;
	var namalengkap = document.getElementsByName("nama_lengkap")[0].value;
	var email = document.getElementsByName("email")[0].value;
	alert("username : "+username+"password : "+password+"confirm _pass  : "+confirm_pass+"email : "+email);
	var validasi = validateEmail(email,password) && validateUsername(username,password) && validateNamaLengkap(namalengkap) && validatePassword(password,confirm_pass);

	var warning="";
	if (!validateEmail(email,password)) {
		warning=warning + "Pastikan anda memasuki format email yang benar, email tidak boleh sama dengan password <br/>";
	};

	if (!validateUsername(username,password)) {
		warning=warning + "Username Tidak boleh sama dengan password dan memiliki panjang minimal 8 karakter <br/>";
	};

	if (!validateNamaLengkap(namalengkap)) {
		warning=warning + "Nama lengkap harus terdiri dari minimal 2 kata dipisahkan dengan spasi <br/>";	
	};

	if (!validatePassword(password,confirm_pass)) {
		warning = warning + "Password minimal 8 karakter ,Confirm password harus sama dengan password dan tidak boleh sama dengan email / username <br/>";
	};


	var button = document.getElementById("submit_button").disabled=true;
	if (validasi) {
		document.getElementById("submit_button").disabled=false;
	}else{
		document.getElementById("submit_button").disabled=true;
		document.getElementById("warning").innerHTML=warning;
	}

}