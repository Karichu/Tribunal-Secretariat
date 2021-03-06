<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- <link href="stylesheet" href="main.css"> -->
      <!--Import materialize.css-->

      <link rel="stylesheet" type="text/css" href="admin.css">
     <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
      <script src="https://kit.fontawesome.com/57ac78f831.js" crossorigin="anonymous"></script>
      


      <!--Let browser know website is optimized for mobile-->
      
      <title>Tribunal</title>
      
    </head>
    

    <body id="home" class="scrollspy">
    	<!--navbar-->
    	<div class="navbar-fixed">
    		<nav class="#1b5e20 green darken-4">
    			<div class="container">
    				<div class="navbar-wrapper">

    					<a href="#"class="brand-logo">Tribunal Secretariat</a>
    					<ul class="right hide-on-med-and-down">
                <li>
                  <a href="tribunal/home.html">Public</a>
                </li>
              </ul>
    					
    				</div>
    			</div>
    		</nav>
    	</div>
    	
              <!--Admin Section-->
              <div class="admin-wrapper">
                <!--left-sidenav-->
                <div class="left-sidenav">
                  <ul>
                    <li><a href="index.html">Manage posts</a></li>
                    <li><a href="index.html">Manage posts</a></li>
                    
                  </ul>
                </div>
                <!--admin-content-->
                <div class="admin-content">
                  <div class="button-group">
                    <a href="admin.html" class="btn-grp">Add Cause List</a><br>
                    <a href="index.html" class="btn-grp">Manage Cause List</a>
                  </div>
                  <div class="contents">
                    <h5 class="page-title">Add List</h5>
                    
                    <form action="PostProcessing.php" enctype='multipart/form-data' method="POST" >
                      
                      <div>
                        <label>File</label>
                         <input type="file" name="file" id="fileToUpload" class="text-input">
                      </div>
                      <div class="selecttopics">
                        <label for="cars">Choose a tribunal:</label>

<select name="category" class="cars">
  <option value="political">political</option>
  <option value="communication">communication</option>
  <option value="national">national</option>
  <option value="sports">sports</option>
  <option value="cooperative">political</option>
  <option value="hiv">Mercedes</option>
  <option value="public">Audi</option>
  <option value="rent">political</option>
  <option value="business">communication</option>
  <option value="competition">Mercedes</option>
  <option value="standard">Audi</option>
  <option value="transport">political</option>
  <option value="industrial">communication</option>
  <option value="aviation">Mercedes</option>
  <option value="legal">Audi</option>
  <option value="micro">Mercedes</option>
  <option value="education">Audi</option>
  <option value="state">communication</option>

</select>
                      </div>
                      
                      <div>
                        <input type="submit" name="submitbtn" >
                      </div>
                    </form>
                  </div>


                </div>

              </div>
<!--jquery-->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!--ckeditor-->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> -->
<!--Javascript-->
<script src="script.js"></script>
            </body>
            </html>
