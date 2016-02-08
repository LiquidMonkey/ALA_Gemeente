<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gemeente</title>

    <!-- Bootstrap -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/css.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--======================================== beginning of nav =======================================-->
    <nav class="navbar navbar-default navbar" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Gemeente Bordeaux</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li role="presentation"> <a href="index.html">Home</a> </li>
                <li role="presentation"> <a href="informatie.php">Informatie</a> </li>
                <li role="presentation" class="active"> <a href="aanmelden.php">aanmelden</a> </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><p class="navbar-text">Already have an account?</p></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                  <ul id="login-dp" class="dropdown-menu">
                    <li>
                       <div class="row">
                          <div class="col-md-12">
                            Login via
                            <div class="social-buttons">
                              <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                              <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                            </div>
                                            or
                             <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                <div class="form-group">
                                   <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                   <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                </div>
                                <div class="form-group">
                                   <label class="sr-only" for="exampleInputPassword2">Password</label>
                                   <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                   <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                </div>
                                <div class="form-group">
                                   <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                                <div class="checkbox">
                                   <label>
                                   <input type="checkbox"> keep me logged-in
                                   </label>
                                </div>
                             </form>
                          </div>
                          <div class="bottom text-center">
                            <span>New here?</span> <a href="#"><b>Join Us</b></a>
                          </div>
                       </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
        <!--========================================== End of nav ========================================-->

        <section class="container-fluid col-md-12">
            <form class="form-horizontal" method="post" action="addUser.php"><!--on submit run addUser.php (which adds a user)-->
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
                        <input required type="text" name="Number" id="Number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Mail" class="col-sm-2 control-label">E-mail:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="Mail" id="Mail" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="password" name="Password" id="Password" class="form-control">
                    </div>
                </div>
                <div class="col-sm-9">
                    
                </div>
                <div class="col-sm-3 col-sm-9-push">
                    <button type="submit" class="btn btn-default">Zend</button>
                </div>
                
            </form>
        </section>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>