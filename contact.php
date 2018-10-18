<?php include 'header.php' ?>
<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/shake.jpg);background-size: cover;background-position: center;" data-stellar-background-ratio="0.5">
		<!-- <div class="overlay"></div> -->
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row">
						<div class="col-md-10 mt-text animate-box" data-animate-effect="fadeInUp">
							
							<h1>Contact Us</h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php $message=$_GET['message'];?>
<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<h4><?php
          echo $message;
          
        ?></h4>
					<form action="mailer/index.php" method="get">
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" id="name" class="form-control" name="name" placeholder="Your Name">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="Phone No">Phone No</label>
								<input type="text" id="phone" class="form-control" name="phone" placeholder="Your Phone">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="email" class="form-control" name="email" placeholder="Your Email Address">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="purpose">purpose</label>
								<input type="text" id="purpose" class="form-control" name="purpose" placeholder="Your Purpose">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="Short Description">Short Description</label>
								<textarea name="ShortDescription" id="ShortDescription" cols="20" rows="10" class="form-control" placeholder="Write a Short Description"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="phone"><a href="tel://9591539216">+91 959 153 9216</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">abroadgulfjobs@outlook.com</a></li>
							<li class="url"><a href="http://www.gulfjobsabroad.com">gulfjobsabroad.com</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php' ?>