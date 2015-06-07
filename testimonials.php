<?php
session_start();
session_regenerate_id();
if(!isset($_SESSION['user']))      // if there is no valid session
{
    header("Location: errlogout.php");
}
?>

<!DOCTYPE html> 
<html>

<head>
  <title>Website of WestBengal</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
	
    <header>
	  <div id="strapline">
	    <div id="welcome_slogan">
	      <h3><span>Website For Sonar Bangla</span></h3>
	    </div><!--close welcome_slogan-->
      </div><!--close strapline-->	  
	  <nav>
	    <div id="menubar">
          <ul id="nav">
            <li><a href="index1.php">Home</a></li>
            <li><a href="ourwork.html">Our Work</a></li>
            <li class="current"><a href="testimonials.php">Testimonials</a></li>
            <li><a href="projects.php">Projects</a></li>
            <li><a href="contact.php">Contact Us</a></li>
                 <li><a href="mylogout.php">Log Out</a></li>
          </ul>
        </div><!--close menubar-->	
      </nav>
    </header>
    
	<div id="site_content">

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>March 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>February 2013</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">info@youremail.co.uk</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	   
      <div class="slideshow">
	    <ul class="slideshow">
         <li class="show"><img width="680" height="250" src="images/home_1.jpg" alt="&quot;Be good to ownself, because you are answerable to you only&quot;" /></li>
          <li><img width="680" height="250" src="images/home_2.jpg" alt="&quot;Be good to ownself, because you are answerable to you only&quot;" /></li>
          
          <li><img width="680" height="250" src="images/DSCN4745.JPG" alt="&quot;Be good to ownself, because you are answerable to you only&quot;" /></li>
          <li><img width="680" height="250" src="images/DSCN4834.JPG" alt="&quot;Be good to ownself, because you are answerable to you only&quot;" /></li>
        </ul> 
	  </div>	   
	
	  <div id="content">
        <div class="content_item">
          <h2>Testimonials</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elit sapien, tempus sit amet hendrerit volutpat, euismod vitae risus. Etiam consequat, sem et vulputate dapibus, diam enim tristique est, vitae porta eros mauris ut orci. Praesent sed velit odio. Ut massa arcu, suscipit viverra molestie at, aliquet a metus. Nullam sit amet tellus dui, ut tincidunt justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis egestas laoreet. Nunc non ipsum metus, non laoreet urna. Vestibulum quis risus quis diam mattis tempus. Vestibulum suscipit pretium tempor. </p>
			<div class="content_container">
			  <h3>Mr Joe Bloggs</h3>
			  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.&rdquo;</p>
			</div><!--close content_container-->
            <div class="content_container">
			  <h3>Mr Joe Bloggs</h3>
			  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.&rdquo;</p>
			</div><!--close content_container--> 
			<div class="content_container">
			  <h3>Mr Joe Bloggs</h3>
			  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.&rdquo;</p>
			</div><!--close content_container-->
            <div class="content_container">
			  <h3>Mr Joe Bloggs</h3>
			  <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim. Aliquam facilisis neque non nunc posuere eget volutpat metus tincidunt.&rdquo;</p>
			</div><!--close content_container--> 
	    </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
    <footer>
	  <a href="index1.php">Home</a> | <a href="">Our Work</a> | <a href="testimonials.php">Testimonials</a> | <a href="projects.php">Projects</a> | <a href="contact.php">Contact</a><br/><br/>
    <a href="http://fotogrph.com">Images</a> |  <a href="http://www.heartinternet.co.uk/web-hosting/">Web Hosting</a>  | website by <a href="http://www.freehtml5templates.co.uk">Softech India Pvt Ltd.</a>
    </footer>  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>
