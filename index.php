<?php 
  include 'header.php';
?>
    <section class="container-fluid">
        <div class="row">
          <div class="carouselContainer">
            <div id="homeSlider" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                <li data-target="#homeSlider" data-slide-to="1"></li>
                <li data-target="#homeSlider" data-slide-to="2"></li>
                <li data-target="#homeSlider" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">

                <div class="item active">
                  <img src="./media/logo.jpg" alt="Bordeaux">
                </div>

                <div class="item">
                  <img src="./media/burgundy.jpg" alt="Place de la bourse, Bordeaux">
                </div>

                <div class="item">
                  <img src="./media/peyBerland.jpg" alt="Cathédrale saint andré, Bordeaux">
                </div>

                <div class="item">
                  <img src="./media/burgundy2.jpg" alt="Place de la bourse, Bordeaux">
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-xs-0 col-md-12 heightBond">
            <article class="col-md-6 col-xs-12">
              <div class="col-md-12 text-left postSection">
                <div class="userPost">
                  <div class="userDetails">
                    <h4><span class="userName">Gemeente bordeaux</span> <small>Gepost op 21-3-2016</small></h4>
                  </div>
                  <div class="userComment">
                    <p>Vandaag is er een nieuwe wet ingesteld voor het maken van een afspraak bij de gemeente. U moet vanaf nu aangeven waarvoor de afspraak is, tijdens het maken van de afspraak (dit kan ook op deze website).</p>
                  </div><!--End of Comment-->
                </div><!--End of post--> 
              </div><!--End of commentsection-->
            </article>
 
          <article class="col-xs-12 col-md-6 informatiePaginas">
            <div class=" col-xs-12">
              <a class="btn btn-default" href="afspraakFormulier.php">Afspraak maken</a>
            </div>
            <div class="col-md-12 col-xs-12">
              <a class="btn btn-default" href="uitleg.php">Toeristen pagina</a>
            </div>
          </article>
        </div>
      </div><!--End of row-->
    </section>

    <?php
      include_once('footer.php');
    ?>
  </body>
</html>