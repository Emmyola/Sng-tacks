
<?php include_once('lib/header.php');

if (isset($_SESSION['logged in']) && !empty($_SESSION['logged in'])) {
	//redirect back to dashboard
    header("location: dashboard.php");
}

?>
   <p>
   	<?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])) {
   		echo "<span style='color:green'>" . $_SESSION['message'] . "<span>";
   		session_unset();
   	}?>
   	<h2>Login</h2>
   </p>
   <form method="POST" action="proccesslog.php">
   	<p>
   		
   	<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
   		echo "<span style='color:red'>" . $_SESSION['error'] . "<span>";
   		session_unset();
	   }?>
	   <p>
   		
   	</p>
   	          <p>
			   	<label>Email</label><br />
			   	<input  <?php if(isset($_SESSION['email'])){
			   		echo "value=" . $_SESSION['email'];
			   		}
			   	?>
			   	type="text" name="email" placeholder="Email" >
			  </p>
			  <p>
			   	<label>password</label><br />
			   	<input type="password" name="password" placeholder= "Password" >
			  </p>
			 
		
			   <p><label>
			   	<button type="submit">Login</button>
			</label>
		   </p>
	</form>

<?php include_once('lib/footer.php') ?>
