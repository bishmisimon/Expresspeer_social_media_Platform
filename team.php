<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"The Team | Expresspeer");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
   

        <div class="jumbotron text-white" style="background-image: url('img/team-cover.png')">
            <div class="container">
            <br><br><br><br><br><br><br>     
            <br><br><br><br><br><br><br>     
             
            </div>
        </div>

        
      <div class="container">
        
        <section class="content-section" id="portfolio">
            
          <div class="container">
              
            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind Expresspeer</h3>
              <h2 class="mb-5">The Team</h2>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-3">
                  <a class="portfolio-item" href="_Expresspeer creators/EXP_Poojith.php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Poojith Obeysekara</h2>
                      
                    </span>
                  </span>
                  <img class="img-fluid" src="img/poojith.jpeg" alt="">
                </a>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="col-lg-3">
                <a class="portfolio-item" href="_Expresspeer creators/EXP_Vishaka.php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Vishaka Randunuge</h2>
                      
                    </span>
                  </span>
                    <img class="img-fluid" src="img/vishaka.jpeg" alt="">
                </a>
              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div class="col-lg-3">
                <a class="portfolio-item" href="_Expresspeer creators/EXP_Bishmi.php" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Bishmi Dissanayake</h2>
                     
                    </span>
                  </span>
                  <img class="img-fluid" src="img/bishmi.jpeg" alt="">
                </a>
              </div>
             
            </div>
          </div>
        </section>
          

      </div>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>