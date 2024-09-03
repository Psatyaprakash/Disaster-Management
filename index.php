<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <!--link rel="stylesheet" href="loader.css"-->
    <script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

            <!-----------Navbar------------->
            <nav class="navbar navbar-expand-md navbar-light bg-light text-dark fixed-top" aria-label="Fourth navbar example">
              <div class="container">
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
                      <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Tools</a>
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
                  <div class="me-md-3">
                    <div class="nav-item"><button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#myModal">Log-in</button></div>
                  </div>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> 
                 
                </div>
              </div>
              </div>
            </nav>
            <!--Chatbot-->
            <div>

            </div>

<div class="body">
  <!--Social media buttons-->
   

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
               <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions1" aria-controls="offcanvasWithBothOptions">Previous Works</button></div>
               
               </li><br>
               <li>
                <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions2" aria-controls="offcanvasWithBothOptions">Precautions</button></div>
               </li><br>
               <li>
                <div> <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions3" aria-controls="offcanvasWithBothOptions" >Region-wise office</button></div>
               </li><br>
              </ul>
            </div>
          </div>
        </div>
       
          <div class="col-md-1"></div>
          

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions1" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Previous Works</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>
          

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions2" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Precautions</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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

          

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions3" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Region-Wise Office</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
          <img  src="images/RR.jpg" alt="">
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

  </div>


<div class="page-4">
                  <!-- Collaboration -->
<div class="row m-1" id="collaboration">

  <div class="col-12 d-flex justify-content-center mt-sm-3">    
  <h6 class="pt-sm-2" style=" text-align: center; font-size: 2em; font-family:monospace;background-color: rgb(150, 208, 255); width: 60%;border-radius: 10px;"><b>COLLABORATION</b></p></h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
    <div class="private-companies-title">Private Companies</div>
    <div class="d-flex justify-content-center private-companies ms-1" >
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
    <a href="collaboration.php"><button class="collaborate">Join Us</button></a>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
    <div class="private-companies-title">Government Bodies</div>
    <div class="d-flex justify-content-center private-companies ms-2" >
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
    <a href="collaboration.php"><button class="collaborate">Join Us</button></a>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
    <div class="private-companies-title">International Committiees</div>
    <div class="d-flex justify-content-center private-companies ms-2" >
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
    <a href="collaboration.php"><button class="collaborate">Join Us</button></a>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 mt-1">
    <div class="private-companies-title">Indivisuals</div>
    <div class="d-flex justify-content-center private-companies ms-2" >
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
    <a href="collaboration.php"><button class="collaborate">Join Us</button></a>
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


</div>
        <div class="page-5 row">
        
        <div class="elfsight-app-c3ff341a-e93b-46a5-a99b-5e3f3a7a8d33 mt-2" style="margin: auto; " ></div>
        
        <div>
          <iframe src="https://ourworldindata.org/explorers/natural-disasters?facet=none&country=~OWID_WRL&Disaster+Type=All+disasters&Impact=Deaths&Timespan=Decadal+average&Per+capita=false&hideControls=true" loading="lazy" style="width: 100%; height: 600px; border: 0px none;"></iframe>
        </div>

        <div class="col-sm-2"></div>

<div class="col-sm-9" id="about-us">
<div class=" blog-content">
<div class="section-title">
  <h1 style="text-align: center;">About Us</h1>
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
      <!--Log in Form-->
      <div class="modal" id="myModal" tabindex="-1" style="transition: 2s  ;  font-family: 'Fantasy','Copperplate','Papyrus'; backdrop-filter: blur(40px);" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" >

            <form action="login_check.php" method="post">    <!--Form start-->

              <h5 class="modal-title" style="color: rgb(52, 181, 99); font-size: 1.3em; font-weight: 700;"><b>Log-in</b>            
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
                  <label class="form-label" for="email" style="font-size: 1.2em;">Email or username</label>
                    <input type="email" style="background-color: #4158D0;" name="log_email" id="log_email" class="form-control" />
                </div>
            
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                  <label class="form-label" for="log_password" style="font-size: 1.2em;">Password</label>
                    <input style="background-color: #4158D0; " type="password" name="log_password" id="log_password" class="form-control" />
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
      
      
      <!--script src="//code.tidio.co/cja0fgzdz5nkhyyqjlvnv3t1okkonr74.js" async></script>-->
      <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
      <script>
        $document('ready'){
          $('#loader').addClass("hide-loader");
        }
        </script>
    
</body>
</html>