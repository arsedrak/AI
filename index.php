<?php include 'header.php';?>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Grayscale</h1>
              <p class="intro-text">A free, responsive, one page Bootstrap theme.
                <br>Created by Start Bootstrap.</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="history" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>History of AI </h2>
				<p>Samuel is most known within the AI community for his groundbreaking work in computer checkers in 1959, and seminal research on machine learning, beginning in 1949 He graduated from MIT and taught at MIT and UIUC from 1946 to 1949. He believed teaching computers to play games was very fruitful for developing tactics appropriate to general problems, and he chose checkers as it is relatively simple though has a depth of strategy. The main driver of the machine was a search tree of the board positions reachable from the current state. Since he had only a very limited amount of available computer memory, Samuel implemented what is now called alpha-beta pruning. Instead of searching each path until it came to the game’s conclusion, Samuel developed a scoring function based on the position of the board at any given time. This function tried to measure the chance of winning for each side at the given posiion. It took into account such things as the number of pieces on each side, the number of kings, and the proximity of pieces to being “kinged”. The program chose its move based on a minimax strategy, meaning it made the move that optimized the value of this function, assuming that the opponent was trying to optimize the value of the same function from its point of view.</p>
				
				<p>Samuel also designed various mechanisms by which his program could become better. In what he called rote learning, the program remembered every position it had already seen, along with the terminal value of the reward function. This technique effectively extended the search depth at each of these positions. Samuel's later programs reevaluated the reward function based on input from professional games. He also had it play thousands of games against itself as another way of learning. With all of this work, Samuel’s program reached a respectable amateur status, and was the first to play any board game at this high a level. He continued to work on checkers until the mid-1970s, at which point his program achieved sufficient skill to challenge a respectable amateur. </p>

				<br>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Xhec39dVGDE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			
			
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <h2>Download Grayscale</h2>
          <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
          <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to leave us a comment on the
              <a href="http://startbootstrap.com/template-overviews/grayscale/">Grayscale template overview page</a>
              on Start Bootstrap to give some feedback about this theme!</p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
