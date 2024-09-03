<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="loader" id="loader" ></div>
            <!-----------Navbar------------->
<nav class="navbar navbar-expand-md navbar-light bg-light text-dark fixed-top" aria-label="Fourth navbar example">
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
                      <a class="nav-link active" aria-current="page" href="#collaboration">Collaborate</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#update">Update</a>
                    </li>
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
            <!--Chatbot-->
            <div>

</div>

<div class="body">

  <div class="page-1">
          <!---------Image slider----------->
          <div class="mh-70" style="height: 30vh;overflow: hidden;" id="home">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner " >
                  <div class="carousel-item active ratio ratio-16x9" data-bs-interval="4000">
                    <img src="../images/Hypercar-cc55e4ea-2b51-3a54-94a7-8eedc2a39181.jpg" class="d-block w-100 " alt="...">
                    <h3 style="z-index: 3;color: rgb(2, 56, 95);text-align: center; position: relative;">Disasters are part of climatic changes</h3>
                  </div>
                  <div class="carousel-item ratio ratio-16x9" data-bs-interval="4000">
                    <img src="../images/Koenigsseg_Car-118dea89-c666-3a43-a3aa-d966f99439f3.jpg" class="d-block w-100" alt="...">
                    <h3 style="z-index: 3;color: rgb(57, 0, 71);top: 30%;">But they can be prevented with major Precautions</h3>
                  </div>
                  <div class="carousel-item ratio ratio-16x9"  data-bs-interval="4000">
                    <img src="../images/Lamborghini_Huracan-62c2b455-d748-3bf9-9f32-32384c0ab134.jpg" class="d-block w-100" alt="...">
                    <h3 style="z-index: 3;color: rgb(19, 91, 9);top: 30%;">Let's make it possible togather</h3>
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
        <span style="background-color: #f5cb5c;z-index: 3; font-weight: 700; padding-right: 15px;padding-left: 5px;">Updates:</span>
        <div class="news">
        <?php 
              include 'connection.php'; 
                $query_str = "SELECT update.news FROM `update` ";
                
                $result = mysqli_query($connect,$query_str);
                while($result_array_row = mysqli_fetch_array($result)){
                ?>
                
                  <div class="news_text">
                    <?php echo $result_array_row['news'] ?>
                  </div>
                
          
          <?php } ?>
          
      </div>
    </div>
        <!------MISSION>------->
        <div class="row mission mt-md-3">
          <div class="col-md-3 mt-2 act-dis">
            <div class="active-disasters-title ps-md-1">Active Disasters</div>
            <div class="d-flex justify-content-center active-disasters m-2" >
              <ul type="none">
              <?php 
              include 'connection.php'; 
                $query_str = "SELECT update.dis_name FROM `update` ";
                
                $result = mysqli_query($connect,$query_str);
                while($result_array_row = mysqli_fetch_array($result)){
                ?>
               <li class="active-list"><?php echo $result_array_row['dis_name'] ?></li><br>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-md-6 mt-2"><h5 style="text-align: center;font-weight: 600; font-size: 1.8em;">MISSION</h5>
            <p class="mission-text ">
              In urban environments, the increasing frequency and intensity of natural and humanmade disasters pose a significant challenge to effective disaster management.
              The growing population density, critical infrastructure vulnerabilities, and complex socioeconomic dynamics,
              coupled with potential network blockages magnify the impact of disasters, necessitating innovative solutions to
              enhance resilience and response. Thus in order to minimize loss of life, property, and environmental damage while
              ensuring swift and coordinated actions across all stages of disaster management we need an effective tool that can
              help in providing precautionary measure alongside with necessary resilience tools.</p>
          </div>
          <div class="col-md-3 pe-md-3 mt-2 inf-cal">
            <div class="info-calamities-title">Information Related Calamities</div>
            <div class="d-flex justify-content-center info-calamities ms-md-2 pt-md-4 pt-sm-1 " >
              <ul type="none">
               <li>
                <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" >Previous Data</button></div>
               </li><br>
               <li>
                <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop" >Precautions</button></div>
               </li><br>
               <li>
                <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" >Region-wise office</button></div>
               </li><br>
               <li>
               <div class="nav-item"><button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#earthquake">Earthquake</button></div>                  
                    
               </li><br>
               <li>
               <div class="nav-item"><button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#cyclone">Cyclone</button></div>                  
                   
               </li>
              </ul>
            </div>
          </div>
        </div>
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
                <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel" >
                  <div class="offcanvas-header" style="background: white";>
                    <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel" >Precautions</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body" style="background-color: rgb(118, 176, 147); font-family: cursive; overflow-y: scroll;">
                  <div>
                    <h3>Earthquake</h3><div class="float-md-right cr ml-md-3 pt-2"></div>
<p>In most situations, you can protect yourself if you immediately:</p>
<ul>
<li><strong>DROP</strong> <strong>down onto your hands and knees</strong> before the earthquake knocks you down. This position protects you from falling but allows you to still move if necessary.</li>
<li><strong>COVER</strong> <strong>your head and neck</strong> (and your entire body if possible) underneath a sturdy table or desk. If there is no shelter nearby, get down near an interior wall or next to low-lying furniture that won’t fall on you, and cover your head and neck with your arms and hands.</li>
<li><strong>HOLD ON to your shelter</strong> (or to your head and neck) until the shaking stops. Be prepared to move with your shelter if the shaking shifts it around.</li>
</ul>
<h3>If you are inside, stay inside.</h3>
<p>DO NOT run outside or to other rooms during an earthquake. You are less likely to be injured if you stay where you are.</p>
<p>To reduce your chances of being hurt, take the following actions:</p>
<ul>
<li>If possible, within the few seconds before shaking intensifies, quickly move away from glass, hanging objects, bookcases, china cabinets, or other large furniture that could fall. Watch for falling objects, such as bricks from fireplaces and chimneys, light fixtures, wall hangings, high shelves, and cabinets with doors that could swing open.</li>
<li>If available nearby, grab something to shield your head and face from falling debris and broken glass.</li>
<li>If you are in the kitchen, quickly turn off the stove and take cover at the first sign of shaking.</li>
<li>If you are in bed, hold on and stay there, protecting your head with a pillow. You are less likely to be injured staying where you are. Broken glass on the floor can cause injuries if you walk or roll onto the floor.</li>
</ul>
<p><strong>DO NOT stand in a doorway.</strong> <strong>You are safer under a table.</strong> In modern houses, doorways are no stronger than any other part of the house. Doorways do not protect you from the most likely source of injury − falling or flying objects. Most earthquake-related injuries and deaths are caused by falling or flying objects (such as TVs, lamps, glass, or bookcases), or by being knocked to the ground.</p>
<h3>If you are in a high-rise building, drop, cover, and hold on.</h3>
<div class="w-md-col5 float-md-right cr ml-md-3"></div>
<ul>
<li>Move away from windows and outside walls.</li>
<li>Stay in the building.</li>
<li>DO NOT use the elevators. The electricity may go out, and the sprinkler systems may come on.</li>
<li>If you are trapped, stay calm. Try to get someone’s attention by tapping on hard or metal parts of the structure. Doing so may increase your chances of being rescued.</li>
</ul>
<h3>If you are inside a crowded place, drop, cover, and hold on.</h3>
<ul>
<li>Do not rush for the doorways. Others will have the same idea.</li>
<li>Move away from display shelves containing objects that may fall.</li>
<li>If you can, take cover and grab something to shield your head and face from falling debris and glass.</li>
</ul>
<h3>If you are outside, stay outside.</h3>

<ul>
<li>Move away from buildings, utility wires, sinkholes, and fuel and gas lines. The greatest danger from falling debris is just outside doorways and close to outer walls of buildings.</li>
<li>Go to an open area away from trees, telephone poles, and buildings. Once in the open, get down low and stay there until the shaking stops.</li>
<li>The area near the outside walls of a building is the most dangerous place to be. Windows, facades, and architectural details are often the first parts of the building to collapse. Stay away from this danger zone.</li>
</ul>
<h3>If you are in a moving vehicle, stop as quickly and safely as possible.</h3>
<ul>
<li>Move your car to the shoulder or curb, away from utility poles, overhead wires, and under- or overpasses.</li>
<li>Stay in the car and set the parking brake. A car may jiggle violently on its springs, but it is a good place to stay until the shaking stops.</li>
<li>Turn on the radio for emergency broadcast information.</li>
<li>If a power line falls on the car, stay inside until a trained person removes the wire.</li>
<li>When it is safe to begin driving again, watch for hazards created by the earthquake, such as breaks in the pavement, downed utility poles and wires, rising water levels, fallen overpasses, or collapsed bridges.</li>
</ul>

<h3>If you are in a stadium or theater, stay in your seat. Protect your head and neck with your arms or any way possible.</h3>
<ul>
<li>Do not leave until the shaking is over.</li>
<li>Walk out carefully watching for anything that could fall during the aftershocks.</li>
</ul>
<h3>If you are near the shore, drop, cover, and hold on until the shaking stops.</h3>
<ul>
<li>If severe shaking lasts 20 seconds or more, immediately evacuate to high ground as a <a href="/disasters/tsunamis/">tsunami</a>&nbsp;might have been generated by the earthquake.</li>
<li>Move inland 2 miles (3 kilometers) or to land that is at least 100 feet (30 meters) above sea level immediately. Don’t wait for officials to issue a warning.</li>
<li>Walk quickly, rather than drive, to avoid traffic, debris, and other hazards.</li>
</ul>
<h3>If you cannot drop to the ground, try to sit or remain seated so you are not knocked down.</h3>
<ul>
<li>If you are in a wheelchair, lock your wheels. Remove any items that are not securely attached to the wheelchair.</li>
<li>Protect your head and neck with a large book, a pillow, or your arms. The goal is to prevent injuries from falling down or from objects that might fall or be thrown at you.</li>
<li>If you are able, seek shelter under a sturdy table or desk. Stay away from outer walls, windows, fireplaces, and hanging objects.</li>
<li>If you are unable to move from a bed or chair, protect yourself from falling objects by covering up with blankets and pillows.</li>
<li>If you are outside, go to an open area away from trees, telephone poles, and buildings, and stay there.</li>
<li>For more resources for people with impaired mobility and other access and functional needs, visit the <a href="https://www.earthquakecountry.org/disability/" target="_blank" rel="noopener noreferrer" class="tp-link-policy" data-domain-ext="org">Earthquake Country Alliance<span class="sr-only">external icon</span><span class="fi cdc-icon-external x16 fill-external" aria-hidden="true"></span></a>.</li>
</ul>


</div>




                    <div class="col-md-12"><h3>Drop. Cover. Hold on.</h3>
                  </div>
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

        </div>
        <div class="page-2">
           <!--------Services------>

    <div class="service" id="services">
      <div class="step step-1 row" >
        <h6 style="text-align: center;font-size: 2em; font-weight: 700 ;height: 25px;margin: 10px;">Services Provided</h6>
        <div onclick="window.location.href = 'early_warning.php'" class="step-img col-md-5" style="height: 80vh;">
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
          <img src="images/teamwork.png" alt="">
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
      
      <div onclick="window.location.href = 'kitkat.php'" class="step step-4 row">
       
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


    </div><!--end of service-->

 </div>
        <div class="page-3">
           <!----------Recent Disaster--------->

    <div>
      <h3 style="text-align: center; margin-top: 15px; font-size:2em; text-decoration: underline;"><b>Recent Disasters</b></h3>
        <div class="recent">
          
          <div class="box box-1">
            <img src="https://images.pexels.com/photos/1739855/pexels-photo-1739855.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" ><br>
            <p>
            <strong>Biparjoy: June 6-16, 2023</strong>
            Region: Arabian Sea
            Wind speed: max. 194 km/h
            on land: max. 180 km/h
            Diameter: max. 567 km
            Air pressure: below 945 mbar
            Saffir-Simpson scale: category 3 <br>
            <strong>Affected regions : </strong>Western
          </p>
          
          </div>
          <div class="box box-2">
            <img src="images/Cyclone.webp" alt="" >
            <p>
               <strong>Mocha: May 11-14, 2023</strong>
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>The first landfall occurred near Sittwe in Myanmar on May 14th at 11:30 am.</strong>
            </p>
          </div>
          <div class="box box-3">
            <img src="https://media.npr.org/assets/img/2023/02/07/gettyimages-1463708921-b8f2a1bd09728cec7da659c02d5432eddea89db4-s1100-c50.jpg" alt="">
            <p >
            <strong>Sitrang: October 23-24, 2022</strong>
            
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>Affected regions : </strong>Southern
            </p>
          </div>
          <div class="box box-4">
            <img src="https://img.freepik.com/premium-photo/volcano-eruption-with-hot-lava-flow-natural-disaster_124507-13439.jpg" alt="">
            <p>
            <strong>Sitrang: October 23-24, 2022</strong>
            
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>Affected regions : </strong>Southern</p>
          </div>
          <div class="box box-5">
            <img src="https://img.freepik.com/free-photo/natural-disaster-concept-with-flood_23-2150385387.jpg?w=2000" alt="">
            <p>
            <strong>Sitrang: October 23-24, 2022</strong>
            
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>Affected regions : </strong>Southern</p>
          </div>
          
          

          <div class="box box-6">
            <img src="https://images.pexels.com/photos/1739855/pexels-photo-1739855.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" ><br>
            <p>
            <strong>Biparjoy: June 6-16, 2023</strong>
            Region: Arabian Sea
            Wind speed: max. 194 km/h
            on land: max. 180 km/h
            Diameter: max. 567 km
            Air pressure: below 945 mbar
            Saffir-Simpson scale: category 3 <br>
            <strong>Affected regions : </strong>Western
          </p>
          
          </div>
          <div class="box box-7">
            <img src="images/Cyclone.webp" alt="" >
            <p>
               <strong>Mocha: May 11-14, 2023</strong>
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>The first landfall occurred near Sittwe in Myanmar on May 14th at 11:30 am.</strong>
            </p>
          </div>
          <div class="box box-8">
            <img src="https://media.npr.org/assets/img/2023/02/07/gettyimages-1463708921-b8f2a1bd09728cec7da659c02d5432eddea89db4-s1100-c50.jpg" alt="">
            <p >
            <strong>Sitrang: October 23-24, 2022</strong>
            
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>Affected regions : </strong>Southern
            </p>
          </div>
          <div class="box box-9">
            <img src="https://img.freepik.com/premium-photo/volcano-eruption-with-hot-lava-flow-natural-disaster_124507-13439.jpg" alt="">
            <p>
            <strong>Sitrang: October 23-24, 2022</strong>
            
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>Affected regions : </strong>Southern</p>
          </div>
          <div class="box box-10">
            <img src="https://img.freepik.com/free-photo/natural-disaster-concept-with-flood_23-2150385387.jpg?w=2000" alt="">
            <p>
            <strong>Sitrang: October 23-24, 2022</strong>
            
                Region: Bay of Bengal
                Wind speed: max. 256 km/h
                Diameter: max. 259 km
                Air pressure: below 918 mbar
                Saffir-Simpson scale: category 5 <br>
                <strong>Affected regions : </strong>Southern</p>
          </div>
          
          
        </div>
    </div>

    
   
    <!---->

 

</div>  


<div class="page-4">
<?php
     if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) && ($_SESSION['sign'] == 'admin') ){
      ?> <h6 style="text-align: center; font-size: 2em;font-weight: 700; margin-bottom: 3%;">New Updates</h6>
  <div class=" row" id="updates">
        
    <div class="col-md-6">
      <form class="form" action="act_dis.php" method="post">
        <span class="title" style="text-align: center;">Active Disasters</span>
        
        <div>
          <span style="font-weight: 600; color: white; font-size: 1.5em;">Name</span><input placeholder="Enter Disaster name" type="text" name="act_dis_name" id="act_dis_name"><br>
          <span style="font-weight: 600; color: white; font-size: 1.5em;">Place</span><input placeholder="Enter Disaster Place" type="text" name="act_dis_place" id="act_dis_place"><br>
          <span style="font-weight: 600; color: white; font-size: 1.5em;">Link</span><input placeholder="Enter Disaster Link" type="text" name="act_dis_link" id="act_dis_link">
          <button class="mt-2" type="submit">Update</button> 
        </div>
       
      </form>
    </div>

      <div class="col-md-6 mt-4">
        <form class="form " action="act_dis.php" method="post">
          <span class="title" style="text-align: center;">News Updates</span>
          
          <div>
            <span style="font-weight: 600; color: white; font-size: 1.5em;">News</span><input placeholder="Enter News" type="text" name="news" id="news"><br>
            <span style="font-weight: 600; color: white; font-size: 1.5em;">Link</span><input placeholder="Enter News Link" type="text" name="news_link" id="news_link">
            <button class="mt-2" type="submit">Update</button> 
          </div>
        
        </form>
      </div>

    </div>

      <?php }
      else {?>
                  <!-- Collaboration -->
<div class="row m-1" id="collaboration">

  <div class="col-12 d-flex justify-content-center mt-sm-3">    
  <h6 class="pt-sm-2" style=" text-align: center; font-size: 2em; font-family:monospace;background-color: rgb(150, 208, 255); width: 60%;border-radius: 10px;"><b>COLLABORATION</b></p></h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
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
    <div class="collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
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
    <div class="collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
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
    <div class="collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
    <div class="private-companies-title">Indivisuals</div>
    <div class="d-flex justify-content-center private-companies m-2" >
      <ul type="none">
      <?php
      include 'connection.php';
      $query_str = "SELECT collaborators.name FROM `collaborators` WHERE organisation = 'Indivisual'";
      
      $result = mysqli_query($connect,$query_str);
      while($result_array_row = mysqli_fetch_array($result)){
      ?>
      <li class="active-list" id="list1"><?php echo $result_array_row['name'] ?></li><br>
      <?php 
      }
       ?>
      </ul>
    </div>
    <div class="collaborate"><a href="collaboration.php">Join Us</a></div>
  </div>
</div>
<!-------------Newsletter--------->
<div class="container" style="margin-top: 5%;">
  <h6 style="text-align: center; font-size: 2em;font-weight: 700; margin-bottom: 5px;">Newsletter</h6>

 <!--form action="send_email.php" method="post" class="newsletter">
  <p>Subscribe to our newsletter to get updates on natural calamities around your area &#128512</p>
  <span style="font-weight: 600; color: cyan; font-size: 1.5em;">Name</span><input type="text" class="form-control" placeholder="Enter you name" name="name" id="name" ><br>
  <span style="font-weight: 600; color: cyan; font-size: 1.5em;">Email</span><input type="email" class="form-control" placeholder="Enter you email" name="email" id="email">
  <button type="submit">Subscribe</button>
 
 </form-->

  <form class="form container" action="send_email.php" method="post">
        <span class="title">Subscribe to our newsletter.</span>
        <p class="description">Subscribe to our newsletter to get updates on natural calamities around your area &#128512</p>
        <div>
        <span style="font-weight: 600; color: white; font-size: 1.5em;">Name</span><input placeholder="Enter your name" type="text" name="name" id="name"><br>
        <span style="font-weight: 600; color: white; font-size: 1.5em;">Email</span><input placeholder="Enter your email" type="email" name="email" id="email">
        <button class="mt-2" type="submit">Subscribe</button> 
      </div>
       
      </form>    

</div>

<?php } ?>


</div>

        <div>
          <iframe src="https://ourworldindata.org/explorers/natural-disasters?facet=none&country=~OWID_WRL&Disaster+Type=All+disasters&Impact=Deaths&Timespan=Decadal+average&Per+capita=false&hideControls=true" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
        </div>


<div class="page-5 row">
  <div class="col-sm-2"></div>

            <div class="col-sm-9" id="about-us">
            <div class=" blog-content">
            <div class="section-title">
              <h1 style="text-align: center;">About Us:</h1>
            </div>
            <p class="lead">DM is a registered non-profit organisation committed to provide emergency assistance and long term solutions to victims of disasters.</p>
			<div class="section-title">
              <h4>Mission:</h4>
            </div>
            <p class="lead">To provide immediate, effective and sustainable support for the victims of natural disasters.</p>
			<div class="section-title">
              <h4>Vision:</h4>
            </div>
            <p class="lead">We envision a safer and disaster resilient India.</p>
			<div class="section-title">
              <h4>Core Values:</h4>
            </div>
            <ul class="progress-list inner_ul">
              <li>
                <p class="lead">All members of our organisation are driven by their passion for disaster management.</p>
               </li>
              <li>
                <p class="lead">We are committed to be open and transparent about what we do and how we do it.</p>
              </li>
              <li>
                <p class="lead">We value honesty, mutual respect and professionalism in all aspects of relationships within us and between our organization and our partners.</p>
              </li>
            </ul>
           
            <!-- /.progress-list -->
			 <div class="offset_1"></div>
			<div class="section-title">
              <h3>WHY DISASTER MANAGEMENT?</h3>
            </div>
            <p class="lead">India is one of the most disaster prone countries in the world, 23 out of 29 states are multi-disaster prone regions. Over 40 million hectare of land has been identified as flood prone. About 57% of the total area is vulnerable to earthquake of varying intensities. The Indian Ocean is one among the six key cyclone-prone regions of the world. The coromandel coastal line is more prone, about 80% of the total cyclones generated in the region hit here. </p>
            <p class="lead">Every year millions of Indians were affected by natural disasters. These disasters leave people traumatised by the death of family, friends and their lives devastated by their loss of livelihood. The impact is high and it has been increasing dramatically in the last few decades in terms of number of people affected and the length of time they are affected for. This trend is expected to keep rising in coming years. </p>
            <p class="lead">To deal with disasters, there is an urgent need of local institution, which can play a pro-active role in disaster management. This resulted in the formation of a group like us, a registered Indian charity dedicated to provide disaster response and preparedness activities across India.</p>
			<div class="offset_1"></div><div class="offset_1"></div>
          </div>
            </div>

                 <!-------Our Team-------->
        <section class="team" style="margin-top: 3em; margin-bottom: 4em;" >
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
        </div>



</div>
      <!--Cyclone-->
  <div class="modal " id="cyclone" tabindex="-1" style="transition: 2s  ;  font-family: 'Fantasy','Copperplate','Papyrus';" >
        <div class="modal-dialog modal-fullscreen" >
          <div class="modal-content">
            <div class="modal-header" >
              <h5 class="modal-title" style="color: rgb(52, 181, 99);"><b>Most violent cyclones in India since 2018</b></h5><br>
            </div>
            <div class="modal-body ">
              <!--Modal body text goes here.-->
              
            
              
    <div class="boxwhite">
      <div class="clear"></div>
    
    <div class="storm">
    <h3>Biparjoy: June 6-16, 2023</h3>
    <div class="st1">
      <div>Region:</div>
      <div>Arabian Sea</div><div>Wind speed:</div><div>max. 194 km/h</div><div>on land:</div><div>max. 180 km/h</div><div>Diameter:</div><div>max. 567 km</div><div>Air pressure:</div><div>below 945 mbar</div><div>Saffir-Simpson scale:</div><div>category 3</div></div>
      <div class="st2"><strong>Affected regions</strong><br>Western</div>
      <div class="clear"></div>
    </div>
    
    <div class="storm">
      <h3>Mocha: May 11-14, 2023</h3>
      <div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 256 km/h</div><div>Diameter:</div><div>max. 259 km</div><div>Air pressure:</div><div>below 918 mbar</div><div>Saffir-Simpson scale:</div><div>category 5</div></div>
      <div class="st2">The cyclone did not make direct landfall in India. On May 14th, 2023 at 8:30 pm it had the shortest distance at about 84 km southwest of Saiha in North Eastern.<br>Instead, the first landfall occurred near Sittwe in Myanmar on May 14th at 11:30 am.</div>
      <div class="clear"></div>
    </div>
      
    <div class="storm">
      <h3>Sitrang: October 23-24, 2022</h3>
      <div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 83 km/h</div><div>Diameter:</div><div>max. 1222 km</div><div>Air pressure:</div><div>below 994 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Eastern<br>North Eastern</div><div class="clear"></div>
    </div>
      
      <div class="storm"><h3>Asani: May 7-11, 2022</h3>
      <div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 119 km/h</div><div>on land:</div><div>max. 100 km/h</div><div>Diameter:</div><div>max. 130 km</div><div>Air pressure:</div><div>below 976 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Southern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Jawad: November 30 to December 6, 2021</h3>
      <div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 74 km/h</div><div>Diameter:</div><div>max. 926 km</div><div>Air pressure:</div><div>below 1000 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Andaman and Nicobar Islands<br>Southern<br>Eastern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Gulab:shaheen Gu: September 23 to October 4, 2021</h3>
      <div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 111 km/h</div><div>on land:</div><div>max. 83 km/h</div><div>Diameter:</div><div>max. 556 km</div><div>Air pressure:</div><div>below 984 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Southern<br>Eastern<br>Central<br>Western</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Yaas: May 24-27, 2021</h3>
      <div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 119 km/h</div><div>Diameter:</div><div>max. 259 km</div><div>Air pressure:</div><div>below 974 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Eastern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Yaas: May 23-27, 2021</h3><div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 139 km/h</div><div>Diameter:</div><div>max. 796 km</div><div>Air pressure:</div><div>below 970 mbar</div><div>Saffir-Simpson scale:</div><div>category 1</div></div><div class="st2"><strong>Affected regions</strong><br>Andaman and Nicobar Islands<br>Eastern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Tauktae: May 14-19, 2021</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 220 km/h</div><div>on land:</div><div>max. 202 km/h</div><div>Diameter:</div><div>max. 167 km</div><div>Eye:</div><div>max. 74 km</div><div>Air pressure:</div><div>below 935 mbar</div><div>Saffir-Simpson scale:</div><div>category 4</div></div><div class="st2"><strong>Affected regions</strong><br>Western<br>Northern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Tauktae: May 13-19, 2021</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 185 km/h</div><div>Diameter:</div><div>max. 741 km</div><div>Eye:</div><div>max. 74 km</div><div>Air pressure:</div><div>below 950 mbar</div><div>Saffir-Simpson scale:</div><div>category 3</div></div><div class="st2"><strong>Affected regions</strong><br>Southern<br>Western<br>Northern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Burevi: November 29 to December 5, 2020</h3><div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 83 km/h</div><div>on land:</div><div>max. 74 km/h</div><div>Diameter:</div><div>max. 926 km</div><div>Air pressure:</div><div>below 996 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Southern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Nivar: November 22-27, 2020</h3><div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 120 km/h</div><div>Diameter:</div><div>max. 815 km</div><div>Air pressure:</div><div>below 982 mbar</div><div>Saffir-Simpson scale:</div><div>category 1</div></div><div class="st2"><strong>Affected regions</strong><br>Southern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Nisarga: May 31 to June 4, 2020</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 111 km/h</div><div>Diameter:</div><div>max. 574 km</div><div>Eye:</div><div>max. 74 km</div><div>Air pressure:</div><div>below 984 mbar</div><div>Saffir-Simpson scale:</div><div>tropical storm</div></div><div class="st2"><strong>Affected regions</strong><br>Southern<br>Western<br>Central</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Amphan: May 15-21, 2020</h3><div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 241 km/h</div><div>Diameter:</div><div>max. 644 km</div><div>Eye:</div><div>max. 56 km</div><div>Air pressure:</div><div>below 920 mbar</div><div>Saffir-Simpson scale:</div><div>category 4</div></div><div class="st2"><strong>Affected regions</strong><br>Southern<br>Eastern<br>North Eastern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Bulbul:matmo: October 28 to November 11, 2019</h3><div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 139 km/h</div><div>on land:</div><div>max. 130 km/h</div><div>Diameter:</div><div>max. 704 km</div><div>Air pressure:</div><div>below 976 mbar</div><div>Saffir-Simpson scale:</div><div>category 1</div></div><div class="st2"><strong>Affected regions</strong><br>Andaman and Nicobar Islands<br>Eastern<br>North Eastern</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Maha: October 28 to November 11, 2019</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 185 km/h</div><div>on land:</div><div>max. 74 km/h</div><div>Diameter:</div><div>max. 185 km</div><div>Eye:</div><div>max. 56 km</div><div>Air pressure:</div><div>below 956 mbar</div><div>Saffir-Simpson scale:</div><div>category 3</div></div><div class="st2"><strong>Affected regions</strong><br>Southern<br>Western</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Kyaar:kyarr: October 22 to November 3, 2019</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 241 km/h</div><div>Diameter:</div><div>max. 370 km</div><div>Eye:</div><div>max. 93 km</div><div>Air pressure:</div><div>below 922 mbar</div><div>Saffir-Simpson scale:</div><div>category 4</div></div><div class="st2">The cyclone did not make direct landfall in India. On October 25th, 2019 at 11:30 am it had the shortest distance at about 113 km east of Malvan in Western.</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Hikaa:hikka: September 20-26, 2019</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 139 km/h</div><div>Diameter:</div><div>max. 111 km</div><div>Air pressure:</div><div>below 978 mbar</div><div>Saffir-Simpson scale:</div><div>category 1</div></div><div class="st2">The cyclone did not make direct landfall in India. On September 20th, 2019 at 11:30 pm it had the shortest distance at about 99 km east of Shirgaon in Western.</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Vayu: June 8-18, 2019</h3><div class="st1"><div>Region:</div><div>Arabian Sea</div><div>Wind speed:</div><div>max. 148 km/h</div><div>on land:</div><div>max. 41 km/h</div><div>Diameter:</div><div>max. 185 km</div><div>Eye:</div><div>max. 37 km</div><div>Air pressure:</div><div>below 970 mbar</div><div>Saffir-Simpson scale:</div><div>category 1</div></div><div class="st2"><strong>Affected regions</strong><br>Southern<br>Western</div><div class="clear"></div></div>
      
      <div class="storm"><h3>Fani: April 25 to May 4, 2019</h3><div class="st1"><div>Region:</div><div>Bay of Bengal</div><div>Wind speed:</div><div>max. 213 km/h</div><div>on land:</div><div>max. 194 km/h</div><div>Diameter:</div><div>max. 185 km</div><div>Eye:</div><div>max. 56 km</div><div>Air pressure:</div><div>below 932 mbar</div><div>Saffir-Simpson scale:</div><div>category 4</div></div><div class="st2"><strong>Affected regions</strong><br>Eastern</div><div class="clear"></div></div></div>

    
            
            <p style="text-align: center; margin: 10px;">These evaluations are based on data from the <a href="https://www.ncei.noaa.gov/about-us" target="_blank" rel="noopener">National Centers for Environmental Information</a> of the National Oceanic and Atmospheric Administration (NOAA). Individual data have been summarized or translated.</p>                
        
            </div>
                <!----------->

            </div>
          </div>
        </div>
  </div>

  
       <!--Earthquake-->
      <div class="modal " id="earthquake" tabindex="-1" style="transition: 2s  ;  font-family: 'Fantasy','Copperplate','Papyrus'; " >
        <div class="modal-dialog modal-fullscreen" >
          <div class="modal-content">
            <div class="modal-header" >
                <h5 class="modal-title" style="color: rgb(52, 181, 99);"><b>Earthquakes in past years</b></h5><br>
              </div>
              <div class="modal-body ">
                <!--Modal body text goes here.-->

                <div class="tablebox" style="height: auto !important;">
                <div class="tablescroller" style="overflow-x: auto;">
                  <table class="std100 hover tabsort"><tbody><tr class="no-sort"><th class="sort-header">Date</th><th class="sort-header">Region</th><th class="sort-header">Depth</th><th class="sort-header">Magnitude</th><th class="sort-header">Deaths</th><th class="sort-header">Total damage</th></tr><tr><td data-sort="20230613">06/13/2023</td><td>Kashmir (Kishtwar)</td><td>10 km</td><td>5.0</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20210428">04/28/2021</td><td>Assam</td><td>34 km</td><td>6.0</td><td>2</td><td data-sort="12.0"><div class="hrzScale" style="width:28%;"></div></td></tr><tr><td data-sort="20190724">07/24/2019</td><td>Maharashtra (Palghar)</td><td>10 km</td><td>3.8</td><td>1</td><td data-sort="8.0"><div class="hrzScale" style="width:19%;"></div></td></tr><tr><td data-sort="20190201">02/01/2019</td><td>Maharashtra (Palghar)</td><td>5 km</td><td>3.6</td><td>1</td><td data-sort="6.0"><div class="hrzScale" style="width:14%;"></div></td></tr><tr><td data-sort="20180912">09/12/2018</td><td>West Bengal</td><td>10 km</td><td>5.3</td><td>1</td><td data-sort="4.0"><div class="hrzScale" style="width:9%;"></div></td></tr><tr><td data-sort="20170103">01/03/2017</td><td>Ambasa; Bangladesh</td><td>8 km</td><td>5.7</td><td>3</td><td data-sort="9.0"><div class="hrzScale" style="width:21%;"></div></td></tr><tr><td data-sort="20160103">01/03/2016</td><td>Impahl</td><td>27 km</td><td>6.7</td><td>13</td><td data-sort="16.0"><div class="hrzScale" style="width:37%;"></div></td></tr><tr><td data-sort="20150628">06/28/2015</td><td>Kokrajhar</td><td>56 km</td><td>5.3</td><td>0</td><td data-sort="4.0"><div class="hrzScale" style="width:9%;"></div></td></tr><tr><td data-sort="20130802">08/02/2013</td><td>Kashmir (Kishtwar)</td><td>7 km</td><td>5.2</td><td>0</td><td data-sort="8.0"><div class="hrzScale" style="width:19%;"></div></td></tr><tr><td data-sort="20130501">05/01/2013</td><td>Kashmir (Doda, Kishtwar, Ramban)</td><td>13 km</td><td>5.7</td><td>3</td><td data-sort="24.0"><div class="hrzScale" style="width:56%;"></div></td></tr><tr><td data-sort="20121018">10/18/2012</td><td>Deurala, Jaisinghnagar, Kotma, Sarai, Umaria</td><td>27 km</td><td>5.0</td><td>0</td><td data-sort="7.0"><div class="hrzScale" style="width:16%;"></div></td></tr><tr><td data-sort="20120511">05/11/2012</td><td>Assam (Kamrup, Guwahati)</td><td>35 km</td><td>5.4</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20111121">11/21/2011</td><td>Assam</td><td>42 km</td><td>5.8</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20111029">10/29/2011</td><td>Sikkim</td><td>55 km</td><td>3.5</td><td>2</td><td data-sort="4.0"><div class="hrzScale" style="width:9%;"></div></td></tr><tr><td data-sort="20111020">10/20/2011</td><td>Gujarat</td><td>34 km</td><td>5.0</td><td>0</td><td data-sort="11.0"><div class="hrzScale" style="width:26%;"></div></td></tr><tr><td data-sort="20110918">09/18/2011</td><td>Sikkim</td><td>51 km</td><td>6.9</td><td>111</td><td data-sort="33.0"><div class="hrzScale" style="width:77%;"></div></td></tr><tr><td data-sort="20110907">09/07/2011</td><td>Delhi</td><td>18 km</td><td>4.3</td><td>0</td><td data-sort="1.0"><div class="hrzScale" style="width:2%;"></div></td></tr><tr><td data-sort="20100622">06/22/2010</td><td>Tauli</td><td>10 km</td><td>5.2</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20100618">06/18/2010</td><td>Andaman Islands (Diglipur)</td><td>31 km</td><td>5.9</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20100612">06/12/2010</td><td>Little Nicobar Island</td><td>50 km</td><td>7.5</td><td>0</td><td data-sort="0.0"><div class="hrzScale" style="width:0%;"></div></td></tr><tr><td data-sort="20100501">05/01/2010</td><td>Chamoli</td><td>29 km</td><td>4.5</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20100330">03/30/2010</td><td>Andaman Islands (Diglipur)</td><td>46 km</td><td>6.7</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20091212">12/12/2009</td><td>Maharashtra (Satara)</td><td>25 km</td><td>5.1</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20090810">08/10/2009</td><td>Andaman I</td><td>35 km</td><td>7.5</td><td>0</td><td data-sort="0.0"><div class="hrzScale" style="width:0%;"></div></td></tr><tr><td data-sort="20090519">05/19/2009</td><td>Kashmir</td><td>48 km</td><td>4.9</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20090409">04/09/2009</td><td>Jaisalmer</td><td>58 km</td><td>5.2</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20090326">03/26/2009</td><td>Chaibasa</td><td>11 km</td><td>4.1</td><td>0</td><td data-sort="3.0"><div class="hrzScale" style="width:7%;"></div></td></tr><tr><td data-sort="20080916">09/16/2008</td><td>Maharashtra</td><td>14 km</td><td>5.0</td><td>1</td><td data-sort="11.0"><div class="hrzScale" style="width:26%;"></div></td></tr><tr><td data-sort="20080606">06/06/2008</td><td>Manpur</td><td>33 km</td><td>3.8</td><td>0</td><td data-sort="3.0"><div class="hrzScale" style="width:7%;"></div></td></tr><tr><td data-sort="20080309">03/09/2008</td><td>Gujarat</td><td>41 km</td><td>4.5</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20080206">02/06/2008</td><td>West Bengal</td><td>40 km</td><td>4.3</td><td>1</td><td data-sort="9.0"><div class="hrzScale" style="width:21%;"></div></td></tr><tr><td data-sort="20071125">11/25/2007</td><td>Badaun, Meerut, Noida, Rewari</td><td>17 km</td><td>4.7</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20071106">11/06/2007</td><td>Gujarat</td><td>5 km</td><td>5.1</td><td>1</td><td data-sort="13.0"><div class="hrzScale" style="width:30%;"></div></td></tr><tr><td data-sort="20070820">08/20/2007</td><td>Maharashtra (Satara)</td><td>53 km</td><td>4.4</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20070722">07/22/2007</td><td>Uttarkashi, Chamoli, Muzaffarnagar</td><td>14 km</td><td>4.3</td><td>0</td><td data-sort="6.0"><div class="hrzScale" style="width:14%;"></div></td></tr><tr><td data-sort="20061224">12/24/2006</td><td>Rajasthan</td><td>26 km</td><td>4.2</td><td>0</td><td data-sort="0.0"><div class="hrzScale" style="width:0%;"></div></td></tr><tr><td data-sort="20060406">04/06/2006</td><td>Gujarat</td><td>16 km</td><td>5.5</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20060307">03/07/2006</td><td>Gujarat</td><td>46 km</td><td>5.5</td><td>0</td><td data-sort="6.0"><div class="hrzScale" style="width:14%;"></div></td></tr><tr><td data-sort="20060214">02/14/2006</td><td>Sikkim</td><td>25 km</td><td>5.3</td><td>2</td><td data-sort="7.0"><div class="hrzScale" style="width:16%;"></div></td></tr><tr><td data-sort="20051214">12/14/2005</td><td>Jausari, Chamoli, Nandprayag</td><td>54 km</td><td>5.3</td><td>1</td><td data-sort="12.0"><div class="hrzScale" style="width:28%;"></div></td></tr><tr><td data-sort="20050830">08/30/2005</td><td>Maharashtra (Ambeghar, Dicholi, Kisrule)</td><td>17 km</td><td>4.7</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20050816">08/16/2005</td><td>Uttaranchal (Uttarkahi)</td><td>54 km</td><td>4.4</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20050814">08/14/2005</td><td>Maharashtra</td><td>32 km</td><td>4.4</td><td>0</td><td data-sort="4.0"><div class="hrzScale" style="width:9%;"></div></td></tr><tr><td data-sort="20050724">07/24/2005</td><td>Andaman Islands, Nicobar Islands</td><td>6 km</td><td>7.2</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20050315">03/15/2005</td><td>Maharashtra (Dhebewadi)</td><td>6 km</td><td>4.3</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20050314">03/14/2005</td><td>Maharashtra (Kolhapur, Ratnagiri, Satara)</td><td>49 km</td><td>4.9</td><td>0</td><td data-sort="5.0"><div class="hrzScale" style="width:12%;"></div></td></tr><tr><td data-sort="20050215">02/15/2005</td><td>Khaspur</td><td>11 km</td><td>5.1</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="20041209">12/09/2004</td><td>Hailakandi, Cachar</td><td>&nbsp;</td><td>5.4</td><td>0</td><td data-sort="4.0"><div class="hrzScale" style="width:9%;"></div></td></tr><tr><td data-sort="20020913">09/13/2002</td><td>Andaman Islands (Rongat, Diglipur, ariel Bay)</td><td>29 km</td><td>6.5</td><td>2</td><td data-sort="9.0"><div class="hrzScale" style="width:21%;"></div></td></tr><tr><td data-sort="20010126">01/26/2001</td><td>Gujarat (Bhuj, Ahmadabad, Rajokot; Pakistan)</td><td>40 km</td><td>7.7</td><td>20005</td><td data-sort="40.0"><div class="hrzScale" style="width:93%;"></div></td></tr><tr><td data-sort="20000103">01/03/2000</td><td>Maheshkhali</td><td>12 km</td><td>4.6</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="19990328">03/28/1999</td><td>Chamoli, Rudraprayag, Tehri Garhwal</td><td>11 km</td><td>6.6</td><td>100</td><td data-sort="31.0"><div class="hrzScale" style="width:72%;"></div></td></tr><tr><td data-sort="19971121">11/21/1997</td><td>Chittagong, Bangladesh</td><td>6 km</td><td>6.1</td><td>23</td><td data-sort="12.0"><div class="hrzScale" style="width:28%;"></div></td></tr><tr><td data-sort="19970521">05/21/1997</td><td>Southern (Jabalpur)</td><td>28 km</td><td>5.8</td><td>56</td><td data-sort="32.0"><div class="hrzScale" style="width:74%;"></div></td></tr><tr><td data-sort="19931112">11/12/1993</td><td>Latur</td><td>28 km</td><td>4.6</td><td>0</td><td data-sort="3.0"><div class="hrzScale" style="width:7%;"></div></td></tr><tr><td data-sort="19930929">09/29/1993</td><td>Latur-Osmanabad, Killari</td><td>48 km</td><td>6.2</td><td>11000</td><td data-sort="40.0"><div class="hrzScale" style="width:93%;"></div></td></tr><tr><td data-sort="19911108">11/08/1991</td><td>Jodhpur, Jaisalmer</td><td>44 km</td><td>5.0</td><td>0</td><td data-sort="2.0"><div class="hrzScale" style="width:5%;"></div></td></tr><tr><td data-sort="19911019">10/19/1991</td><td>Chamoli, Uttarkashi, New Delhi, Chandigarh</td><td>14 km</td><td>7.0</td><td>2000</td><td data-sort="40.0"><div class="hrzScale" style="width:93%;"></div></td></tr><tr><td data-sort="19860426">04/26/1986</td><td>Kashmir (Dharmsala, Lahore, Pakistan)</td><td>16 km</td><td>5.3</td><td>6</td><td data-sort="11.0"><div class="hrzScale" style="width:26%;"></div></td></tr><tr><td data-sort="19841230">12/30/1984</td><td>Assam, Cachar District</td><td>37 km</td><td>5.6</td><td>20</td><td data-sort="12.0"><div class="hrzScale" style="width:28%;"></div></td></tr><tr><td data-sort="19820120">01/20/1982</td><td>Little Nicobar Island</td><td>11 km</td><td>6.3</td><td>0</td><td data-sort="6.0"><div class="hrzScale" style="width:14%;"></div></td></tr><tr><td data-sort="19800823">08/23/1980</td><td>Kashmir</td><td>3 km</td><td>4.8</td><td>0</td><td data-sort="6.0"><div class="hrzScale" style="width:14%;"></div></td></tr><tr><td data-sort="19800823">08/23/1980</td><td>Kashmir</td><td>51 km</td><td>4.9</td><td>15</td><td data-sort="18.0"><div class="hrzScale" style="width:42%;"></div></td></tr><tr><td data-sort="19750119">01/19/1975</td><td>Kashmir (Kinnaur District)</td><td>2 km</td><td>6.8</td><td>47</td><td data-sort="8.0"><div class="hrzScale" style="width:19%;"></div></td></tr><tr><td data-sort="19700323">03/23/1970</td><td>Broach</td><td>59 km</td><td>5.4</td><td>26</td><td data-sort="11.0"><div class="hrzScale" style="width:26%;"></div></td></tr><tr><td data-sort="19671210">12/10/1967</td><td>India</td><td>&nbsp;</td><td>6.5</td><td>180</td><td data-sort="14.0"><div class="hrzScale" style="width:33%;"></div></td></tr><tr><td data-sort="19660815">08/15/1966</td><td>N</td><td>&nbsp;</td><td>5.6</td><td>15</td><td data-sort="6.0"><div class="hrzScale" style="width:14%;"></div></td></tr><tr><td data-sort="19630902">09/02/1963</td><td>Kashmir (Sw)</td><td>&nbsp;</td><td>5.3</td><td>80</td><td data-sort="12.0"><div class="hrzScale" style="width:28%;"></div></td></tr><tr><td data-sort="19610204">02/04/1961</td><td>India</td><td>&nbsp;</td><td>7.6</td><td>0</td><td data-sort="0.0"><div class="hrzScale" style="width:0%;"></div></td></tr><tr><td data-sort="19600827">08/27/1960</td><td>N</td><td>&nbsp;</td><td>0.0</td><td>0</td><td data-sort="4.0"><div class="hrzScale" style="width:9%;"></div></td></tr><tr><td data-sort="19560721">07/21/1956</td><td>Anjar, Bhuj, Gandhidham, Kandla</td><td>&nbsp;</td><td>6.1</td><td>156</td><td data-sort="18.0"><div class="hrzScale" style="width:42%;"></div></td></tr><tr><td data-sort="19550517">05/17/1955</td><td>Little Nicobar Island</td><td>49 km</td><td>7.3</td><td>0</td><td data-sort="0.0"><div class="hrzScale" style="width:0%;"></div></td></tr><tr><td data-sort="19500815">08/15/1950</td><td>India-China</td><td>30 km</td><td>8.6</td><td>1530</td><td data-sort="22.0"><div class="hrzScale" style="width:51%;"></div></td></tr></tbody></table></div><br><br>
                
                </div>

              </div> 
            
                <p>
                These statistics are based on datas from the National Geophysical Data Center / World Data Service (NGDC/WDS): Significant Earthquake Database. <a href="https://data.noaa.gov/metaview/page?xml=NOAA/NESDIS/NGDC/MGG/Hazards/iso/xml/G012153.xml&amp;view=getDataView" target="_blank" rel="noopener">doi:10.7289/V5TD9V7K</a>. Data have been summarized and translated.
                </p>
              
                <!----------->
            </div>
          </div>
        </div>
      </div>

      
</div>      
     
</body>
</html>