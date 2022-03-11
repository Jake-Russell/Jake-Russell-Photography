<?php include 'sendEmail.php' ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Jake Russell Photography | Contact</title>
		<meta name="description" content="A Showcase of Automotive Photography">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">

		<!-- Favicon Integration -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#666666">
		<meta name="apple-mobile-web-app-title" content="Jake Russell Photography">
		<meta name="application-name" content="Jake Russell Photography">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Google Fonts Integration: https://fonts.google.com -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400|Opensans" rel="stylesheet">

		<!-- Normalize to clean up & standardize the borwser default styles: http://necolas.github.io/normalize.css/ -->
		<link rel="stylesheet" href="css/normalize.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/styles.css">

		<!-- Custom JS -->
		<script src="js/main.js"></script>

		<!-- Modernizr allows HTML5 elements to work in older browsers: http://modernizr.com/ -->
		<script src="js/modernizr.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a class="navbar-brand" href="index.html"><img id="page_logo"src="images/logos/jake_russell_photography_logo.png" alt=""></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="index.html">Home</a>
		      </li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Gallery
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="portraits.html">Portraits</a>
							<a class="dropdown-item" href="landscapes.html">Landscapes</a>
							<a class="dropdown-item" href="architecture.html">Architecture</a>
							<a class="dropdown-item" href="still_life.html">Still Life</a>
							<a class="dropdown-item" href="travel.html">Travel</a>
						</div>
					</li>
		      <li class="nav-item">
		        <a class="nav-link" href="about.html">About</a>
		      </li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Contact</a>
					</li>
		    </ul>
		  </div>
		</nav>

    <?php echo $alert; ?>

		<div class="flexcontainer">
			<div class="leftHalf">
				<h1>Contact</h1>

				<p id="contactText">If you've got any questions or queries, then please feel free to get in touch via email or the submission form.</p>

				<div class="emailContainer">
					<a href="mailto:jake@megster.net" id="emailLink"><img class="image_on emailLabel" src="images/labels/email_label.png" alt="">
					<img class="image_off emailLabel" src="images/labels/email_label_hover.png" alt=""></a>
				</div>

				<div class="image-container">
					<img id="contactImage" src="images/hero_images/jake_russell_silhouette.jpg" alt="">
				</div>
			</div>

	    <div class="rightHalf">
        <form action="" method="post">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name" required>

          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Your email address" required>

          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Subject" required>

          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

          <input type="submit" name="submit" value="Submit">

        </form>
		  </div>
		</div>


		<div id="contact">
			<div class="container clearfix">
				<h2>Contact</h2>
				<p>Please feel free to contact me <a href="#">here</a></p>
				<div class="logo_container">
					<a href="https://www.instagram.com/jake.russell1/"><img class="logo" src="images/logos/instagram_logo.png" alt=""></a>
					<a href="https://twitter.com/JakeSnaps"><img class="logo" src="images/logos/twitter_logo.png" alt=""></a>
					<a href="https://www.linkedin.com/in/jake-russell-318983159/"><img class="logo" src="images/logos/linkedin_logo.png" alt=""></a>
					<a href="https://500px.com/p/jake_russell1?view=photos"><img class="logo" src="images/logos/500px_logo.png" alt=""></a>
				</div>
			</div>
		</div>

		<footer class="main">
			<div class="container clearfix">
				<div id="copyright">
					<p>Copyright &copy; 2020 <strong>Jake Russell</strong> | All Rights Reserved</p>
				</div>
			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179550826-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-179550826-1');
		</script>

	</body>
</html>
