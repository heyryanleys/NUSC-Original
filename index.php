<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/NUSC/CustomJS.js';?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/NUSC/Stylesheets/main_style.css';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>NUSC | Home</title>
		<link rel="stylesheet" href="flexslider.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="jquery.flexslider.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(window).load(function() {
				$('.flexslider').flexslider();
			});
		</script>
		<style>
			a.twitter-timeline{
				width: 474px;
				margin: 5px;
			}
		</style>
	</head>
	<body background="Core%20Images/Underwater%20Background_test_2.jpg"  onload="MM_preloadImages('Core%20Images/Go%20NU%20Logo.png','Core%20Images/Campus%20Rec%20Logo.png','Core%20Images/ECCColor.png')">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<?=get_header('home');?>
		<div id="BodyDiv1">
			<?=get_index_slides();?>
			<div class="home_container">
				<div class="row">
					<div class="fb_container fade_in" align="center">
						<div class="fb-page" data-href="https://www.facebook.com/NUSwimmingClub" data-width="500px" data-height="430" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NUSwimmingClub"><a href="https://www.facebook.com/NUSwimmingClub">Northeastern University Swim Club</a></blockquote></div></div>
					</div>
					<div class="twitter_container fade_in" align="center">
						<a class="twitter-timeline" width="323" height="430" margin="5" href="https://twitter.com/NUSwimClub" data-widget-id="552851114069331969">Tweets by @NUSwimClub</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
				<div class="row donate" colspan="2">
					<h2>Interested in supporting your Huskies??</h2>
					<div class="DonateHere">
							<a href="https://securelb.imodules.com/s/1386/giving.aspx?sid=1386&amp;gid=1&amp;pgid=1392&amp;cid=2629">
								<img src="Core Images/donatelogonew.png" width="175" height="51" />
							</a>
					</div>
				</div>
			</div>
		</div>
		<?=get_footer('home');?>
	</body>
</html>
