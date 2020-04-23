<?php 
include_once('lib/header.php'); 


 if(isset($_GET['token']) && !empty($_SESSION['token'])) {
	echo "<span style='color:red'>" . $_SESSION['error'] . "<span>";
	session_unset();
}
?>
<h3>Reset Password</h3>
 <p><h4>Reset password assciated with your account: [email]?</h4></p>

  <form method="POST"  action="proccessreset.php">
  <p>	
   	<?php if(isset($_SESSION['error']) && !empty($_SESSION['error'])) {
   		$_SESSION["error"] = "you are not autherized on this page:";
           header("location: login.php");
	   }?>
	    
   </p>
     
  	<p>
	  <label>Email</label><br />
		<input readolny <?php if(isset($_SESSION['email'])){
			   		echo "value=" . $_SESSION['email'];
			   		}
			   	?> type="text" name="email" placeholder="Email" >
   </p>
          
    <p>
		<label>Enter New password</label><br />
		<input type="password" name="password" placeholder= "Password" >
	 </p>
  <p>
	<button type="submit">Reset password</button>		
  </p>
  </form>

<?php include_once('lib/footer.php') ?>
 