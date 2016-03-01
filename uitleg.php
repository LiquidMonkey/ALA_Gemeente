<?php
  include 'header.php';
  include 'nl.php'
?>
    <a href="explain.php" class="lang nl"></a>
        <section class="container-fluid">
            <div class="row">
                <div class="jumbotron">
                    <h1>
                    <?php echo $title; ?></h1>
                    <p><?php echo $welcomeText ?></p>
                    <hr>
                    <p><?php echo $information ?><a href="mailto:gemeentebourdeaux@gmail.com">gemeentebourdeax@gmail.com</a></p>
                    <p>
                        <a id="verken" class="btn btn-primary btn-lg" role="button"><?php echo $buttonText ?></a>
                    </p>
                </div>
            </div>
        </section>
        <section class="container-fluid hidden">
            <div class="row">
                <div class="col-xs-12 background">
                    <div class="col-xs-12">
                        <img class="img-responsive img-header" src="media/top-things-to-do-bordeaux.jpg">
                    </div>
                    <div class="bigImageFrame col-xs-6">
                        <div class="bigImage">
                            <img src="media/burgundy2.jpg">
                        </div>
                        <div class="bigImageText">
                            <h4>Het grote theater</h4>
                        </div>
                    </div>
                    <div class="bigImageFrame col-xs-6">
                        <div class="bigImage">
                            <img src="media/citeduvin.jpg">
                        </div>
                        <div class="bigImageText">
                            <h4>La Cité du vin <small><a href="http://www.citedescivilisationsduvin.com/accueil.html">Bekijk de site</a></small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include 'footer.php';
        ?>
    </body>
</html>