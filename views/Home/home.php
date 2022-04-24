
<?php require_once './views/shared/header.php'; ?>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img src="../images/home.jpg" alt="New York" width="1200" height="700">
                  <div class="carousel-caption">
                
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="../images/gallery/2.jpg" alt="Chicago" width="1200" height="700">
                  <div class="carousel-caption">
                     
                  </div>
              </div>

              <div class="carousel-item">
                  <img src="../images/gallery/3.jpg" alt="Los Angeles" width="1200" height="700">
                  <div class="carousel-caption">
                  </div>
              </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
      </div>
 

 

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


<?php require_once './views/shared/footer.php'; ?>