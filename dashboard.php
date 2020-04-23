<?php  
include_once('lib/header.php');

 if (!isset($_SESSION['logged in'])){
     header("location: login.php");
} 

 ?>
 <h3>Dashboard</h3>
<!-- <p>Logged in User ID: <?php echo $_SESSION['']?></p> -->
welcome <?php echo $_SESSION['fullname'] ?>: you
have logged in as (<?php echo $_SESSION['role'] ?>) and your ID is <?php echo $_SESSION['logged in'] ?>.

<?php include_once('lib/footer.php') ?>

