 <!DOCTYPE html>
 <html>

 <head>


 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<!-- Bootstrap CSS -->
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 	<?php echo $this->Html->charset(); ?>
 	<title>

 	</title>

 	<style>
 		ul {
 			list-style-type: none;
 			margin: 0;
 			padding: 0;
 			overflow: hidden;
 			background-color: #333;
 			position: -webkit-sticky;
 			/* Safari */
 			position: sticky;
 			top: 0;
 		}

 		li {
 			float: left;
 		}

 		li a {
 			display: block;
 			color: white;
 			text-align: center;
 			padding: 14px 16px;
 			text-decoration: none;
 		}

 		.active {
 			background-color: pink;
 		}

 		/* h1 {
 			/* background: #fff; */
 			/* color: palevioletred;
 			font-size: 100%;
 			width: fit-content;
 			width: 100px; */
 		
 	</style>




 	<?php
		echo     $this->html->css('mystyle1');
		?>


 	<?php
		// echo $this->Html->script('jquery'); // Include jQuery library
		?>

 </head>

 <body>
 	<div id="container">
 		<div id="header">

 			<h2 class="logo">࿐ཽ༵༆༒ॐ नमः शिवाय༒༆࿐ཽ༵</h2>



 			<ul>
 				<li><a class="active" href="#home">Home</a></li>
 				<li><a class="hover" href="#news">News</a></li>
 				<li><a href="#contact">Contact</a></li>
 			</ul>



 			<div id="content">

 				<?php echo $this->Session->flash(); ?>

 				<?php echo $this->fetch('content'); ?>
 			</div>

 			<footer class="footer">

 				<!-- Footer Elements -->
 				<div class="container">

 					<!-- Grid row-->
 					<div class="row">

 						<!-- Grid column -->
 						<div class="col-md-12 py-5">
 							<div class="mb-5 flex-center">

 								<!-- Facebook -->
 								<a class="fb-ic">
 									<i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
 								</a>
 								<!-- Twitter -->
 								<a class="tw-ic">
 									<i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
 								</a>
 								<!-- Google +-->
 								<a class="gplus-ic">
 									<i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
 								</a>
 								<!--Linkedin -->
 								<a class="li-ic">
 									<i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
 								</a>
 								<!--Instagram-->
 								<a class="ins-ic">
 									<i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
 								</a>
 								<!--Pinterest-->
 								<a class="pin-ic">
 									<i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
 								</a>
 							</div>
 						</div>
 						<!-- Grid column -->

 					</div>
 					<!-- Grid row-->

 				</div>
 				<!-- Footer Elements -->

 				<!-- Copyright -->
 				<div class="footer">© 2020 Copyright:
 					<a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
 				</div>
 				<!-- Copyright -->

 			</footer>

 			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


 			</p>
 		</div>
 	</div>

 </body>

 </html>