<?php include('core/init.php');
include('libraries/Database.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Phone Book App</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
		<div class="center">
            <h1 style="text-align: center;">Phone Book App</h1>
		</div>
		<div class="large-12 columns">
			<a class="add-btn button right small" data-reveal-id="addModal">New Contact</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2>New Contact</h2>
				<form id="addContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>First Name
								<input name="first_name" type="text" placeholder="Enter First Name" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Last Name
								<input name="last_name" type="text" placeholder="Enter Last Name" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-6 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Enter Email Address" />
							  </label>
							</div>
							<div class="large-6 columns">
							  <label>Phone Number
								<input name="phone" type="text" placeholder="Enter Phone Number" />
							  </label>
							</div>
						  </div>
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
                </form>
			</div>
		</div>
	</div>
	
	<!-- Main Content -->
	<div id="pageContent"></div>
	
    <script src="js/vendor/jquery.js"></script>
	<script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
