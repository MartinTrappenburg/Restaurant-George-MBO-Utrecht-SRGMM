<!-- <div class="container mt-5">
   <div class="row">
     <div class="col-12 col-sm-6">
       <form action="./index.php?content=activate_script" method="post">
         <input type="time" min="17:00" max="22:00" step="900">
       </form>
     </div>
     <div class="col-12 col-sm-6">
       <img src="./img/perzik.jpg" alt="perzik" class="w-75 mx-auto d-block">
     </div>
   </div>
   </div>-->
<!-- 
   <link rel="stylesheet" href="./css/style.css">
   
   <div id="containerreserver" class="center">
     <div id="res1" class="center">
       <div class="form-outline datepicker">
         <label for="exampleDatepicker1" class="form-label"><h3>Selecteer uw gewenste datum.</h3></label>
         <input type="date" class="form-control" id="exampleDatepicker1">
       </div>
       <br>
       <select class="form-select" aria-label="Default select example">
         <option selected>Selecteer uw gewenste tijd</option>
         <option value="16:00">16:00</option>
         <option value="16:30">16:30</option>
         <option value="17:00">17:00</option>
         <option value="16:00">17:30</option>
         <option value="16:30">18:00</option>
         <option value="17:00">18:30</option>
         <option value="16:00">19:00</option>
         <option value="16:30">19:30</option>
         <option value="17:00">20:00</option>
         <option value="16:00">20:30</option>
         <option value="16:30">21:00</option>
         <option value="17:00">21:30</option>
         <option value="16:30">22:00</option>
       </select>
       <br>
       <br>
       <select class="form-select" aria-label="Default select example">
         <option selected>Selecteer uw gewenste tafel</option>
         <option value="16:00">1</option>
         <option value="16:30">2</option>
         <option value="17:00">3</option>
         <option value="16:00">4</option>
         <option value="16:30">5</option>
         <option value="17:00">6</option>
         <option value="16:00">7</option>
         <option value="16:30">8</option>
         <option value="17:00">9</option>
         <option value="16:00">10</option>
         <option value="16:30">11</option>
         <option value="17:00">12</option>
         <option value="16:30">13</option>
         <option value="16:30">14</option>
       </select>
       <br>
       <br>
       <input type="checkbox" name="agree1" id="" required><p3>  Ik accepteer de privacy overeenkomst</p3></input> <br>
       <input type="checkbox" name="agree2" id="" required><p3>  Ik accepteer de algemene voorwaarden</p3></input><br>
       <input type="checkbox" name="agree3" id=""><p3>  Ik wil de nieuwsbrief ontvangen</p3></input>
       <br>
       <br>
       <button type="button" class="btn btn-dark"><h4>Reserveer!</h4></button>
     </div>
     <div id="res2">
       <br>
       <br>
       <img src="./img/reslayout.png" width="500px">
     </div>
   </div> -->
   <?php
   include("./connect_db.php");
   
   if(isset($_POST['submit'])){
       $table = $_POST['table'];
       $time = $_POST['time'];
       $pers = $_POST['pers'];
       $achternaam = $_POST['achternaam'];
       $day = $_POST['day'];
       $qry = "INSERT INTO `reserveringen` (`id`, `TafelNr`, `Pers`, `Achternaam`, `Tijd`, `Day`) VALUES (NULL, '$table', '$pers', '$achternaam', '$time', '$day')";
   if(mysqli_query($conn, $qry)){
      header("Location: ./index.php?content=message&alert=book-success");
   }else{
      heaDEr("Location: ./index.php?content=message&alert=book-failed");
       }
   }
   ?>
<div id="booking" class="section">
   <div class="section-center">
      <div class="container">
         <div class="row">
            <div class="booking-form">
               <div class="booking-bg"></div>
               <form action="" method="post">
                  <div class="form-header">
                     <h2>Make your reservation</h2>
                  </div>
                  <div class="mb-3">
                     <label for="Achternaam" class="form-label">Surname</label>
                     <input type="text" name='achternaam' require class="form-control" id="achternaam" placeholder="Surname">
                  </div>
                  <div class="mb-3">
                     <label for="Pers"  class="form-label">Amount of people</label>
                     <input type="number" name='pers' require min="0" class="form-control" id="pers" placeholder="Amount">
                  </div>
                  <div class="mb-3">
                     <label for="day"  require class="form-label">Day</label>
                     <input type="date" name='day' class="form-control" id="day" placeholder="Day">
                  </div>
                  <div class="mb-3">
                     <label for="time"  require class="form-label">Time</label>
                     <input type="time" name='time' class="form-control" id="time" placeholder="Time">
                  </div>
                  <div class="form-group">
                     <label for="table" require class="form-label">Table Number</label>
                     <input type="table" name='table' class="form-control" id="table" placeholder="Table">
                     <span class="select-arrow"></span>
                  </div>
                  <!-- <div class="row">
                     <div class="col-md-6">
                     	<div class="form-g  roup">
                     		<label for="day"  require class="form-label">Day</label>
                                             		<input type="date" name='day' class="form-control" id="day" placeholder="Day">
                     	</div>                 
                     </div>
                     <div class="col-md-6">
                     	<div class="form-group">
                     		<label for="time"  require class="form-label">Time</label>
                                            		 	<input type="time" name='time' class="form-control" id="time" placeholder="Time">
                     	</div>
                     </div>
                     </div>
                     <div class="row">
                     <div class="col-md-6">
                     	<div class="form-group">
                     		<label for="table" require class="form-label">Table Number</label>
                                 <input type="table" name='table' class="form-control" id="table" placeholder="Table">
                     		<span class="select-arrow"></span>
                     	</div>
                     </div>
                     </div>
                     <div class="form-group">
                     <label for="Achternaam" class="form-label">Surname</label>
                                             <input type="text" name='achternaam' require class="form-control" id="achternaam" placeholder="Surname">
                     </div>
                     <div class="form-group"> 
                      <label for="Pers"  class="form-label">Amount of people</label>
                                             <input type="number" name='pers' require min="0" class="form-control" id="pers" placeholder="Amount">
                     </div> -->
                  <div class="modal-footer">
                     <input type="submit" class="btn btn-primary" name="submit" value="Save changes" />
                     <a href="index.php?content=reservation"><button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close </button></a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   if(isset($_GET['table'])){
       var_dump($_GET["table"]);
       print('<script>document.getElementById("tableNumber").innerHTML = "'.$_GET["table"] .'"; 
       $(".modal").toggle();
       </script>');
       
   }
   
   
   ?>