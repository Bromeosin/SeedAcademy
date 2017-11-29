<?php
/*
 * Template Name: Landing Page
 */

 get_header(); ?>

<style type="text/css">
  
#abc {
width:100%;
height:100%;
opacity:1.0;
top:0;
left:0;
display:none;
position:fixed;
overflow:auto;
}

</style>

<div class="masthead-background">
	<div class="container space">
		<div class="row">
			<div class="two-thirds column">
			<h1>Digital Skills Training for Schools</h1>
			<p>We offer 8 - 10 week digital skills courses for C.E., GCSE and A-Level students from qualified and in-industry teachers, 2-hours per week in groups of 6 - 8 children.</p>
			<h6>Leave your email with us and we'll call you to get started.</h6>
			<div class="button-container space"><a id="enquiry" onclick="div_show()" class="green-button">Enquire now</a></div>
			</div>
			<div class="one-third column">
			</div>
		</div>
	</div>
</div>

<div style="z-index: 1000000;" class="container">
	<div class="row">
		<div id="abc">
      		<!-- Popup Div Starts Here -->
          		<form name="contactform" method="post" action="/contact.php">
          			<div class="pop-up">
          				<div style="padding: 2rem 4rem; color: white;">
	          				<p style="font-weight: bold; font-size: 2.4rem; vertical-align: middle;">Tell us about your project!</p>
	          				<p style="margin-top: 0;">We love to hear about your business goals and how we can develop marketing strategies to help you achieve them.</p>
	            			<input class="u-pull-left" style="width: 48%; margin-right: 4%;" placeholder="Your name" type="text" name="yourname">
							<input class="u-pull-left" style="width: 48%;" placeholder="Your email address" type="email" name="email">
							<input class="u-full-width" style="width: 48%;" placeholder="Your phone number" type="text" name="subject">
							<textarea class="u-full-width" style="width: 100%;" placeholder="How can we help you?" name="comments"></textarea>
	            			<div class="button-container small-space"><input class="green-button u-full-width" type="submit" value="Send Message"></div>
	            			<a style="text-decoration: none; color: white;" href="#" onclick="div_hide()">Close window</a>
	            		</div>
            		</div>
            	</form>
            </div>
        </div>
    </div>
</div>

<div class="grey-background">
	<div class="container space">
		<div class="row">
			<div class="three columns">
				<img style="margin-top: 1.6rem; margin-bottom: 1rem;" src="/wp-content/themes/seed-academy/images/bbc.png" width="75%" height="auto">
			</div>
			<div class="three columns">
				<img style="margin-top: 1.6rem; margin-bottom: 1rem;" src="/wp-content/themes/seed-academy/images/huffington-post.png" width="75%" height="auto">
			</div>
			<div class="three columns">
				<img style="margin-top: 1.6rem; margin-bottom: 1rem;" src="/wp-content/themes/seed-academy/images/guardian.png" width="75%" height="auto">
			</div>
			<div class="three columns">
				<img style="margin-top: 1.6rem; margin-bottom: 1rem;" src="/wp-content/themes/seed-academy/images/moz.png" width="75%" height="auto">
			</div>
		</div>
	</div>
</div>

<div style="margin-top: 8rem;">
	<div class="container">
		<div class="row space">
			<div class="one-half column">
				<img src="/wp-content/themes/seed-academy/images/lesson-3.png" width="100%" height="auto">
			</div>
			<div class="one-half column">
				<h3>Prepare your children for the digital age</h3>
				<p>So how can we, as parents, educators and leaders, prepare our children for the digital age? <b>Without a doubt</b>, it is critical for us to equip them with digital intelligence.</p>
			</div>
		</div>
		<div class="row space">
			<div class="one-half column">
				<h3>Learn core digital skills from industry professionals</h3>
				<p>Technology moves fast. Our courses are designed and taught by industry professionals to ensure your children learn the latest  standards to prepare them for the digital world.</p>
			</div>
			<div class="one-half column">
				<img src="/wp-content/themes/seed-academy/images/lesson-2.png" width="100%" height="auto">
			</div>
		</div>
		<div class="row space">
			<div class="one-half column">
				<img src="/wp-content/themes/seed-academy/images/lesson.jpg" width="100%" height="auto">
			</div>
			<div class="one-half column">
				<h3>Close the digital skills gap for UK businesses</h3>
				<p>Our courses provide essential digital skills that 80% of businesses in the UK now say that they are missing.</p>
			</div>
		</div>
	</div>
</div>
<div class="small-blue-background">
	<div style="padding-top: 6rem; padding-bottom: 8rem;" class="container">
		<div class="row">
			<div style="margin-top: 2rem;" class="one-third column">
				<div style="margin-right: auto; margin-left: auto; text-align: left;" class="cta-container">
					<h4>Website Development for Beginners</h4>
					<p><em>£400 / student - 8-week course</em></p>
					<p>In this series of 1-hour lessons your child will learn how to build their first website.</p>
					<div class="button-container"><a class="green-button u-full-width">Enquire now</a></div>
				</div>
			</div>
			<div style="margin-top: 2rem;" class="one-third column">
				<div style="margin-right: auto; margin-left: auto; text-align: left;" class="cta-container">
					<h4>iOS App Development for Beginners</h4>
					<p><em>£600 / student - 10-week course</em></p>
					<p>In this series of 1-hour lessons your child will learn how to build their first iOS app.</p>
					<div class="button-container"><a class="green-button u-full-width">Enquire now</a></div>
				</div>
			</div>
			<div style="margin-top: 2rem;" class="one-third column">
				<div style="margin-right: auto; margin-left: auto; text-align: left;" class="cta-container">
					<h4>Android Development for Beginners</h4>
					<p><em>£600 / student - 10-week course</em></p>
					<p>In this series of 1-hour lessons your child will learn how to build their first Android app.</p>
					<div class="button-container"><a class="green-button u-full-width">Enquire now</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="margin-top: 4rem;">
	<div class="container">
		<div class="row">
			<div style="margin-left: auto; margin-right: auto; text-align: center;" class="twelve columns small-space">
				<h5>Seed Academy is trusted by over 200 independent schools in the UK.</h5>
				<h6 class="small-space">Want to learn more about how we help students get to grips with digital skills?</h6>
				<div class="button-container"><a class="green-button">Contact our team</a>
			</div>
		</div>
	</div>
</div>
<div class="row"></div>

 <?php get_footer() ; ?>