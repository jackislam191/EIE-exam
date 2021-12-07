<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">EIE4432</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php 
        if (isset($_SESSION['username'])) {
            echo "<li class='nav-item'> Hi " . $_SESSION['username'] ."</li>";
            echo "<li class='nav-item'>
            <a class='nav-link' href='profile.php'>profile</a>
                </li>";
            echo "<li class='nav-item'>
            <a class='nav-link' href='signout.php'>Sign Out</a>
                </li>";
        }
        else {
            echo  "<li class='nav-item'>
            <a class='nav-link' href='login.php'>Login</a>
                </li>";
            echo  "<li class='nav-item'>
            <a class='nav-link' href='register.php'>Register</a>
                </li>";
        }
      ?>

    </ul>
    
  </div>
</nav>