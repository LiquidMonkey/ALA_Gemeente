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
                                        ':password' => hash('sha256', $_POST['usernameLogin'] . $_POST['passwordLogin'])
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