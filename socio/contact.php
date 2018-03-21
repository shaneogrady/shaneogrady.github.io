<?PHP

if(!$_POST) exit;

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$fname = $_POST['fname'];
$position = $_POST['position'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$locations = $_POST['locations'];

$address = 'shaneo@sociolocal.us';

$received_subject = "You have been contacted by $fname";

$received_body = "$fname contacted you from $position";
$received_content = "$message";
$received_reply = "Reply to $fname $email or call his/her phone: $phone";

$message = wordwrap( $received_body . "\r\n \r\n" . $received_content . "\r\n \r\n" . $received_reply, 100 );

$header = "From: $email";
$header .= "Reply-To: $email";

if(mail($address, $received_subject, $message, $header)) {

	// Email has sent successfully, echo a success page.

	echo "<p>&nbsp;</p>";

} else {

	echo 'ERROR!';

}

 ?>

 <html lang="en">
 <head>
	 <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/font.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
   <link rel="stylesheet" href="css/bootstrap.css">

   <script src="https://use.fontawesome.com/0c32a07eb8.js"></script>
</head>
 <body>

   <div class="wrapper">
     <header class="header header--white">
       <a href="index.html" class="logo">
         <aside>
           <span></span>
         </aside>
       </a>

			 <nav id="topnav" class="nav">
 				<div class="nav__content">
 					<div class="nav__item">
 						<div class="service-card">
 							<a href="consent.html" class="service__inner">
 								<div class="service__icon service__icon--alt hidden-xs">
 									<i class="icon-gdpr"></i>
 									<i class="icon-gdpr-red"></i>
 								</div>
                 <h5 class="service__title"><b>mobeo Consent Cloud</b></h5>
                 <p style="font-size:18px; padding-top:5px;" class="service__subtitle">Get your marketing GDPR ready with mobeo Consent Cloud before the 25th May 2018 deadline.</p>
 								<button class="custom-btn-header btn-1 hidden-xs">LEARN MORE</button>
 							</a>
 						</div>
 					</div>

 					<div class="nav__item">
 						<div class="service-card service-card--blue">
 							<a href="mobeo_mail.html" class="service__inner">
 								<div class="service__icon service__icon--alt hidden-xs">
 									<i class="ico-mail"></i>

 									<i class="ico-mail-blue"></i>
 								</div>

 								<h5 class="service__title"><b>mobeo Mail</b></h5>

 								<p style="font-size:18px; padding-top:5px;" class="service__subtitle">Our email marketing and automation platform, supporting your next successful email campaign.</p>

 								<button class="custom-btn-header btn-2 hidden-xs">LEARN MORE</button>
 							</a>
 						</div>
 					</div>

 					<div class="nav__item">
 						<div class="service-card service-card--teal">
 							<a href="pipeline.html" class="service__inner">
 								<div class="service__icon service__icon--alt hidden-xs">
 									<i class="ico-pipeline"></i>

 									<i class="ico-pipeline-teal"></i>
 								</div>

 								<h5 class="service__title"><b>mobeo Pipeline Generation</b></h5>
 								<p style="font-size:18px; padding-top:5px;" class="service__subtitle">Book more meeting, close more deals and reach your quotas with mobeo Pipeline generation</p>

 								<button class="custom-btn-header btn-3 hidden-xs">LEARN MORE</button>
 							</a>
 						</div>
 					</div>

 				</div>

 				<aside class="nav__aside">

 					<p class="nav__login social-icons social-icons-header icon-circle icon-zoom list-unstyled list-inline">

 						<a href="https://twitter.com/mobeo_apps"><i class="fa fa-twitter"></i></a>
             <a href="https://www.instagram.com/mobeo_digital/"><i class="fa fa-instagram"></i></a>
             <a href="https://www.linkedin.com/company/twelve-horses-europe" target="_blank"><i class="fa fa-linkedin"></i></a>
 					</p>

 					<ul>
 						<li>
 							<a href="index.html">Home</a>
 						</li>

 						<li>
 							<a href="http://www.mobeo.ie/blog/" target="_blank">Blog</a>
 						</li>

 						<li>
 							<a href="contact.html">Contact</a>
 						</li>

 					</ul>
 				</aside>
 			</nav>

       <aside class="header__aside">
         <a href="#" class="nav-btn2 nav-btn  js-toggle" data-class="nav-visible" data-target=".nav" data-dispatch="toggle">
         <span></span>
         <span></span>
         <span></span>
       </a>
       </aside>
     </header>

     <div class="main">

       <div class="intro intro--home intro_grey">
         <div class="intro__group">
           <h1 style="font-weight:600">
           Thank you for getting in touch
         </h1>
         <p style="font-size:22px;">Our team will be in touch with you shortly</p>
           <a href="index.html"><button class="custom-btn btn-3 btn-green">RETURN TO HOMEPAGE</button></a>
         </div>
       </div>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" async defer></script>


		<script src="js/script.js" async defer></script>
		<script src="js/custom.js" async defer></script>


</body>
 </html>
