<?php
  include 'header.php';
?>
    <section class="container-fluid">
      <article>
        <div class="row">
          <div class="col-xs-12 col-md-6 carouselContainer">
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
                  <div class="carousel-caption">
                    <!--<h3>Bodeaux</h3>
                    <p>De gemeente Bordeaux verwelkomt u</p>-->
                  </div>
                </div>

                <div class="item">
                  <img src="./media/burgundy.jpg" alt="Place de la bourse, Bordeaux">
                </div>

                <div class="item">
                  <img src="./media/burgundy2.jpg" alt="Place de la bourse, Bordeaux">
                </div>

                <div class="item">
                  <img src="./media/peyBerland.jpg" alt="Cathédrale saint andré, Bordeaux">
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
          <div class="col-md-6 col-xs-12 pull-right">
            <div class="col-md-12 text-left postSection">
              <div class="userPost">
                <div class="userDetails">
                  <h4><p class="userName">Oh_My_Little_Baby_Girl</p> <small>Gepost op 21-3-2016</small></h4>
                </div>
                <div class="userComment">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquet nibh vitae nisl feugiat elementum. Aenean consequat vitae eros nec placerat. Integer non consequat diam, quis elementum est. Mauris vitae lectus a augue consectetur vulputate. Fusce suscipit consectetur dui, commodo fringilla risus condimentum at. Integer turpis nibh, rhoncus in nisi ac, viverra blandit libero. Donec ut mauris felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus mattis augue sit amet ornare ornare. Nam sollicitudin, turpis ac molestie maximus, nunc mauris suscipit quam, ut ultrices velit dolor sed velit. Suspendisse sed elementum lectus. Pellentesque vestibulum nisi enim, vitae fringilla sapien interdum ac.</p>
                  <p>Duis sit amet neque sed massa viverra pulvinar. Cras ultrices tempor risus, sagittis egestas quam venenatis vel. In luctus eu justo in consequat. Suspendisse in feugiat lacus, vitae maximus neque. Etiam non dictum lacus. Nam quis egestas dui. Pellentesque commodo vulputate metus, a pharetra nisl posuere eleifend. Vestibulum laoreet non mauris a laoreet. Morbi imperdiet ultricies sem vel egestas. Nam sed accumsan magna. Nam euismod interdum interdum. Vestibulum fringilla lectus vitae leo pretium, a sagittis enim tristique.</p>
                </div><!--End of Comment-->
              </div><!--End of post-->
              <button id="makeComment" type="submit" class="btn btn-default">Comment</button> 
              <!--====================NOT DONE YET JUST BASE IDEA PROBABLY GONNA MAKE IT A TEXTAREA================-->
              <div class="hidden col-md-12">
                <form class="form-horizontal" role="form" method="post" action="postComment.php">
                  <div class="form-group">
                    <label for="FirstName" class="col-sm-2 control-label">Comment</label>
                    <div class="col-sm-8 col-sm-2-pull">
                        <input required type="text" name="FirstName" id="FirstName" class="form-control">
                        <input type="submit">
                    </div>
                </div>
                </form>
              </div>
            </div><!--End of commentsection-->
          </div>
        </div><!--End of row-->
      </article>

<!--======================= Afspraak maken =======================-->    

      <article class="col-xs-12">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
          <div class="relativePositioner"></div>
          <a class="afspraakButton btn" href="afspraakFormulier.php">Afspraak maken</a>
        </div>
        <div class="col-xs-2"></div>
      </article>

<!--======================= Vragen section =======================-->

      <article class="col-xs-12">
        <div class="col-xs-12 text-center">
          <div class="col-xs-6 vraag">
            <ul>
              <li>Hoe maak ik een afspraak?</li>
            </ul>
          </div>
          <div class="col-xs-6 antwoord">
            <ul>
              <li>Klik op de knop "afspraak maken" die zich hierboven bevind</li>
            </ul>
          </div>
        </div>
      </article>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>