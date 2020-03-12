<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rutvik Dholakiya</title>
    <link rel="icon" href="images/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  

  <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
    <div class="site-logo">
      <a href="index.html">RUTVIK <br>DHOLAKIYA</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="photos.html">Friendzone</a></li>
        <li><a href="bio.html">Bio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="https://www.facebook.com/Mr.Rutvik.Dholakiya.42"><span class="icon-facebook"></span></a></li>
        <li><a href="https://www.snapchat.com/add/royal_ruts"><span class="icon-snapchat"></span></a></li>
        <li><a href="https://www.instagram.com/royal_rut.s_official/"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </header> 
  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row justify-content-center">
        
        <div class="col-md-6 pt-4"  data-aos="fade-up">
          <h2 class="text-white mb-4">Contact Me</h2>

          <div class="row">
            <div class="col-md-12">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit. Ipsa explicabo quasi cum, laudantium neque at veniam itaque atque <a href="#">necessitatibus</a> temporibus! Beatae sit soluta magni neque autem, suscipit dolorem, quo alias.</p>
              

              <div class="row">
                <div class="col-md-12">

                  

                 <form name="sentMessage" method="post">
                    
                    

                    <div class="row form-group">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label class="text-white" for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control">
                      </div>
                      <div class="col-md-6">
                        <label class="text-white" for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="email">Email</label> 
                        <input type="email" name="email" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group">
                      
                      <div class="col-md-12">
                        <label class="text-white" for="subject">Subject</label> 
                        <input type="subject" name="subject" id="subject" class="form-control">
                      </div>
                    </div>

                    <div class="row form-group mb-5">
                      <div class="col-md-12">
                        <label class="text-white" for="message">Message</label> 
                        <textarea type="msg" name="msg" id="msg" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12">
                       
                         <button type="submit" name="sub" class="btn btn-primary btn-md text-white">Contact Me</button>
                      </div>
                    </div>

        
                  </form>
                   <?php
				                if(isset($_POST['sub']))
				            {
					            $fname =$_POST['fname'];
                                $lname = $_POST['lname'];
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $msg = $_POST['msg'];
					            $sql = "INSERT INTO contact(fname, lname, email, subject, msg) VALUES ('$fname','$lname','$email','$subject','$msg')" ;
					
					
					            if(mysqli_query($con,$sql))
					            echo" ";
					
				            }
				        ?>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        &copy;<script>document.write(new Date().getFullYear());</script> | Made <i class="icon-heart" aria-hidden="true"></i> by <a target="_blank" >Rutvik Dholakiya</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
        </div>
      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
