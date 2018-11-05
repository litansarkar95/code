<!DOCTYPE html>
<html>
<head>
	<title>This is final</title>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="signin.php">Sign in</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="view.php">Search</a></li>
				<li><a href="index.php">contact</a></li>
			</ul>
		</nav>

	</header>
	<section>
		
			<form  name="sform"   action="insert.php" method="post"  onsubmit="return formvali()">

			<label>Name</label><br>
			<input type="text" name="fname" placeholder="Enter Name" ><br><p id="name" style="color: red;"></p>
			<label>Email</label><br>
			<input type="text" name="email" placeholder="Enter Email" ><br><p id="email" style="color: red;"></p>
			<label>Password</label><br>
			<input type="password" name="pass" placeholder="Enter Password" ><br><p id="pass" style="color: red;"></p>
			
			<input type="submit" name="submit" value="Submit" id="submit"><br>
		</form>
	</section>
<script type="text/javascript">
	
	function formvali(){
		var name=document.sform.fname.value;
		var email=document.sform.email.value;
		
		if(name=="" || name==null){
			document.getElementById('name').innerHTML="please name";
			return false;
		}
	if(email=="" || email==null){
			document.getElementById('email').innerHTML="please email";
			return false;
		}
		
	
	}
</script>
</body>
</html>