<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gemeente</title>

    <!--favicon-->
    <link rel="icon" type="image/jpg" href="./media/logo.jpg">

    <!-- CSS, Bootstrap & normalize -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="css/css.css" rel="stylesheet" type="text/css" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/newStyleFunction.js"></script>
    <script src="js/main.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <nav class="navbar navbar-default">
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
                      <li role='presentation'> <a href='uitleg.php'>Toeristen Informatie</a></li>
                      <li role='presentation'> <a href='afspraakFormulier.php'>Afspraak maken</a></li>
                      </ul>
                      ";
                    break;
                  case "uitleg.php":
                    echo "<li role='presentation'> <a href='index.php'>Home</a></li>
                      <li role='presentation' class='active'> <a href='uitleg.php'>Toeristen Informatie</a></li>
                      <li role='presentation'> <a href='afspraakFormulier.php'>Afspraak maken</a></li>
                      </ul>";
                      break;
                  case "explain.php":
                    echo "<li role='presentation'> <a href='index.php'>Home</a></li>
                      <li role='presentation' class='active'> <a href='uitleg.php'>Toeristen Informatie</a></li>
                      <li role='presentation'> <a href='afspraakFormulier.php'>Afspraak maken</a></li>
                      </ul>";
                      break;
                  case "afspraakFormulier.php":
                    echo "<li role='presentation'> <a href='index.php'>Home</a></li>
                      <li role='presentation'> <a href='uitleg.php'>Toeristen Informatie</a></li>
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
                    default:
                      echo "<li role='presentation'> <a href='index.php'>Home</a></li>
                      <li role='presentation'> <a href='afspraakFormulier.php'>Afspraak maken</a></li>
                      </ul>
                      ";
                }
              //}
            ?>
          </div>
        </div>
      </nav>