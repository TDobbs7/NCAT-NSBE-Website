<html>
	<head>
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
   		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    	<link rel="stylesheet" href="css/signup.css" type="text/css" media="all">

		<title>Membership Sign Up</title>
	</head>

	<body>
		<div class="body1">
      		<div class="main">
				<header>
		        	<div class="wrapper">
			            <h1><a href="index.html" id="logo">National Society of Black Engineers</a></h1>
			            <nav>
			            	<ul id="menu">
			                	<li><a href="index.html">Home</a></li>
			                	<li><a href="aboutus.html">About Us</a></li>
			                	<li><a href="directory.html"> Directory</a></li>

				                <script type="text/javascript">
				                	function openpopup(popurl){
				                  		var winpops=window.open(popurl,"","width=200,height=200,status,resizable")
				                 	}
				                </script>
				    
				                <li><a href="https://orgsync.com/5919/chapter">Programs & Events</a></li>
				                <li class="active"><a href="signup.html">Sign Up</a></li>
			              	</ul>
			            </nav>
		          	</div>
		      	</header>

				<?php
				    $fn = $_POST['txtFN'];
				    $ln = $_POST['txtLN'];
				    $major = $_POST['txtMajor'];
				    $secMajor = $_POST['txtSecMajor'];
				    $minor = $_POST['txtMinor'];
				    $class = $_POST['class'];
				    $nsbeid = $_POST['txtID'];
				    $email = $_POST['txtEmail'];
				    $phone = $_POST['txtPN'];


				    if(isset($fn) && !empty($fn) AND isset($ln) && !empty($ln) AND isset($major) && !empty($major) 
				        AND isset($secMajor) && !empty($secMajor) AND isset($minor) && !empty($minor) AND isset($class) && !empty($class)
				        AND isset($nsbeid) && !empty($nsbeid) AND isset($email) && !empty($email) AND isset($phone) && !empty($phone)) {

				        $m = new MongoClient();
				        $db = $m->NSBEDir;
				        $coll = $db->EBoard;

				        $member = array("fn"=>$fn, "ln"=>$ln, "major"=>$major, "secMajor"=>$secMajor, "minor"=>$minor, "class"=>$class, "nsbeid"=>$nsbeid, "email"=>$email, "phone"=>$phone);

				        $coll->insert($member);
				    }

				    else {}
				?>

		      	<section class="info lineup">
		      		<h2>Sign Up Form</h2>
		      		<p>* denotes a required field</p><br>

			      	<form action="" method="post">
			     		<p id="pFN">
				    		*First Name: <input type="text" name="txtFN" onkeypress="return maskName(event)">
				      	</p>

				      	<p id="pLN">
					      	*Last Name: <input type="text" name="txtLN" onkeypress="return maskName(event)">
					    </p>
                        
                        <p>
                            Position: <input type="text" name="txtPos" onkeypress="return maskName(event)">
                        </p>

					    <p id="pMajor">
					    	*Major: <input type="text" name="txtMajor" onkeypress="return maskName(event)">
					    </p>

					    <p id="pSecMajor">
					      	Second Major: <input type="text" name="txtSecMajor" onkeypress="return maskName(event)">
					    </p>

					    <p id="pMinor">
					      	Minor: <input type="text" name="txtMinor" onkeypress="return maskName(event)">
					    </p>

					    <p id="pClass">
					      	*Classification: <br>
				      			<input type="radio" name="class" id="radFr"/> Freshman <br>
					      		<input type="radio" name="class" id="radSo"/> Sophomore <br>
					      		<input type="radio" name="class" id="radJu"/> Junior <br>
					      		<input type="radio" name="class" id="radSe"/> Senior <br>
					      		<input type="radio" name="class" id="radGr"/> Graduate <br>
					    </p>

						<p id="pID">
					    	NSBE ID: <input type="text" name="txtID" maxlength="6" onkeypress="return maskID(event)">
					    </p>
					    
					    <p id="pEmail">
					    	*Email: <input type="text" name="txtEmail">
					    </p>
					    
					    <p id="pPN">
					    	Phone Number: <input type="text" name="txtPN" maxlength="12" onkeypress="return maskPN(event)"/>
					    </p>

					    <p id="pBtn">
					    	<input type="button" value="Submit" id="btnSubmit">
					    </p>
			      	</form>
		  		</section>

		  		<br><br>
		  		<section id="pics" class="lineup">
					<img src="images/signup_img1.png" height="215" width="205" id="pic1">
					<img src="images/signup_img2.png" height="215" width="205" id="pic2">
					<img src="images/signup_img3.png" height="215" width="205" id="pic3">
		  		</section>

		  		<div class="main">
			      	<!-- footer -->
			      	<footer>
			        	<div class="wrapper">
			          		<section class="col5">
			            		<div class="wrapper">
			              			<section class="col4">
			                		<h3>Follow Us </h3>
			                		<ul id="icons">
			                  			<li><a href="https://www.facebook.com/groups/2200245274/" target="_blank" ><img src="images/icon1.jpg" alt=""><span>Facebook</span></a></li>
			                  			<li><a href="https://twitter.com/NCATNSBE" target="_blank"><img src="images/icon2.jpg" alt=""><span>Twitter</span></a></li>
			                  			<li><img src="images/icon3.jpg" alt=""><span>Instagram: 1213_nsbe</span></a></li>
			                		</ul>
			              	</section>
			              	
			              	<section class="col4 pad_left1">
			                	<h3>Contact Us:</h3>
			                	<ul id="why_us">
			                  		<li>President: ncatnsbepres@gmail.com</li>
			                  		<li>Vice President: ncatnsbevp@gmail.com</li>
			                  		<li>Secretary: ncatnsbesecretary@gmail.com</li>
			                	</ul>
			              	</section>

			              	<section class="col4 pad_left1">
			                	<ul id="why_us">
			    					</br></br></br>
			                  		<li>Treasurer: ncatnsbetreasurer@gmail.com</li>
			                  		<li>Programs Chair: </br>ncatnsbeprograms@gmail.com</li>
			     
			    	            </ul>
			                </section>
			            </div>
			            
			            <div id="footer_link">Copyright &copy; <a href="#">NSBE North Carolina A&T State University Chapter</a> All Rights Reserved<br>  
			          	</section>
			        	</div>
			        	<!-- {%FOOTER_LINK} -->
			      	</footer>
			      	<!-- / footer -->
				</div>
			</div>
		</div>
	</body>
</html>