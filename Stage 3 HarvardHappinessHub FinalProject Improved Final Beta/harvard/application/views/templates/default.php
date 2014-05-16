<!DOCTYPE html>
<html>
	<head>

		<title>Harvard Happiness - <?php echo $title; ?></title>
		<link href='/assets/stylesheets/common.css' rel='stylesheet' type='text/css'>
		<link href='/assets/stylesheets/modal.css' rel='stylesheet' type='text/css'>

		<?php
			foreach ($css as $key) {
		?>
				<link href='<?php echo $key;?>' rel='stylesheet' type='text/css'>
		<?php
			}
		?>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type='text/javascript' src='/assets/thirdparty/jquery.modal.js'></script>
		<script type='text/javascript' src='/assets/thirdparty/site.js'></script>

		<?php
			foreach ($js as $key) {
		?>
				<script type='text/javascript' src='<?php echo $key;?>'></script>
		<?php
			}
		?>		

	</head>
	<body>
		<div class="overlay"></div>
		<div class="body-wrapper">
			<div class="body-container">
				<div class="top-bar">
					<div class="left">
						<a href="/" class="logo-text">Harvard Happiness</a>
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

					<?php echo $body; ?>

				</div>
				<div class="footer">
					<div class="left">
						<a href="#subscribe" class="subscribe modalLink">Subscribe for Newsletter</a>
					</div>
					<div class="right">
						<a href="#" class="social fb"></a>
						<a href="#" class="social tw"></a>
					</div>
					<div class="clear"></div>
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
		</div>
	</body>
</html>