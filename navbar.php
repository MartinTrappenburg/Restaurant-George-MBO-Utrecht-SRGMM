<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-none"> <style>.navbar { font-family:'Times New Roman', Times, serif !important; }</style>
<?php
    if(isset($_SESSION["email"])) {
        switch ($_SESSION["userrole"]) {
            case 'docent': echo '<a class="navbar-brand" style="padding-left: 10px" href="./index.php?content=d-home">
              <h1><b style="font-size: 18px; padding-right: 0px">GEORGE</b></h1>
                </a>';
            break;

            case 'eigenaar': echo '<a class="navbar-brand" style="padding-left: 10px" href="./index.php?content=e-home">
              <h1><b style="font-size: 18px; padding-right: 0px">GEORGE</b></h1>
                </a>';
            break;

            case 'student': echo '<a class="navbar-brand" style="padding-left: 10px" href="./index.php?content=s-home">
              <h1><b style="font-size: 18px; padding-right: 0px">GEORGE</b></h1>
                </a>';
            break;

            case 'begeleider': echo '<a class="navbar-brand" style="padding-left: 10px" href="./index.php?content=b-home">
              <h1><b style="font-size: 18px; padding-right: 0px">GEORGE</b></h1>
                </a>';
            break;
            case 'klant': echo '<a class="navbar-brand" style="padding-left: 10px" href="./index.php?content=k-home">
              <h1><b style="font-size: 18px; padding-right: 0px">GEORGE</b></h1>
                </a>';
            break;
        }
    } else {
        echo '<a class="navbar-brand" style="padding-left: 10px" href="./index.php?content=home">
              <h1><b style="font-size: 18px; padding-right: 0px">GEORGE</b></h1>
                </a>';
    }
?>
  <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item nav_padding">
                    <a class="nav-link" href="./index.php?content=reservation" >RESERVATION</a>
                </li>
      <li class="nav-item <?php echo ($active == "coronabeleid") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=coronabeleid">CORONABELEID</a>
      </li>
      <li class="nav-item <?php echo ($active == "overons") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=about-us">OVER ONS</a>
      </li>
      <li class="nav-item <?php echo ($active == "bookevent") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=bookeventpage">BOOKEVENT</a>
      </li>
      <li class="nav-item <?php echo ($active == "carreer") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=carreerpage">CARREER</a>
      </li>
      <li class="nav-item <?php echo ($active == "contact") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=contactpage">CONTACT</a>
      </li>
      <li class="nav-item <?php echo ($active == "menu") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=menu">MENU</a>
      </li>
      <?php
      if (isset($_SESSION["email"])){
          echo '<li class="nav-item nav_padding">
          <a class="nav-link" href="./index.php?content=logout">LOGOUT</a>
      </li>';
      } else {
          echo '<li class="nav-item nav_padding">
          <a class="nav-link" href="index.php?content=login">LOGIN</a>
      </li>';
      }
      ?>
    </ul>
  </div>
</nav>