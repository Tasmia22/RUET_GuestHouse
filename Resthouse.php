
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rest House</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
  <!-- Google Fonts -->
  <link href="css/css.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet"> 
  <link href="css/Rstyle.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="Booking/styleBooking.css"/>    
  <link rel="stylesheet" href="Booking/jquery-ui.css">
    
  <script src="Booking/jquery-1.10.2.js"></script>
  <script src="Booking/jquery-ui.js"></script> 
  <script src="Booking/jquery.min.js"></script>
  <script>
      $(function() {
        $( "#skills" ).autocomplete({
          source: 'search.php'
        });
      });
  </script>
    
    
<style>    
 .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
      }

/* Style the buttons inside the tab */
 .tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
            }

/* Change background color of buttons on hover */
 .tab button:hover {
  background-color: #ddd;
                   }

/* Create an active/current tablink class */
 .tab button.active {
  background-color: #ccc;
                    }

/* Style the tab content */
 .tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
            }

</style>   
</head>
    

    <?php include_once('functions.php'); ?> 
<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/rlogo.png" height="142" width="120" alt="" title="" /></a>
      
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href=index.html>Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Amenities</a></li>
          <li><a href="#house">Booking</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="logout.php">logout</a></li>  
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>RUET GUEST HOUSE </h1>
      <a href="#about" class="btn-get-started">Accomodation and amenities</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
      <section id="about">
      <div class="container wow fadeInUp">
      <div class="section-header">
      <h3 class="section-title">Ruet Guest House</h3>
            <p> 

      RUET has provided guest house facilities for the teachers and officers including stuffs. RUET has two guest houses: one is situated within the campus, Rajshahi and another is situated in Dhaka. All the necessary amenities required to live comfortably are present at these guest houses.  Food facility is also available as the requirement of the delegates.<br>

    Guest house at RUET consist of 30 no of guest rooms, two driver rooms, a kitchen,a dining space.Rooms of 1st floor are for professors and Vice Chancellor.Room no 201 is specially allocated to VC.Any Oficiants and teacher can book room and this must be done atleast two days ago.A form is needed to be filled up for requisition.

    Another guest house is located at Dhaka, Bangladesh. The address is 	
    Babor Road, MOHAMMADPUR
    Dhaka, Bangladesh. It consists of six room: one for Vice Chancellor,one for professors and left are for officiants.
           </p>
            <div class="row" align="center" style="margin-bottom: 10px;">
            <div class="col-sm-6 col-xs-12">
            <div class="mapouter">
            <div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Babor%20Road%2C%20MOHAMMADPUR%20%20%20%20%20Dhaka%2C%20Bangladesh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"> </iframe>
            </div>
            </div>
            </div>
            <div class="col-sm-6 col-xs-12">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=RUET%20Guest%20House%2C%20Rajshahi&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
            </div>
            </div>
        </div>
      </div>
    </section><!-- #about -->


    <!--==========================
      Room Section-->
 <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">RUET Guest House</h3>
        </div>
          
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
            
              <li data-filter=".filter-app">Dhaka</li>
              <li data-filter=".filter-card">Rajshahi</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-2 col-md-4 portfolio-item filter-app">
            <a href="">
              <img src="img/room/vipd.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>VIP Room</h4>
                <span>For Vice Chancellor</span>
              </div>
            </a>
          </div>
            
                 <div class="col-lg-2 col-md-4 portfolio-item filter-app">
            <a href="">
              <img src="img/room/d2.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>Room no: 2</h4>
                <span> For Professor</span>
              </div>
            </a>
          </div>
               <div class="col-lg-2 col-md-4 portfolio-item filter-app">
            <a href="">
              <img src="img/room/d3.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>Room no: 3</h4>
                <span>For Officiants</span>
              </div>
            </a>
          </div>
               <div class="col-lg-2 col-md-4 portfolio-item filter-app">
            <a href="">
              <img src="img/room/d4.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>Room no:4</h4>
                <span>For Officiants</span>
              </div>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 portfolio-item filter-app">
            <a href="">
              <img src="img/room/d5.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>Room no: 5</h4>
                <span>For Officiants</span>
              </div>
            </a>
          </div>
             <div class="col-lg-2 col-md-4 portfolio-item filter-app">
            <a href="">
              <img src="img/room/d6.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>Room no: 6</h4>
                <span>For Officiants</span>
              </div>
            </a>
          </div>


          <div class="col-lg-2 col-md-4 portfolio-item filter-card">
            <a href="">
              <img src="img/room/vipr.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>Room no:201</h4>
                <span>For Vice Chancellor</span>
              </div>
            </a>
          </div>
            
              <div class="col-lg-2 col-md-4 portfolio-item filter-card">
            <a href="">
              <img src="img/room/vipr.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>1st Floor</h4>
                <span>For Professors</span>
              </div>
            </a>
          </div>
              <div class="col-lg-2 col-md-4 portfolio-item filter-card">
            <a href="">
              <img src="img/room/offr.jpg" alt="" height="190" width="190">
              <div class="details">
                <h4>3rd Floor</h4>
                <span>For Officants</span>
              </div>
            </a>
          </div>
              <div class="col-lg-2 col-md-4 portfolio-item filter-card">
            <a href="">
              <img src="img/room/offr.jpg" alt="" height="190" width="200">
              <div class="details">
                <h4>3rd Floor</h4>
                <span>For Officants</span>
              </div>
            </a>
          </div>
              <div class="col-lg-2 col-md-4 portfolio-item filter-card">
            <a href="">
              <img src="img/room/offr.jpg" alt="" height="190" width="200">
              <div class="details">
                <h4>3rd Floor</h4>
                <span>For Officants</span>
              </div>
            </a>
          </div>
              <div class="col-lg-2 col-md-4 portfolio-item filter-card">
            <a href="">
              <img src="img/room/stuff.jpg" alt="" height="190" width="200">
              <div class="details">
                <h4>3rd Floor</h4>
                <span>2 rooms for stuff</span>
              </div>
            </a>
          </div>
        
        </div>
          
          <div class="portfolio-item filter-app">
          <div class="Rest">
                <h5>Requisition Forms:</h5>
            <a href="https://drive.google.com/file/d/15fjIWE919X7s7KKWwZ42udUM5ATuMqQ6/view?usp=sharing">
                Guest House requisition form(Dhaka)</a>
               
            </div>
          </div>
          
            <div class="portfolio-item filter-card">
          <div class="Rest">
                <h5>Requisition Forms:</h5>
           <a href="https://drive.google.com/open?id=1YLo8V6PDkQbiLBtuWNZx68o64SFS8vZq">Guest House requisition form(Rajshahi)</a> 
               
            </div>
          </div>

      </div>
    </section><!-- #portfolio -->
      
      
<!-- #Room -->
   

  
    <!--==========================
      Booking Section Section id='house'
    ============================-->
      
    <section id="house">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Rest House</h3>
            <div class="w3-light-grey">


<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">
    <!-- Blog entries -->
    <div class="w3-col l12 s12">
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">       
          <h2 style="text-align: center";> Choose Date</h2>
          <br>
        
    
        <div id="calendar_div"> 
              <?php getCalender(); ?>
        </div>  
      </div>
    </div>
  </div>
</div>
</div>
         
            <div class="Rest">
                <h5>Calendar</h5>
         
            </div>
        </div>
      </div>
    </section><!-- #booking -->
      
      

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Chairman (In-charge):Dr. Md. Selim Hossain</p>
        </div>
          
            <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Rajshahi University of Engineering & Technology<br>Kazla,Rajshahi-6204, Bangladesh</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p> prof.selim@eee.ruet.ac.bd</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+88-0721-750798</p>
              </div>
            </div>
          </div>

        </div>
      </div>

     

    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
