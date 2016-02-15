<?php
  include 'header.php';
?>
        <section class="formBackground container-fluid col-md-12">
            <form class="form form-horizontal" method="post" action="afspraakNaarDB.php" autocomplete="on"><!--on submit run addUser.php (which adds a user)-->
                <div class="form-group">
                    <label for="FirstName" class="col-sm-2 control-label">Voornaam:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="FirstName" id="FirstName" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="MiddleName" class="col-sm-2 control-label">Tussenvoegsel:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input type="text" name="MiddleName" id="MiddleName" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="LastName" class="col-sm-2 control-label">Achternaam:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="LastName" id="LastName" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="datumAfspraak" class="col-xs-2 control-label">Datum:</label>
                    <div class="col-xs-3">
                        <input required type="date" value="<?php 
                          $getdate = getdate();
                          $dateString = "";
                          $day = $getdate['wday'];
                          $month = $getdate['mon'];
                          if( $day < 10){
                            $dayString = "0".$day;
                          } else {
                            $dayString = $day;
                          }
                          if( $month < 10){
                            $monthString = "0".$month;
                          } else {
                            $monthString = $month;
                          }

                          $dateString = $getdate['year']."-".$monthString."-".$dayString;
                          echo  $dateString;
                        ?>" name="datumAfspraak" id="datumAfspraak" class="form-control">
                    </div>
                    <label for="tijdAfspraakUur" class="col-xs-1 control-label">Tijd:</label>
                    <div class="col-xs-5">
                      <select name="tijdAfspraakUur" id="tijdAfspraakUur" class="col-xs-1 form-control time">
                      <?php
                      $openingsTijd;
                      $sluitingsTijd;
                      switch($day){
                        //sunday
                        case 0:
                          $openingsTijd = '9';
                          $sluitingsTijd = 13;
                          break;
                        default:
                          $openingsTijd = '7';
                          $sluitingsTijd = 18;
                      }

                      for($i = $openingsTijd; $i < $sluitingsTijd; $i++){
                        if($i < 10){
                          $tijdNotatie = '0'.$i;
                        } else {
                          $tijdNotatie = $i;
                        }
                       echo "<option value='".$tijdNotatie."'>".$tijdNotatie."</option>";
                      }
                      ?>
                      </select>
                      <span class="col-xs-1 devider">:</span>
                      <select name="tijdAfspraakMin" id="tijdAfspraakMin" class="col-xs-1 form-control time">
                        <option value="00">00</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Street" class="col-sm-2 control-label">Straat:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="Street" id="Street" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="SNumber" class="col-sm-2 control-label">Huisnummer:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="SNumber" id="SNumber" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Postal" class="col-sm-2 control-label">Postcode:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="Postal" id="Postal" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="City" class="col-sm-2 control-label">Plaats:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="City" id="City" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Number" class="col-sm-2 control-label">Tel. Nr.:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="tel" name="Number" id="Number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Mail" class="col-sm-2 control-label">E-mail:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="Mail" id="Mail" class="form-control">
                    </div>
                </div>
                <div class="col-sm-9">
                    
                </div>
                <div class="col-sm-3 col-sm-9-push">
                    <button type="submit" name="post" class="btn btn-default">Zend</button>
                </div>
                
            </form>
        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>