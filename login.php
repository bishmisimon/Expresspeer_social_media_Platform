<?php

    session_start();
    define('TITLE',"Expresspeer"); 
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
    
  
?>  
    </head>
    
    <body>

   

    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
    </script>
    
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Expresspeer Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

                    <?php
                    
                        if(isset($_GET['error']))
                        {
                            if($_GET['error'] == 'emptyfields')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Fill In All The Fields
                                      </div>';
                            }
                            else if($_GET['error'] == 'nouser')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Username does not exist
                                      </div>';
                            }
                            else if ($_GET['error'] == 'wrongpwd')
                            {;
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Wrong password - 
                                         <a href="reset-pwd.php" class="alert-link">Forgot Password?</a>
                                      </div>';
                            }
                            else if ($_GET['error'] == 'sqlerror')
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Website error. Contact admin to have it fixed
                                      </div>';
                            }
                            
                        }
                        else if(isset($_GET['newpwd']))
                        {
                            if($_GET['newpwd'] == 'passwordupdated')
                            {
                                echo '<div class="alert alert-success" role="alert">
                                        <strong>Password Updated </strong>Login with your new password
                                      </div>';
                            }
                        }
                    ?>
                    <form method="post" action="includes/login.inc.php" class="form-inline justify-content-center">
                    <h2 class="title">Sign in</h2>
                        
                                   
            <div class="input-field">
            <i class="fas fa-user"></i>
            <label class="sr-only">Name</label>
                            <input type="text" id="name" name="mailuid" class="form-control form-control-lg mr-1" placeholder="Username">
            </div>
                        

            <div class="input-field">
            <i class="fas fa-lock"></i>
            <label class="sr-only">Email</label>
                        <input type="password" id="password" name="pwd"  class="form-control form-control-lg mr-1" placeholder="Password">
            </div>

                        <input type="submit" class="btn btn-dark btn-lg mr-1" name="login-submit" value="Login">
                        <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/login/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/login" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://accounts.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/login" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="https://www.github.com/login" class="social-icon">
                <i class="fab fa-github"></i>
              </a>
            </div>
                    </form>
                   
                    
                    
                </div>
                <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New to Expresspeer ?</h3>
            <p>
              Excited to learn, explore and share your knowledge with a global community ? Join now to interact with professionals in any field !
            </p>
            
            <button onclick="document.location='signup.php'" class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="signimg/login.svg" class="image" alt="" />
        </div>
      
      </div>
            </div>
        </div>
    </section>

        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
    <link rel="shortcut icon" href="img/favicon.png" />
</html>