<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Kit-Kat  </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    
    <nav class="navbar navbar-expand-md navbar-light bg-light text-dark fixed-top" aria-label="Fourth navbar example" style="font-size: 1.2em; font-weight: 700;">
              <div class="container">
                <a class="navbar-brand" href="#">DM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse ms-md-5 ps-md-5 " id="navbarsExample04">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <li class="nav-item">
                      <a class="nav-link active " aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active " aria-current="page" href="#services">Services</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Tools</a>
                      <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Sea level</a></li>
                        <li><a class="dropdown-item" href="#">Temperature</a></li>
                        <li><a class="dropdown-item" href="#">Humidity</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#about_us">About Us</a>
                    </li>
                    
                    <?php
                    if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) ){
                    
                    }
                    else{
                  ?>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#Contact_us">Contact Us</a>
                    </li>
                    <?php } ?>

                  </ul>
                  <div class="me-md-3" >
                  <?php
                    if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) ){
                    
                    echo 'Welcome'.'  '.$_SESSION['name'];
                    }
                    else{
                  ?>
                    <div class="nav-item"><button type="button" class="btn btn-outline-primary " onclick="window.location.href = 'donate.php' ">Donate</button></div>
                    <?php } ?>
                  </div>
                  <div class="memd3
                  ">
                  <?php
     if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) ){
      ?>
      <div class="nav-item"><button type="button" class="btn btn-outline-warning " onclick="window.location.href = 'logout.php' " >Log-out</button></div>
      <?php
    }
    else{
   ?>
                    <div class="nav-item"><button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#myModal">Log-in</button></div>
                  </div>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> 
                   <?php } ?>
                 
                </div>
              </div>
              </div>
</nav>
<!--Image Slider-->
              <div class="container" >
                <a class="navbar-brand" href="index.php">DM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse ms-md-5 ps-md-5 " id="navbarsExample04">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <li class="nav-item">
                      <a class="nav-link active ms-md-5 ps-md-5" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active " aria-current="page" href="#services">Services</a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Tools</a>
                      <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Sea level</a></li>
                        <li><a class="dropdown-item" href="#">Temperature</a></li>
                        <li><a class="dropdown-item" href="#">Humidity</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#collaboration">Collaborate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#about-us">About Us</a>
                    </li>
                  </ul>
                  <div class="me-md-3">
                    <div class="nav-item"><button type="button" class="btn btn-outline-primary " onclick="window.location.href = 'donate.php' ">Donate</button></div>
                  </div>
                  <div class="memd3
                  ">
                    <div class="nav-item"><button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#myModal">Log-in</button></div>
                  </div>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> 
                 
                </div>
              </div>
              </div>
            </nav>


     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

    <div class="mh-70" style="height: 60vh;overflow: hidden;" id="home">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner " >
                  <div class="carousel-item active ratio ratio-16x9" data-bs-interval="3000">
                    <img src="https://img.freepik.com/free-photo/i-hope-you-feel-better-after-this-session_637285-9947.jpg?w=740&t=st=1694114055~exp=1694114655~hmac=d468552f4c5f1c1c77ca4457edd742687b504e99e585d4b9e83ea4825185883a" class="d-block w-100 " alt="...">
                    <h3 style="z-index: 3;color: rgb(2, 56, 95);text-align: center; position: relative;">Kit-Kat Take A Break</h3>
                  </div>
                  <div class="carousel-item ratio ratio-16x9" data-bs-interval="3000">
                    <img src="https://img.freepik.com/free-photo/group-therapy-attenders-applauding-one-participant-during-meeting_637285-10043.jpg?w=740&t=st=1694114327~exp=1694114927~hmac=a55e21b3e0634f982848bf62586a739233a20a8d2b9396e73b676ecfe7baed4f" class="d-block w-100" alt="...">
                    <h3 style="z-index: 3;color: rgb(57, 0, 71);top: 30%;">Kit-Kat Take A Break</h3>
                  </div>
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

    </div>
    
  <!--  ************************* Logins ************************** -->
    
  <?php if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) ){}
  else{
    ?>
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient Login</h6>
                                <a href="patient_form.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="doctor_form.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!--
                        <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>


                    -->
                    
                                    
                </div>
            </div>
            
        </div>
    </section>  
<?php
  }
  ?>






    <!-- ################# Our Departments Starts Here#######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-heartbeat"></i>
                        <h5>Psycologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-ribbon"></i>
                        <h5>Orthopaedic</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                       <i class="fab fa-monero"></i>
                        <h5>Neurologist</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-capsules"></i>
                        <h5>Pharma Pipeline</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h5>Pharma Team</h5>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="single-key">
                        <i class="far fa-thumbs-up"></i>
                        <h5>High Quality treatments</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>
    
   
    
    
  
    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-3 b" style="background-image: url();"> </div>
            <div class="col-sm-6 abut-yoiu d-flex justify-content-center">
                <h3>About Our Hospitality</h3>
            </div>
            <div class="col-sm-3 no-padding" style="background-image: url();"> </div>
        </div>
    </section>    
<br>
<br>
</div>
    

<div class="row d-flex justify-content-around">
        
        <div class="card m-3" style="width: 18rem; border: radius 10px;">
  <img src="https://www.asterdmhealthcare.com/fileadmin/_processed_/8/5/csm_medcare-hospital_4d98b56f22.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 1</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque!</p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem;">
  <img src="https://www.carehospitals.com/assets/images/main/bhubaneswar.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 2</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, non!</p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem;">
  <img src="https://content.jdmagicbox.com/comp/bhubaneshwar/f1/0674px674.x674.140717151414.b8f1/catalogue/amri-hospitals-khandagiri-bhubaneshwar-hospitals-3nmhxmj.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 3</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, at.
    </p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem; border: radius 10px;">
  <img src="https://www.businessdestinations.com/wp-content/uploads/2015/08/Fortis-Memorial-Hospital-in-Gurgaon-is-one-of-an-increasing-number-of-luxury-hospitals.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 4</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, atque!</p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem;">
  <img src="https://www.forbesindia.com/media/images/2018/Oct/img_109913_fortis_boulevard.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 5</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, non!</p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem;">
  <img src="https://www.upscalelivingmag.com/wp-content/uploads/2020/08/Cedars-Sinai-Medical-Center-California.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 6</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, at.
    </p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem;">
  <img src="https://dmn-dallas-news-prod.cdn.arcpublishing.com/resizer/jyCjDFCILnszOQyW-TbuDG4pyr4=/1660x934/smart/filters:no_upscale()/arc-anglerfish-arc2-prod-dmn.s3.amazonaws.com/public/JVGF74MSWNQU5QHODT2ILNOT5I.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 7</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro, non!</p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>
        <div class="card m-3" style="width: 18rem;">
  <img src="https://s3.amazonaws.com/bizenglish/wp-content/uploads/2023/07/20130007/Kings-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Treatment 8</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, at.
    </p>
    <a href="#" class="btn btn-primary">Treatment</a>
  </div>
</div>

</div>

    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Group</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Indivisual</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Psychology</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->

        <?php
                    if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) ){
                    
                    }
                    else{
                  ?>
    
    <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row m-3">
        <div class="col-md-2"></div>
            <div  class="col-sm-12 col-md-8 cop-ck">
                <form action="contact.php" method="post">
                <h2 style="text-align: center;">Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    
    <?php } ?>
    
    
    
     
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <!-------------Footer----------------->
    <div>
      <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn text-white btn-floating m-1" style="background-color: #3b5998; height: fit-content;" href="www.facebok.com"role="button"><i class="bi bi-facebook"></i></a>
      
            <!-- Twitter -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #55acee;"
              href="#!"
              role="button"
              ><i class="bi bi-twitter"></i></a>
      
            <!-- Google -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #dd4b39;"
              href="#!"
              role="button"
              ><i class="bi bi-google"></i></a>
      
            <!-- Instagram -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #ac2bac;"
              href="#!"
              role="button"
              ><i class="bi bi-instagram"></i></a>
      
            <!-- Linkedin -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #0082ca;"
              href="#!"
              role="button"
              ><i class="bi bi-linkedin"></i></a>
            <!-- Github -->
            <a
              class="btn text-white btn-floating m-1"
              style="background-color: #333333;"
              href="#!"
              role="button"
              ><i class="bi bi-github"></i></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="https://disastermanagement.com/">Disaster Management</a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
        <!--Modal class-->
       

<!-- Modal -->
<div class="modal fade" style=" font-family: 'Fantasy','Copperplate','Papyrus';"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-image: linear-gradient( 184.1deg,  rgba(249,255,182,1) 44.7%, rgba(226,255,172,1) 67.2% );">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
        
      </div>
      <div class="modal-body" >
       <form action="patient_login_check.php" method="get">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="loginName">Email or username</label>
            <input type="email" style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
" name="p_email" id="p_email" class="form-control" />
            
          </div>
    
          <!-- Password input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="p_password">Password</label>
            <input style="background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
" type="password" name="p_password" id="p_password" class="form-control" />
            
          </div>
       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="login" class="btn btn-primary">Log in</button>
      </div>

      </form>
    </div>
  </div>
</div>
    
    

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="js/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="js/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="js/script.js"></script>

</body>

</html>