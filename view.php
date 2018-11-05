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
<input type="text" name="search" id="search" onkeyup="mySearch()">
<table style="border:2px solid red; width: 100%" id="table">
		<tr>
			<td>id</td>
				<td>Name</td>
					<td>Email</td>
						<td>Password</td>
		</tr>
		<?php
include ("db.php");

$sql="select * from student";
$result=mysqli_query($conn,$sql);
while ($d=$result->fetch_array()){
	?>
		<tr>
			<td><?php echo $d['id'];?></td>
			<td><?php echo $d['name'];?></td>
			<td><?php echo $d['email'];?></td>
			<td><?php echo $d['password'];?></td>>
		</tr>
			<?php
}

?>
	</table>
	<script type="text/javascript">
		
		function mySearch(){

			var input,filter,table,tr,td,i;
			input=document.getElementById('search');
			filter=input.value.toUpperCase();
			table=document.getElementById('table');
			tr=table.getElementsByTagName('tr');
		
			for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
		}
	</script>

