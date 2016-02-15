<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gemeente</title>

    <!--favicon-->
    <link rel="shortcut icon" type="image/jpg" href="./media/logo.jpg">

    <!-- CSS, Bootstrap & normalize -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/flaticon.css" rel="stylesheet" type="text/css">
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
            <a class="navbar-brand" href="index.php"><span class="logo-img"></span><span class="logo-text">Gemeente Bordeaux</span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
            $currentPage = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $currentPage = preg_split("/\//", $currentPage);
            $currentPage = array_pop($currentPage);
          ?>
            <ul class="nav navbar-nav">
            <?php
              //if($currentPage != "beheer.php"){
                switch($currentPage){
                  case "":
                  case "index.php":
                    echo "<li role='presentation' class='active'> <a href='index.php'>Home</a></li>
                      <li role='presentation'> <a href='afspraakFormulier.php'>Afspraak maken</a></li>
                      </ul>
                      ";
                    break;
                  case "afspraakFormulier.php":
                    echo "<li role='presentation'> <a href='index.php'>Home</a></li>
                      <li role='presentation' class='active'> <a href='afspraakFormulier.php'>Afspraak maken</a></li></ul>
                      ";
                    break;
                  case 'beheer.php':
                    echo "<li class='active'><h4><i>Beheerderspagina</i></h4></li>
                    <li role='presentation'> <a href='index.php'>Home</a></li>
                      <li role='presentation'> <a href='informatie.php'>Informatie</a></li>
                      <li role='presentation'> <a href='afspraakFormulier.php'>Afspraak maken</a></li>
                      <li role='presentation'> <a href='informatie.php'>Database readout</a></li>
                      <li role='presentation'> <a href='aanmelden.php'>Maak nieuwe gebruiker aan</a></li>
                      </ul>
                      ";
                    break;
                }
              //}
            ?>
            <ul class='nav navbar-nav navbar-right'>
              <li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown'><b>Login</b> <span class='caret'></span></a>
                <ul id='login-dp' class='dropdown-menu'>
                  <li>
                    <div class='row'>
                      <div class='col-md-12'>
                        <?php
                          ini_set('display_errors', 1); // 0 = uit, 1 = aan
                          error_reporting(E_ALL);
                          session_start();
                                  
                          if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            if (isset($_POST['usernameLogin']) && trim($_POST['usernameLogin']) != '' && isset($_POST['passwordLogin']) && trim($_POST['passwordLogin']) != ''){
                                try{
                                  //initialisatie
                                  $maxAttempts = 3; //pogingen binnen aantal minuten (zie volgende)
                                  $attemptsTime = 5; //tijd waarin pogingen gedaan mogen worden (in minuten, wil je dat in seconden e.d. met je de query aanpassen)
                                                      
                                  //verbinding maken met database
                                  include_once('php/configDB.php');
                                                      
                                  //ophalen gebruikersinformatie, testen of wachtwoord en gebruikersnaam overeenkomen
                                  $checkUsers = 
                                    'SELECT 
                                      `user_id`
                                    FROM
                                      `users` 
                                    WHERE
                                      username = :username
                                    AND
                                      password = :password';

                                    $userStmt = $db->prepare($checkUsers);
                                    $userStmt->execute(array(
                                        ':username' => $_POST['usernameLogin'],
                                        ':password' => hash('sha256', $_POST['usernameLogin']. $_POST['passwordLogin'])
                                      ));
                                    $user = $userStmt->fetchAll();
                                                      
                                    //ophalen inlogpogingen, alleen laatste vijf minuten
                                    $checkTries =
                                      'SELECT
                                        `username`
                                      FROM
                                        `loginfail`
                                      WHERE
                                        DateAndTime >= NOW() - INTERVAL :attemptsTime MINUTE
                                      AND
                                        username = :username    
                                      GROUP BY
                                        username, IP
                                      HAVING
                                          (COUNT(username) = :maxAttempts)';
                                              
                                    $triesStmt = $db->prepare($checkTries);
                                    $triesStmt->execute(array(
                                        ':username' => $_POST['usernameLogin'],
                                        ':attemptsTime' => $attemptsTime,
                                        ':maxAttempts' => $maxAttempts
                                      ));
                                    $tries = $triesStmt->fetchAll();
                                                     
                                    if (count($user) == 1 && count($tries) == 0){
                                      $_SESSION['user'] = array('user_id' => $user[0]['user_id'], 'IP' => $_SERVER['REMOTE_ADDR']);
                                        //pagina waar naartoe nadat er succesvol is ingelogd
                                        header('Location: beheer.php');
                                          die;
                                        } else {
                                          $insertTry = 
                                            'INSERT INTO
                                              loginfail
                                              (username, 
                                                    IP,
                                                    dateAndTime)
                                            VALUES
                                              (:username,
                                              :IP,
                                              NOW())';
                                          $insertStmt = $db->prepare($insertTry);
                                          $insertStmt->execute(array(
                                              ':username' => $_POST['usernameLogin'],
                                              ':IP' => $_SERVER['REMOTE_ADDR']
                                            ));

                                            if(count($tries) > 0){
                                                  $message = 'You have too many times tried the wrong username/password. Please wait a few minutes to login';
                                                } else {
                                                  $message = 'Invalid username/password. Please try again';
                                                }
                                              }
                                          } catch (PDOException $e) {
                                            $message = $e->getMessage();
                                          }

                                          $db = NULL;
                                        } else {
                                          $message = 'please fill in all required information';
                                        }
                                      }
                                    ?>
                                    <form class='form' role='form' method='post' action='index.php' accept-charset='UTF-8' id='login-nav'>
                                       <div class='form-group'>
                                          <label class='sr-only' for='usernameLogin'>Username</label>
                                          <input type='text' class='form-control' id='usernameLogin' name='usernameLogin' placeholder='Username' required>
                                       </div>
                                       <div class='form-group'>
                                          <label class='sr-only' for='passwordLogin'>Password</label>
                                          <input type='password' class='form-control' id='passwordLogin' name='passwordLogin' placeholder='Password' required>
                                          <div class='help-block text-right'><a href=''>Forgot your password ?</a></div>
                                      </div>
                                      <div class='form-group'>
                                        <button type='submit' class='btn btn-primary btn-block'>Sign in</button>
                                      </div>
                                      <div class='checkbox'>
                                      <label>
                                        <input type='checkbox'> keep me logged-in
                                      </label>
                                      </div>
                                    </form>
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