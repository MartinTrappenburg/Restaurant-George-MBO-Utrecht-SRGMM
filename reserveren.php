<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">
      <form action="./index.php?content=activate_script" method="post">
        <div class="form-group">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["sleep", "nutrition", "exercise"])) ? "active" : "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          health education
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" >sleep</a>
          <a class="dropdown-item" >nutrition</a>
          <a class="dropdown-items" >exercise</a>
        </div>
      </li>
        <button type="submit" class="btn btn-success btn-lg btn-block">Activeer</button>
      </form>
    </div>
    <div class="col-12 col-sm-6">
      <img src="./img/perzik.jpg" alt="perzik" class="w-75 mx-auto d-block">
    </div>
  </div>
</div>