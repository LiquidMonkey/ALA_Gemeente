<?php
  include 'header.php';
?>
        <section class="formBackground container-fluid col-md-12">
          <h2>Maak een nieuw beheerders account aan</h2>
            <form class="form form-horizontal" method="post" action="addUser.php" autocomplete="on"><!--on submit run addUser.php (which adds a user)-->
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
                    <label for="DOB" class="col-sm-2 control-label">Geboortedatum:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="date" name="DOB" id="DOB" class="form-control">
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
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="username" id="username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="password" name="Password" id="Password" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-9">
                    <button type="submit" name="post" class="btn btn-default">Zend</button>
                </div>
                
            </form>
        </section>

        <?php
            include 'footer.php';
        ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>