<?php
$active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-none"> <style>.navbar { font-family:'Times New Roman', Times, serif !important; }</style>
  <a class="navbar-brand ms-auto" href="./index.php?content=home"> RESTAURANT GEORGE </a>
  <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
        if (isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item '; echo (in_array($active, ["a-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=a-home">HOME <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'root':
              echo '<li class="nav-item '; echo (in_array($active, ["r-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=r-home">HOME <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'customer':
              echo '<li class="nav-item '; echo (in_array($active, ["c-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=c-home">HOME <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            case 'moderator':
              echo '<li class="nav-item '; echo (in_array($active, ["m-home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=m-home">HOME <span class="sr-only">(current)</span></a>
                    </li>';
            break;
            default:
              echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=home"> HOME <span class="sr-only">(current)</span></a>
                    </li>';
            break;

          }
        } else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""])) ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=home">HOME <span class="sr-only">(current)</span></a>
                </li>';
        }
      ?> 
      <li class="nav-item <?php echo ($active == "reserveren") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=reserveren">RESERVEREN</a>
      </li>
      <li class="nav-item <?php echo ($active == "reserveren") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=coronabeleid">CORONABELEID</a>
      </li>
      <li class="nav-item <?php echo ($active == "reserveren") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=about-us">OVER ONS</a>
      </li>
      <li class="nav-item <?php echo ($active == "smoothies") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=bookeventpage">BOOKEVENT</a>
      </li>
      <li class="nav-item <?php echo ($active == "smoothies") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=carreerpage">CARREER</a>
      </li>
      <li class="nav-item <?php echo ($active == "smoothies") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=recensies">RECENSIES</a>
      </li>
      <li class="nav-item <?php echo ($active == "smoothies") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=contactpage">CONTACT</a>
      </li>
      <li class="nav-item <?php echo ($active == "smoothies") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=menu">MENU</a>
      </li>
      <li class="nav-item <?php echo ($active == "recensie") ? "active" : "" ?>">
        <a class="nav-link" href="./index.php?content=rescensie">RECENSIE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["sleep", "nutrition", "exercise"])) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          OVER ONS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item <?php echo ($active == "sleep") ? "active" : "" ?>" href="./index.php?content=contactpage">contact</a>
          <a class="dropdown-item <?php echo ($active == "nutrition") ? "active" : "" ?>" href="./index.php?content=nutrition">achtergrond</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php 
        if (isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["a-users", "a-reset_password"])) ? "active" : ""; echo '" href="#" id="navbarDropdownMenuLinkRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        admin workbench
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                        <a class="dropdown-item '; echo ($active == "a-users") ? "active" : ""; echo '" href="./index.php?content=a-users">users</a>
                        <a class="dropdown-item '; echo ($active == "a-reset_password") ? "active" : ""; echo '" href="./index.php?content=a-reset_password">reset password</a>
                      </div>
                    </li>';
            break;
            case 'root':
              echo '<li class="nav-item '; echo ($active == "r-rootpage") ? "active" : ""; echo '">
                      <a class="nav-link" href="./index.php?content=r-rootpage">rootpage</a>
                    </li>';

            break;
            case 'moderator':
              // Maak hier de hyperlinks voor de gebruikersrol moderator

            break;
            case 'customer':
              // Maak hier de hyperlinks voor de gebruikersrol customer

            break;
            default:
            break;
          }
          echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=logout">UITLOGGEN</a>
                </li>';
        } else {
          echo '<li class="nav-item '; echo ($active == "register")? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=register">REGISTREER</a>
                </li>
                <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                  <a class="nav-link" href="./index.php?content=login">INLOGGEN</a>
                </li>';
        }
      ?>    
    </ul>
  </div>
</nav>