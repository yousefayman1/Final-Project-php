<?php  
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Trimuph</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Book now
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/start/customers/reserve.php"> Reserve Room </a>
          <?php if (isset($_SESSION['admin'])){ ?>
          <a class="dropdown-item" href="/start/customers/list.php"> Your Reservation</a>
          <?php } ?>
      </li>
      <?php if (isset($_SESSION['admin'])): ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Admins</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/start/managers/addAdm.php"> Add Admin </a>
          <a class="dropdown-item" href="/start/managers/listAdm.php"> List Admins </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button name="logout" class="btn btn-danger">LogOut</button>
      <?php else : ?>
    </form>
      <a href="/start/admin/login.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">login</a>
     <?php endif; ?>
    
  </div>
</nav>