function check_user(str)
		{
			if(str=="")
			{
				document.getElementById('uname').innerHTML="";
				return;
			}
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById('uname').innerHTML = this.responseText;
				}
			};

			xmlhttp.open("GET","https://api.fixer.io/latest?symbols=USD,GBP",true);
			xmlhttp.send();
		}



function check_email(str)
		{
			if(str=="")
			{
				document.getElementById('email').innerHTML="";
				return;
			}
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById('email').innerHTML=this.responseText;
				}
			};

			xmlhttp.open("GET","checkemail.php?q="+str,true);
			xmlhttp.send();
		}


function check_updated_email(str)
		{
			if(str=="")
			{
				document.getElementById('email').innerHTML="";
				return;
			}
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById('email').innerHTML=this.responseText;
				}
			};

			xmlhttp.open("GET","check_edited_email.php?q="+str,true);
			xmlhttp.send();
		}		

function check_updated_mob(str)
		{
			if(str=="")
			{
				document.getElementById('mob').innerHTML="";
				return;
			}
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
				{
					document.getElementById('mob').innerHTML=this.responseText;
				}
			};

			xmlhttp.open("GET","check_edited_mob.php?q="+str,true);
			xmlhttp.send();
		}		




