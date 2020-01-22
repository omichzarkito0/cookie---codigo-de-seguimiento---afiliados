<button onclick="checkCookie();">Probar cookie</button>
<button onclick="deleteCookie()">Eliminar Cookie</button>

<script type="text/javascript">

	function deleteCookie(){
		document.cookie = "affiliate=;expires=;path=/;";
	}

	function setCookie(cname, cvalue, exdays){
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires=" + d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname){
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i < ca.length; i++){
			var c = ca[i];
			while(c.charAt(0) == ' '){
				c = c.substring(1);
			}
			if(c.indexOf(name) == 0){
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}

	function checkCookie(){
		var affiliate = getCookie("affiliate");
		if(affiliate != ""){
			alert("tu cookie es: " + affiliate);
		}else{
			affiliate = prompt("por favor ingresa tu nombre", "");
				setCookie("affiliate", affiliate, 365);
		}
	}

</script>