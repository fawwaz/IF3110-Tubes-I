function Login(callback,username,password){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			if (ajaxRequest.status === 200) {// successfully
                callback(ajaxRequest.responseText);// we're calling our method
            }
		}
	}
	ajaxRequest.open("POST","ajax/login.php",true);
	ajaxRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	ajaxRequest.send("username="+username+"&password="+password); 
}

function StatusLogin(ajaxresult){
	if (!ajaxresult) {
		// kalau gagal
		alert("failed to login maybe username or password is wrong ");
	};
}

function Do_Login(){
	var username = document.getElementsByName('username')[0].value;
	var password = document.getElementsByName('password')[0].value;
	Login(StatusLogin,username,password);
}