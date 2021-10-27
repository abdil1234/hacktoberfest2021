<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script>
			function showHint(str) 
			{
				if (str.length == 0) 
				{ 
					document.getElementById("txtHint").innerHTML = "";
					return;
				} 
				else 
				{
					// XMLHttpRequest is used to exchange data with web server behind the scene
					var xmlhttp = new XMLHttpRequest();
					
					// onreadystatechange is called when ready state property changes
					xmlhttp.onreadystatechange = function() 
					{
						/* readystate holds the status of xmlhttprequest
							0 - request not initialize
							1 - server connection established
							2 - request rec
							3 - processing request
							4 - request finish & response ready
							
						*/
						/*
							status: return status number of request
							200 - OK
							403 - Forbidden
							404 - Not Found
						*/
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
						{
							// responseText: return response data as a string
							document.getElementById("txtHint").innerHTML = 	xmlhttp.responseText;
						}
					};
					// open(method, URL, async, username, pwd)
					xmlhttp.open("GET", "gethint.php?q=" + str, true);
					xmlhttp.send();
				}
			}
		</script>
	</head>
	<body style="margin-top:5%;font-size:15pt">
		<p><b>Start typing a name in the input field below : </b></p>
		<form> 
			First Name : <input type="text" onkeyup="showHint(this.value)">
		</form>
		<p>Suggestions : <span id="txtHint"></span></p>
	</body>
</html>

