<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="dm.css">
    
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script-->
</head>
<body>

 <!----> <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" style="background: rgba(255, 255, 255, 0.471); height: 10vh;" >
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="Disaster_management.php" style="font-weight: 800; font-size: 3em;padding-left: 3vw;">DM</a>
    <div class="d-flex justify-content-start">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item p-2" style="font-size: 1.5em; font-weight: 500;">
            <a class="nav-link active" aria-current="page" href="#home" style=" color: black;">Home</a>
          </li>
          <li class="nav-item p-2" style="font-size: 1.5em; font-weight: 500;">
            <a class="nav-link active" aria-current="page" href="#" style=" color: black;">Categories</a>
          </li>
          <li>
            <div class="dropdown p-2" >
              <button class="btn  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.5em; font-weight: 500;">
                Tools
              </button>
              <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">All integrated programms</button></li>
                <li><button class="dropdown-item" type="button">sea level</button></li>
                <li><button class="dropdown-item" type="button">temperature</button></li>
                <li><button class="dropdown-item" type="button">ml/python based algo</button></li>
              </ul>
            </div>
          </li>
          <li class="nav-item p-2" style="font-size: 1.5em; font-weight: 500; ">
            <a class="nav-link active" aria-current="page" href="#collaboration" style=" color: black;">Collaborate</a>
          </li>
          <li class="nav-item p-2" style="font-size: 1.5em; font-weight: 500;">
            <a class="nav-link active" aria-current="page" href="#about-us" style=" color: black;">About Us</a>
          </li>        
        </ul>
    </div>
    
    <div class="p-5">
   <?php
     if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) ){
      ?>
      <div class="nav-item"><button type="button" class="btn btn-outline-warning " onclick="window.location.href = 'logout.php' " style="transition: 1s; font-size: 1.5em; font-weight: 500;">Log-out</button></div>
      <?php
    }
    else{
   ?>
        <div class="nav-item"><button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#myModal" style="transition: 1s; font-size: 1.5em; font-weight: 500;">Log-in</button></div>
        </div>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <?php } ?>
    </div>
  </div>
</nav>

<!---------------Image Slider------------------->
<!--
  https://images3.alphacoders.com/132/1327236.jpeg
  https://images5.alphacoders.com/109/1099191.jpg
  https://images2.alphacoders.com/106/1064544.jpg
-->

<div class="mh-70" style="height: 40vh;overflow: hidden;" id="home">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner " >
              <div class="carousel-item active ratio ratio-16x9" data-bs-interval="4000">
                <img src="https://images.pexels.com/photos/5273095/pexels-photo-5273095.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 " alt="...">
                <h3 style="z-index: 3;color: rgb(2, 56, 95);text-align: center;top: 30vh">Disasters are part of climatic changes</h3>
              </div>
              <div class="carousel-item ratio ratio-16x9" data-bs-interval="4000">
                <img src="https://plus.unsplash.com/premium_photo-1661962476059-13543ea45d4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1480&q=80" class="d-block w-100" alt="...">
                <h3 style="z-index: 3;color: rgb(57, 0, 71);top: 30vh;">But they can be prevented with major Precautions</h3>
              </div>
              <div class="carousel-item ratio ratio-16x9"  data-bs-interval="4000">
                <img src="https://images.unsplash.com/photo-1677233861362-c3aa97f11638?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="...">
                <h3 style="z-index: 3;color: rgb(19, 91, 9);top: 30vh;">Let's make it possible togather</h3>
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
    <!--------News------->

    <div class="marquee">
      <div class="news">
        <ul class="news_inner" >
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
          <li class="news_text">Lorem ipsum dolor sit amet</li>
        </ul> 
      </div>
    </div>
    <!------MISSION>------->
    <div class="row mission " style="margin-top: 3%;">
      <div class="col-md-3">
        <div class="active-disasters-title">Active Disasters</div>
        <div class="d-flex justify-content-center active-disasters m-2" >
          <ul type="none">
          
            <li class="active-list">Lorem ipsum dolor sit amet consectetur.</li><br>
            <li class="active-list">Lorem ipsum dolor sit amet consectetur.</li><br>
            <li class="active-list">Lorem ipsum dolor sit amet consectetur.</li><br>
            <li class="active-list">Lorem ipsum dolor sit amet consectetur.</li><br>
            <li class="active-list">Lorem ipsum dolor sit amet consectetur.</li><br>
            <li class="active-list">Lorem ipsum dolor sit amet consectetur.</li><br>
          </ul>
        </div>
      </div>
      <div class="col-md-6"><h5 style="text-align: center;font-weight: 600; font-size: 2em;">MISSION</h5>
        <p style="text-align: center; font-size: 1.3em;">
          In urban environments, the increasing frequency and intensity of natural and humanmade disasters pose a significant challenge to effective disaster management.
          The growing population density, critical infrastructure vulnerabilities, and complex socioeconomic dynamics,
          coupled with potential network blockages magnify the impact of disasters, necessitating innovative solutions to
          enhance resilience and response. Thus in order to minimize loss of life, property, and environmental damage while
          ensuring swift and coordinated actions across all stages of disaster management we need an effective tool that can
          help in providing precautionary measure alongside with necessary resilience tools.</p>
      </div>
      <div class="col-md-3">
        <div class="info-calamities-title">Information Related Calamities</div>
        <div class="d-flex justify-content-center info-calamities m-2" >
          <ul type="none">
           <li>
            <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="font-size: 1em; text-align: center ;width: 15vw;">Previous Data</button></div>
           </li><br>
           <li>
            <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop" style="font-size: 1em; ;text-align: center ;width: 15vw;">Precautions</button></div>
           </li><br>
           <li>
            <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="font-size: 1em; ;text-align: center ;width: 15vw;">Region-wise office</button></div>
           </li><br>
          </ul>
        </div>
      </div>
    </div>

    <!--------Services------>

    <div class="service">
      <div class="step step-1 row" >
        <h6 style="text-align: center;font-size: 2em; font-weight: 700 ;height: 6vh;margin: 2vh;">Services Provided</h6>
        <div class="step-img col-md-5" style="height: 80vh;">
          <img src="images/speaker.png" alt="">
          <h4>Advanced Early Warning Systems</h4>
        </div>
        <div class="step-text col-md-7" style="height: 80vh;">
          <p class="card-text"  style="display: block;">Develop advanced early warning systems that leverage realtime data, predictive analytics, and communication technologies to provide timely alerts for various disasters, enabling swift evacuation and proactive mitigation measures.</p>
        </div>
      </div>
      
      <div class="step step-2 row">
        <div class="step-text col-md-7">
          <p class="card-text"  style="display: block;">Identifying high-risk areas, assessing available resources, and dynamically redistributing aidm and supplies based on real-time needs.</p>
        </div>
        <div class="step-img col-md-5">
        <img src="images/monitor.png" alt="">
          <h4>Data Driven Analytics for Resource Allocation</h4>
        </div>
        
      </div>
      
      <div class="step step-3 row">
        
        <div class="step-img col-md-5">
          <<img src="images/teamwork.png" alt="">
          <h4>Communication and Coordination Platforms</h4>
        </div>
        <div class="step-text col-md-7">
          <p class="card-text"  style="display: block;"></p>Develop communication platforms that facilitate seamless
          coordination among various agencies, responders, and
          affected communities. These platforms could enable realtime information sharing, task assignment, and progress
          tracking. To counter network blockages services such as
          mesh nodes or starlink services should be utilised.</p>
        </div>

      </div>
      
      <div class="step step-4 row">
       
        <div class="step-text col-md-7">
          <p class="card-text"  style="display: block;">Establishing initiatives that focus on postdisaster recovery and rehabilitation. This could
            involve supporting affected communities in
            rebuilding infrastructure, restoring livelihoods,
            and addressing mental health needs. We aim at
            linking it along kitkat our mental health web
            application.</p>
        </div>
        <div class="step-img col-md-5">
        <img src="images/RR.jpg" alt="">
          <h4>Recovery and Rehabilitation Programs</h4>
        </div>
       
      </div>
      
      <div class="step step-5 row">
      
        <div class="step-img col-md-5">
        <img src="images/IR.jpg" alt="">
          <h4>Infrastructure Resilience</h4>
        </div>
        <div class="step-text col-md-7">
          <p class="card-text"  style="display: block;"></p>Create a B2B business model for providing resilient shelters
          to the disaster refugee to withstand and recover from
          disasters.</p>
        </div>
      </div>
      
      <div class=" step-6 row">
      
        <div class="step-img-6 col-md-5" style="display: block; width: 90vw;height: 5vh;">
         &#128512 &#128512 &#128512
        </div>
        
      </div>
      
    </div>

   

    <!----------Recent Disaster--------->

    <div>
      <h3 style="text-align: center; padding-top: 5px; font-size:2em; text-decoration: underline;"><b>Recent Disasters</b></h3>
        <div class="recent">
          <div class="box box-1">
            <img src="https://images.pexels.com/photos/1739855/pexels-photo-1739855.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" ><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-2">
            <img src="https://eoimages.gsfc.nasa.gov/images/imagerecords/148000/148325/indiacyclone_vir_2021137_lrg.jpg" alt="" >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-3">
            <img src="https://media.npr.org/assets/img/2023/02/07/gettyimages-1463708921-b8f2a1bd09728cec7da659c02d5432eddea89db4-s1100-c50.jpg" alt="">
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-4">
            <img src="https://img.freepik.com/premium-photo/volcano-eruption-with-hot-lava-flow-natural-disaster_124507-13439.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-5">
            <img src="https://img.freepik.com/free-photo/natural-disaster-concept-with-flood_23-2150385387.jpg?w=2000" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          
          <div class="box box-6">
            <img src="https://images.pexels.com/photos/1739855/pexels-photo-1739855.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-7">
            <img src="https://eoimages.gsfc.nasa.gov/images/imagerecords/148000/148325/indiacyclone_vir_2021137_lrg.jpg" alt="" >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-8">
            <img src="https://media.npr.org/assets/img/2023/02/07/gettyimages-1463708921-b8f2a1bd09728cec7da659c02d5432eddea89db4-s1100-c50.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-9">
            <img src="https://img.freepik.com/premium-photo/volcano-eruption-with-hot-lava-flow-natural-disaster_124507-13439.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
          <div class="box box-10">
            <img src="https://img.freepik.com/free-photo/natural-disaster-concept-with-flood_23-2150385387.jpg?w=2000" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus?</p>
          </div>
        </div>
    </div>

    <!----------Past recorded data------style="display: flexbox; justify-content: space-between;"----->
<div class="container-fluid p-5 row" style="margin-left: 5%;">
      
  <div class="col-md-1"></div>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
          <div class="offcanvas-header" style="background-image: linear-gradient( 358.4deg,  rgba(249,151,119,1) -2.1%, rgba(98,58,162,1) 90% );font-weight: 700;">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel" >Previous Data</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="background-color: rgb(173, 133, 216); font-family: cursive;">
            <p>JO BHI DATA SUBMIT KAROGE YAHAN PE RAHEGA</p>
          </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
          <div class="offcanvas-header" style="background-image: linear-gradient( 358.4deg,  rgba(249,151,119,1) -2.1%, rgba(98,58,162,1) 90% );font-weight: 700;">
            <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel" >Precautions</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="background-color: rgb(118, 176, 147); font-family: cursive;">
            <p>LIST OF 8 TO 10 PRECAUTIONS TO BE WRITTEN HERE</p>
          </div>
        </div>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
          <div class="offcanvas-header" style="background-image: linear-gradient( 358.4deg,  rgba(249,151,119,1) -2.1%, rgba(98,58,162,1) 90% );font-weight: 700;">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" >Region wise offices</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="background-color: rgb(59, 95, 109); font-family: cursive;">
            <p>
              <ol type="1">
                <li>Mumbai Office - Mumbai, India.</li>
                <li>Chennai Office - Chennai, Tamil Nadu. </li>
                <li>Bangalore Office - Banglore, Karnataka State of .</li>
                <li>Pune Office - Pune, Maharashtra state of .</li>
                <li>And any others</li>
              </ol>
            </p>
          </div>
  </div>
</div>
<br>
<br>

<?php
     if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) && ($_SESSION['sign'] == 'admin') ){
      ?><p style="padding-left: 50%;padding-top: 2%; font-size: 2em; font-family:monospace; z-index: 3;" id=""><b>New Updates</b></p>
        <div class="container">
          <form action="news.php" method="post">
            <label for="news" class="form-label">New news</label>
            <input type="text" class="form-control">
            <button type="submit">Add</button>
          </form>
        </div>

      <?php }
      else {?>

<!-- Collaboration -->
<div class="row m-1">
 
  <div class="col-12" style="height: 40%; width: 80%; margin-left: 10%;margin-bottom: 5%; overflow: auto; border-radius: 20px ;display: block; justify-content: center; position: relative; background-image: linear-gradient( 149deg,  rgb(239, 218, 114) 9.2%, rgb(235, 203, 87) 103.9% );">
    <div class="col-md-4"></div>
    <div class="col-md-8" style="  text-align: center;"><p style="padding-left: 50%;padding-top: 2%; font-size: 2em; font-family:monospace; z-index: 3;" id="collaboration"><b>COLLABORATION</b></p></div>
  </div>

  <div class="col-md-3">
    <div class="private-companies-title">Private Companies</div>
    <div class="d-flex justify-content-center private-companies m-2" >
      <ul type="none">
          
      <?php
      include 'connection.php';
      $query_str = "SELECT collaborators.name FROM `collaborators` WHERE organisation = 'Private Companies' ORDER BY `collaborators`.`name` ASC;";
      
      $result = mysqli_query($connect,$query_str);
      while($result_array_row = mysqli_fetch_array($result)){
      ?>
      <li class="active-list" id="list1"><?php echo $result_array_row['name'] ?></li><br>
      <?php 
      }
       ?>
 
      </ul>
    </div>
    <div class="Collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>
  <div class="col-md-3">
    <div class="private-companies-title">Government Bodies</div>
    <div class="d-flex justify-content-center private-companies m-2" >
      <ul type="none">
      <?php
      include 'connection.php';
      $query_str = "SELECT collaborators.name FROM `collaborators` WHERE organisation = 'Government Bodies' ORDER BY `collaborators`.`name` ASC;";
      
      $result = mysqli_query($connect,$query_str);
      while($result_array_row = mysqli_fetch_array($result)){
      ?>
      <li class="active-list" id="list1"><?php echo $result_array_row['name'] ?></li><br>
      <?php 
      }
       ?>
 
      </ul>
    </div>
    <div class="Collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>

  <div class="col-md-3">
    <div class="private-companies-title">International Committiees</div>
    <div class="d-flex justify-content-center private-companies m-2" >
      <ul type="none">
      <?php
      include 'connection.php';
      $query_str = "SELECT collaborators.name FROM `collaborators` WHERE organisation = 'International Committees' ORDER BY `collaborators`.`name` ASC";
      
      $result = mysqli_query($connect,$query_str);
      while($result_array_row = mysqli_fetch_array($result)){
      ?>
      <li class="active-list" id="list1"><?php echo $result_array_row['name'] ?></li><br>
      <?php 
      }
       ?>
      </ul>
    </div>
    <div class="Collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>

  <div class="col-md-3">
    <div class="private-companies-title">Indivisuals</div>
    <div class="d-flex justify-content-center private-companies m-2" >
      <ul type="none">
      <?php
      include 'connection.php';
      $query_str = "SELECT collaborators.name FROM `collaborators` WHERE organisation = 'Indivisuals' ORDER BY `collaborators`.`name` ASC;";
      
      $result = mysqli_query($connect,$query_str);
      while($result_array_row = mysqli_fetch_array($result)){
      ?>
      <li class="active-list" id="list1"><?php echo $result_array_row['name'] ?></li><br>
      <?php 
      }
       ?>
      </ul>
    </div>
    <div class="Collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>
  <?php 
    if( $_SESSION['sign'] == 'admin'){
        ?>
             <div style="border:5px ; border-radius:20px; display:flex; justify-content: space-around;">
        <button class="btn btn-primary" onclick="window.location.href = 'Disaster_Management.php' ">HOME</button>
        <button class="btn btn-primary" onclick="window.location.href = 'admin_details_view.php' ">Admin</button>
        <button class="btn btn-primary" onclick="window.location.href = 'collaborators_details_view.php' ">Collaborators</button>
        <button class="btn btn-primary" onclick="window.location.href = 'visitor_details_view.php' ">Visitors</button>
    </div>
    <br>
        <?php
    }
  ?>
</div>

<?php } ?>

<!-------------Newsletter--------->
<div class="container" style="margin-top: 5%;">
    <h6 style="text-align: center; font-size: 2em;font-weight: 700; margin-bottom: 5px;">Newsletter</h6>
 
   <form action="send_email.php" method="post" class="newsletter">
    <p>Subscribe to our newsletter to get updates on natural calamities around your area &#128512</p>
    <span style="font-weight: 600; color: cyan; font-size: 1.5em;">Name</span><input type="text" class="form-control" placeholder="Enter you name" name="name" id="name" ><br>
    <span style="font-weight: 600; color: cyan; font-size: 1.5em;">Email</span><input type="email" class="form-control" placeholder="Enter you email" name="email" id="email">
    <button type="submit">Subscribe</button>
   
   </form>    
  
</div>

        <!-------Our Team-------->
        <section class="team" style="margin-top: 3em; margin-bottom: 4em;" id="about-us">
          <h2 class="team-heading">Our Team</h2>
          <div class="container row p-5">
            <div class="col-4 "></div>
              <div class="profile col-2">
              <img src="https://c4.wallpaperflare.com/wallpaper/103/5/162/anime-anime-boys-jujutsu-kaisen-satoru-gojo-hd-wallpaper-preview.jpg" alt="Subhojeet"/><span class="name">Subhojeet Biswas</span>
            </div>
        
            <div class="profile col-2">
              <img src="https://c4.wallpaperflare.com/wallpaper/416/608/950/anime-anime-girls-original-characters-kyrie-meii-wallpaper-preview.jpg" alt="Swati"/><span class="name">Swati Sonalika Panda</span>
            </div>
            
            <div class="profile col-2">
              <img src="https://c4.wallpaperflare.com/wallpaper/622/941/214/jujutsu-kaisen-satoru-gojo-hd-wallpaper-preview.jpg" alt="Satya"/><span class="name">P Satya Prakash</span>
            </div>
            <div class="col-4"></div>
          </div>
        </section>

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
<!--------------------------------->
    <!--Log in Form-->
    <div class="modal" id="myModal" tabindex="-1" style="transition: 2s  ;  font-family: 'Fantasy','Copperplate','Papyrus';" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" >

            <form action="login_check.php" method="post">    <!--Form start-->

              <h5 class="modal-title" style="color: rgb(52, 181, 99);"><b>Log-in</b>            
              <select name="signin" id="signin" class="form-label" required >
                <option class="form-control" value="1" id="Visitor">Visitor</option>
                <option class="form-control" value="2" id="Collaborators">Collaborators</option>
                <option class="form-control" value="3" id="Admin">Admin</option>
                </select> 
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div></h5>
            <div class="modal-body">
              <!--Modal body text goes here.-->
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email or username</label>
                    <input type="email" style="background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);" name="log_email" id="log_email" class="form-control" />
                </div>
            
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="log_password">Password</label>
                    <input style="background-color: #4158D0; background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);" type="password" name="log_password" id="log_password" class="form-control" />
                  </div>
                             
              </div>
              <div class="modal-footer">
                <a href="signup.html"><button type="button" class="btn btn-secondary" data-dismiss="modal">Sign-up</button></a>
                <button type="submit" id="login" class="btn btn-primary">Log in</button>
              </div>
        
              </form>
                <!----------->

            </div>
          </div>
        </div>
      </div>
      
      

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="dm.js"></script>

</body>
</html>