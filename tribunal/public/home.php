<?php
include '../database_files/select_file.php';

?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- <link href="stylesheet" href="main.css"> -->
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <script src="https://kit.fontawesome.com/57ac78f831.js" crossorigin="anonymous"></script>


      <!--Let browser know website is optimized for mobile-->
      
      <title>Tribunal</title>

    </head>
<style>
  .dropdown {
 
  display: none;
  width: 300px ;    
  border-radius: 0;
  line-height: 5px;
  text-align: left;
}
.navbar-fixed ul li:hover .dropdown{
  display: block;
  position: absolute;
  background-color: #1b5e20; 
  padding: 0.2px;
}
.navbar-fixed ul li:hover .dropdown a:hover{
  color: #b2ff00;
}
.dropdown a{
  line-height: 23px;
}
.section-follow .fa-4x{
  margin: 15px 10px;
}

</style>

    <body id="home" class="scrollspy">
    	<!--navbar-->
    	<div class="navbar-fixed">
    		<nav class="#1b5e20 green darken-4">
    			<div class="container">
    				<div class="navbar-wrapper">

    					<a href="#"class="brand-logo">Tribunal Secretariat</a>
    					<a href="#" data-target="mobile-nav" 
    					class="sidenav-trigger">
					<i class="material-icons">menu</i>
    					</a>
    					<ul class="right hide-on-med-and-down">
    						<li>
    							<a href="#home">Home</a>
    						</li>
    						<li>
    							<a href="#search">Search</a>
    						</li>
                <li>
                  <a href="#about">About Us</a>
                </li>

    						<li>
                  <a href="#tribunals">Tribunals</a>
                  <div class="dropdown">
                   
                    <?php foreach ($posts as $post):?>
                    <a href="<?php
                    echo $post['category'];
                    ?>.html">
                      <?php echo $post['category'];
                      ?></a>
                      <!-- <a href="../postfolder/<?php
                      echo $post['file_path'];
                      ?>"download> -->

                    <?php endforeach ?>
                    <!-- <a href="national.html">The National Environment </a>
                    <a href="sports.html"> Sports Disputes Tribunal</a>
                   <a href="cooperative.html"> Cooperative Tribunal</a>            
                   <a href="hiv.html">HIV and AIDS Tribunal</a>            
                   <a href="public.html">Public Private Partnership Petition Committee</a>            
                   <a href="rent.html">Rent Restriction Tribunal</a>            						
                   <a href="business.html">Business Premises Rent</a> 
                   <a href="competition.html">Competition Tribunal</a>  
                   <a href="standard.html"> Standards Tribunal</a>
                   <a href="transport.html">Transport Licesnsing Appeals Board</a>
                   <a href="industrial.html">Industrial Property Tribunal</a> 
                   <a href="communication.html">Communication and Multimedia Appeals</a>
                   <a href="aviation.html">National Civil Aviation Administrative Review Tribunal</a>
                   <a href="legal.html">Legal Education Appeals Tribunal</a>
                   <a href="micro.html">Micro and Small Enterprise</a>
                   <a href="education.html">Education Appeal Tribunal</a>
                   <a href="state.html">State Corporations Appeals Tribunal</a> -->                                          
                </div>       
                </li>     
    						
    						<li>
    							<a href="#contact">Contact</a>
    						</li>
                
    					</ul>
    				</div>
    			</div>
    		</nav>
    	</div>
    	<ul class="sidenav" id="mobile-nav">
    						<li>
    							<a href="#home">Home</a>
    						</li>
    						<li>
    							<a href="#search">Search</a>
    						</li>
    						<li>
    							<a href="#about">About</a>

    						</li>
                
    						<li>
    							<a href="#tribunals">Tribunals</a>
    						</li>
    						<li>
    							<a href="#contact">Contact</a>
    						</li>
                
    					</ul>



              <!--Modal section-->
              
    					<!--section slider-->

<section class="slider">
      <ul class="slides">
        <li>
        <img src="tribunal4.jpg"> 
        <!-- random image -->
        <div class="caption right-align">
          <h4>Specialized Courts For Faster and Effective Dispute Settlement</h4>
          <!-- <h3 class="light black-text text-lighten-3">Specialized Courts For Faster and Effective Dispute Settlement</h3> -->
        </div>
      </li>
      <li>
        
        <img src="tribunal1.jpg"> 
        <!-- random image -->
        <div class="caption left-align">
          <h4>Justice be Our Shield and Defender</h4>
          <!-- <h5 class="light grey-text text-lighten-3 hide-on-small-only">Here's our small slogan.</h5> -->
        </div>
      </li>
  
      
    </ul>
</section>
<!--Section Search-->
<section id="search" class="section section-search #1b5e20 green darken-4 darken-1 white-text center scrollspy">
  <div class="container">
    <div class="row">
      
        <h3>Search Tribunal</h3>
        <div class="input-field">
          <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="CAMAT,MSET,etc....">
        </div>
      </div>
      
    </div>
  </div>

</section>

<!-- Section Icon Boxes-->
<section  id="about" class="section section-icons grey lighten-4 center">
<div class="container">
  <div class="row">
      <strong>Tribunals</strong><p>Tribunals are bodies established by Acts of Parliament to exercise judicial or quasi-judicial functions. They supplement ordinary courts in the administration of justice. Tribunals, however, do not have penal jurisdiction.Tribunals, like the courts, have to respect the Bill of Rights in their decisions and not be repugnant to justice and morality or be inconsistent with the Constitution or other laws of the land. Most tribunals are subject to the supervision of the High Court.</p>
     
      </div>
      
    </div>

</section> 
<!-- section:updates -->
<section id="updates" class="section section-popular scrollspy">
  <div class="container">
    <div class="row">
      <div class="col s12 m4">
        <div class="card">
          <div class="image">
            <img src="update2.jpg" alt="" width="350" height="180">
            <span class="card-title"></span>
          </div>
          <div class="card-content">
            Deputy Chief Registrar 
            412 of the Judiciary Hon. Paul Ndemo today presided over the swearing-in ceremony of member of various Tribunals
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="image">
            <img src="update2.jpg" alt="" width="350" height="180">
            <span class="card-title"></span>
          </div>
          <div class="card-content">
            Deputy Chief Registrar of the Judiciary Hon. Paul Ndemo today presided over the swearing-in ceremony of member of various Tribunals
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="card">
          <div class="image">
            <img src="update1.jpg" alt="" width="350" height="180">
            <span class="card-title"></span>
          </div>
          <div class="card-content">
            Four new members joined the former Attorney General Prof Githu Muigai  to handle petitions and complaints arising from tendering processes for public private partnerships. 
          </div>
        </div>
      </div>
      
</div>
  </div>
  
</section>
<!-- Section: Social-->
<section id="contact" class="section section-follow #1b5e20 green darken-4 white-text center">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h4>Contact Us:</h4>
        
        <p>+254 02 222 1221</p>
        <a href="https://web.facebook.com/thejudiciarykenya/?_rdc=1&_rdr" class="white-text">
          <i class="fab fa-facebook-square fa-3x"></i>
        </a>
        <a href="https://twitter.com/Kenyajudiciary" class="white-text">
          <i class="fab fa-twitter-square fa-3x"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCBlhiIIk-uz6FOE6Q-RvJLg" class="white-text">
          <i class="fab fa-youtube-square fa-3x"></i>
        </a>

      </div>
    </div>
  </div>
</section>


<!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      
      <script>
        //sidenav
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav, {});
//Slider
const slider = document.querySelector('.slider')
M.Slider.init(slider, {
  indicators: false,
  height: 500,
  transition: 500,
  interval: 6000
});

//Autocomplete
   const ac = document.querySelector
   ('.autocomplete');
   M.Autocomplete.init(ac,{
    data: {
      "CAMAT": null,
      "MSET": null,
      "SPORTS": null,
      "Cooperative": null,
    }
   });
   //Modal
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
        
      </script>
    </body>
  </html>