
<!DOCTYPE html>
  <html>
    <head>
     <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/icons/MaterialIcons.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/icons/style.css"  media="screen,projection"/>
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image/png" href="assets/img/dtcmslogo1.png"/>
      <style>
      .modal { width: 30% !important ; max-height: 100% !important } /* increase the width and height!*/

      </style>
      <title>ShareRide</title>
    </head>

    <body>
        <!--Start Header Navigation-->

        <nav class="nav-extended #26a69a teal lighten-1">
          <div class="nav-wrapper">
            <a href="#" class="brand-logo">ShareRide</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a class="modal-trigger waves-effect waves-light" href="#loginModal"><i class="material-icons left">lock_open</i>Login</a></li>
              <li><a class="modal-trigger waves-effect waves-light" href="#signupModal"><i class="material-icons left">assignment</i>Sign Up</a></li>
              <li><a href="app/dashboard"><i class="material-icons left">dashboard</i>Dashboard</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
          </div>
        </nav>
        
        <!-- Start of Login Modal -->
        <form id="signinForm">
        <div id="loginModal" class="modal">
          <div class="modal-content">
            <div id="signinLoader"></div>
            <h4 class="center teal-text">Sign In</h4>
            <div id="correct"></div><div id="incorrect" class="center"></div>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">mail</i>
                      <input id="emailSignin" type="email" name="emailSignin" class="validate" required>
                      <label for="emailSignin">Email</label>
                    </div>
            
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">lock</i>
                      <input id="passSignin" type="password" name="passSignin" class="validate" required>
                      <label for="passSignin">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 m4"></div>
                    <div class="col s12 m4">
                      <button type="submit" class="waves-effect waves-light btn center">SignIn</button>
                    </div>
                    <div class="col s12 m4"></div>
                  </div>
                </form>
              </div>
          </div>
        </div>
        </form>
        <!-- End of Login Modal -->
        
        <!-- Start of Sign Up Modal -->
        <form class="col s12" id="signupForm">
        <div id="signupModal" class="modal">
          <div id="signupLoader"></div><div id="success-Signup"></div>
          <div class="modal-content">
            <h4 class="center teal-text">Sign Up</h4>
            <div id="user-err"></div>
            <div class="row">
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="username" type="text" name="username" class="validate" required>
                      <label for="username">Username</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">mail</i>
                      <input id="emailSignup" type="email" name="emailSignup" class="validate" required>
                      <div id="email-err"></div>
                      <label for="emailSignup">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">lock</i>
                      <input id="passSignup" type="password" name="passSignup" class="validate" required>
                      <label for="passSignup">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 m12">
                      <i class="material-icons prefix">lock</i>
                      <input id="confirm-passSignup" type="password" name="confirm-passSignup" class="validate" required>
                      <div id="pass-err"></div>
                      <label for="confirm-passSignup">Confirm Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 m4"></div>
                    <div class="col s12 m4">
                            <button class="btn waves-effect waves-light" type="submit" name="action">SignUp
                              <i class="material-icons right">send</i>
                            </button>
                    </div>
                    <div class="col s12 m4"></div>
                  </div>
              </div>
          </div>
        </div>
        </form>
                
		<!-- End of Sign Up Modal -->
		<div class="parallax-container">
		  <div class="valign-wrapper h100">
		  <div class="row">
			  <h1 class="tlt center">
					<ul class="texts center">
						 <li data-out-effect="fadeOut" data-out-shuffle="true" class="center" >
							<pre>            ShareRide, Ride With Us</pre>
						</li>   
					 </ul>
				</h1>
			</div>
				</hr><br/> 
			<div class="parallax grey lighten-1">
				<video class="responsive-video" autoplay loop muted width="100%">
			<source src="assets/clips/cars.MP4" type="video/mp4">
		  </video>
			</div>
		  </div>
			   <div class="row">
				<div class="col s12 m4">
				  <div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons  green-text">verified_user</i></h2>
					<h5 class="center">Secure</h5>

					<p class="light">
					  Our rides are physically inspected to counter any accidents, as well as
					  with accident reporting tools.
					</p>
				  </div>
				</div>

				<div class="col s12 m4">
				  <div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons green-text">all_inclusive</i></h2>
					<h5 class="center">Flexible</h5>
					<p class="light">You can reach any destination you wish
					</p>
				  </div>
				</div>
				
				<div class="col s12 m4">
				  <div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons green-text">accessibility</i></h2>
					<h5 class="center">Friendly</h5>
					<p class="light">Friendly drivers, and a supporting community.
					</p>
				  </div>
				</div>
			  </div>  
		</div>
		  <div class="slider">
			<ul class="slides">
			  <li>
				<img src="assets/img/car3.PNG">
				
				<div class="caption center-align">
				  <h3>Classic Rides</h3>
				  <h5 class="light grey-text text-lighten-3">Experience our classic rides</h5>
				</div>
			  </li>
			  <li>
				<img src="assets/img/car4.PNG"> 
				
				<div class="caption left-align">
				  <h3>Time Conscious</h3>
				  <h5 class="light grey-text text-lighten-3">Reach your destination in time</h5>
				</div>
			  </li>
			</ul>
		  </div>
        <!--Footer-->
      <footer class="page-footer teal darken-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <h5>About</h5>
                <p class="light">This application enable riders to find and reserve rides. Participants will have to
                register in the system before using it. <br/>
                A user will have the ability to either give a ride or get a ride. To give a ride, a user will enter
                the origin, destination, the capacity of the vehicle.<br/>
                A user looking for a ride will see a list of the rides available with the origin, destination,
                space available, driver and they can book the ride. When they book a ride, they get a confirmation email.
                <br/>
                <strong>ShareRide, simplifying movement.</strong>
                </p>
              </div>
              <div class="col s12 m4">
                <h5>Contacts</h5>
                <ul>
                  <li><i class="tiny material-icons">email</i><a class="grey-text text-lighten-3" href="#!">marojillo@gmail.com</a></li>
                  <li><i class="tiny material-icons">phone</i><a class="grey-text text-lighten-3" href="#!">0727014069</a></li>
                </ul>
              </div>
            </div>
          </div>
           <div class="footer-copyright teal-light">
            <div class="container center">ShareRide Inc</div>
          </div>
          <div class="footer-copyright teal">
            <div class="container center">All Rights Reserved</div>
          </div>
      </footer> 
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/modal.js"></script>
      <script type="text/javascript" src="app/functions/signup.js"></script>
      <script type="text/javascript" src="app/functions/signin.js"></script>
      <script type="text/javascript" src="assets/js/jquery.lettering.js"></script>
      <script type="text/javascript" src="assets/js/jquery.textillate.js"></script>
      <script type="text/javascript" src="assets/js/textillateMod.js"></script>
      <script type="text/javascript" src="assets/js/material-inits.js"></script>

      
     

    </body>
  </html>