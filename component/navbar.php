<?php
session_start();



?>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/RapidX.png" alt="">
        <!-- <h1 class="sitename">Logis</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home<br></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <?php
          if(isset($_SESSION['status'])){
            // var_dump($_SESSION['status']);
          if($_SESSION['status']=='0' || $_SESSION['status']=='2' ){
          
          
          ?>
          <li><a href="add.php">Add Courier/Agent</a></li>
          <!-- <li><a href="services.html"></a></li> -->


            <?php
            
          }}else{
            
            ?>
          <?php
          }
          
          ?>




<?php
if(isset($_SESSION['status'])){
  if($_SESSION['status']=='0'){



?>
          <li><a href="../../Logis/sample/dashboard.php">Dashboard</a></li>


          <?php
            }
          }
          
          
          ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
<?php
if(!isset($_SESSION['status'])){

?>
      <a class="btn-getstarted" href="login.php">Login/Signup</a>
<?php
}else{
  ?>

<a class="btn-getstarted" href="logout.php">Logout</a>

<?php
}
?>
    </div>
  </header>