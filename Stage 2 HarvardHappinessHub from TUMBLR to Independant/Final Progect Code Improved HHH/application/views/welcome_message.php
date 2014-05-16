<!DOCTYPE html>
<html>
	<head>

		<title>HarvardHappiness</title>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>

		<link href='/assets/stylesheets/index.css' rel='stylesheet' type='text/css'>
		<link href='/assets/stylesheets/modal.css' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type='text/javascript' src='/assets/thirdparty/jquery.modal.js'></script>
		<script type='text/javascript' src='/assets/thirdparty/site.js'></script>


	</head>
	<body>
		<div class="overlay"></div>
		<div class="body-wrapper">
			<div class="body-container">
				<div class="top-bar">
					<div class="left">
						<a href="/" class="logo">H</a>
					</div>
					<div class="right">
						<a href="/index.php/about" class="menu-item">About</a>
						<a href="/index.php/explore" class="menu-item">Explore</a>
						<a href="/index.php/related" class="menu-item">Related Links</a>
						<a href="/index.php/contact" class="menu-item last-item">Contact</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="content-container">
					<div class="title">Harvard Happiness</div>
					<div class="desc">We are taking the Harvard Course on Happiness (1504) - with related research - and connecting it with YOUR stories. All you have to do is post your response to the weekly prompt question. Every week one of the stories will be featured with more research on related concepts and links to readings. Welcome to the Harvard Happiness Hub!</div>
					<div class="menu">
						<a href="#subscribe" class="menu-item flat-button modalLink">Subscribe</a>
						<a href="/index.php/explore" class="menu-item button">Explore HarvardHappiness</a>
					</div>
				</div>
				<div id="subscribe" class="modal">
					<div class="modal-top-bar">
			        	<h1 class="modal-title">Subscribe<p class="closeBtn">X</p></h1>
			        </div>
			        <form id="subscribe" method="POST" action="/index.php/subscriber">
			        	<input type="email" id="email" name="email" placeholder="Your email id" required>
			        	<label class="error" id="email-error" style="display: none;">Kindly enter your email id!</label>
			        	<input type="submit" value="Subscribe" id="submit-subscribe">
			        </form>
			    </div>
			</div>
			<div class="fixed-social">
			<a href="#" class="social fb"></a>
			<br/>
			<a href="#" class="social tw"></a>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){  

			// $('#submit-subscribe').click(function(e){
			// 	if($('#email').val() == "")
			// 	{
			// 		$('#email-error').css('display', 'block');
			// 		e.preventDefault();
			// 	}
			// 	else
			// 		$('#email-error').css('display', 'none');
			// });
			
		});
	</script>
</html>