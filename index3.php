<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/parent_style.css';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>NUSC | Home</title>
		<script type="text/javascript">
			function MM_preloadImages() { //v3.0
				var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
				var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
			if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
			}

			function MM_swapImgRestore() { //v3.0
				var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
			}

			function MM_findObj(n, d) { //v4.01
				var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
				d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
				if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
				for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
				if(!x && d.getElementById) x=d.getElementById(n); return x;
			}

			function MM_swapImage() { //v3.0
				var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
				if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
			}
		</script>
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
			<span class="Announcement"></span>
			<?=get_index_slides();?>
			<div class="home_container">
				<div class="row">
					<div class="fb_container" align="center">
						<div class="fb-page" data-href="https://www.facebook.com/NUSwimmingClub" data-width="500px" data-height="430" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NUSwimmingClub"><a href="https://www.facebook.com/NUSwimmingClub">Northeastern University Swim Club</a></blockquote></div></div>
					</div>
					<div class="twitter_container" align="center">
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
