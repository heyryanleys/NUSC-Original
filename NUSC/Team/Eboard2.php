<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/parent_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<!-- InstanceBegin template="/Templates/Main Template.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>NUSC | E-Board</title>
		<!-- InstanceEndEditable -->
		</head>
		<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

			<?php
			function get_header2($who) {
				$html = '';
			
				$html .='<div class="MenuDiv1">';
				if ($who == 'parent' || $who == 'home') {
					$html .='<a class="map" href="../../index.php"></a>';
				}
				else if ($who == 'child') {
					$html .='<a class="map" href="../../../index.php"></a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a class="map" href="../../../../index.php"></a>';
				}
				$html .='<div id="div1">';
				$html .='<div align="center">';
				$html .='<ul>';
				$html .='<li>';
				$html .='<a href="">Team</a>';
				$html .='<ul>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Team/Womens%20Team.php">Womens Team</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../Womens%20Team.php">Womens Team</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../Womens%20Team.php">Womens Team</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Team/Womens%20Team.php">Womens Team</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Team/Mens%20Team.php">Mens Team</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../Mens%20Team.php">Mens Team</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../Mens%20Team.php">Mens Team</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Team/Mens%20Team.php">Mens Team</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Team/Coaches.php">Coaches</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../Coaches.php">Coaches</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../Coaches.php">Coaches</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Team/Coaches.php">Coaches</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Team/Eboard.php">E-Board</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../Eboard.php">E-Board</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../Eboard.php">E-Board</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Team/Eboard.php">E-Board</a>';
				}
				$html .='</li>';
				$html .='</ul>';
				$html .='</li>';
				$html .='</ul>';
				$html .='<ul>';
				$html .='<li>';
				$html .='<a href="">Schedule</a>';
				$html .='<ul>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Schedule/Practice.php">Practice</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../Schedule/Practice.php">Practice</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../Schedule/Practice.php">Practice</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Schedule/Practice.php">Practice</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Schedule/2014-2015.php">2014-2015</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../Schedule/2014-2015.php">2014-2015 </a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../Schedule/2014-2015.php">2014-2015 </a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Schedule/2014-2015.php">2014-2015 </a>';
				}
				$html .='</li>';
				$html .='</ul>';
				$html .='</li>';
				$html .='</ul>';
				$html .='<ul>';
				$html .='<li>';
				$html .='<a href="">Records</a>';
				$html .='<ul>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Records/Records.php">Team Records</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../Records/Records.php">Team Records</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../Records/Records.php">Team Records</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Records/Records.php">Team Records</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Records/Top10.php">Top 10 Times</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../Records/Top10.php">Top 10 Times</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../Records/Top10.php">Top 10 Times</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Records/Top10.php">Top 10 Times</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Records/Past%20Seasons.php">Past Seasons</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../Records/Past%20Seasons.php">Past Seasons</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../Records/Past%20Seasons.php">Past Seasons</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Records/Past%20Seasons.php">Past Seasons</a>';
				}
				$html .='</li>';
				$html .='</ul>';
				$html .='</li>';
				$html .='</ul>';
				$html .='<ul>';
				$html .='<li>';
				$html .='<a href="">About Us</a>';
				$html .='<ul>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../About%20Us/Faq.php">FAQ</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../About%20Us/Faq.php">FAQ</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../About%20Us/Faq.php">FAQ</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/About%20Us/Faq.php">FAQ</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../About%20Us/History.php">Team History</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../About%20Us/History.php">Team History</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../About%20Us/History.php">Team History</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/About%20Us/History.php">Team History</a>';
				}
				$html .='</li>';
				/*$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../About%20Us/Past%20Swimmers.php">Past Swimmers</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../About%20Us/Past%20Swimmers.php">Past Swimmers</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../About%20Us/Past%20Swimmers.php">Past Swimmers</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/About%20Us/Past%20Swimmers.php">Past Swimmers</a>';
				}
				$html .='</li>';*/
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../About%20Us/Constitution.php">Constitution</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../About%20Us/Constitution.php">Constitution</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../About%20Us/Constitution.php">Constitution</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/About%20Us/Constitution.php">Constitution</a>';
				}
				$html .='</li>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../About%20Us/Forms.php">Forms</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../About%20Us/Forms.php">Forms</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../About%20Us/Forms.php">Forms</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/About%20Us/Forms.php">Forms</a>';
				}
				$html .='</li>';
				$html .='</ul>';
				$html .='</li>';
				$html .='</ul>';
				$html .='<ul>';
				$html .='<li>';
				if ($who == 'parent') {
					$html .='<a href="../Contact%20Us/Contactus.php">Contact Us</a>';
				}
				else if ($who == 'child') {
					$html .='<a href="../../Contact%20Us/Contactus.php">Contact Us</a>';
				}
				else if ($who == 'grandchild') {
					$html .='<a href="../../../Contact%20Us/Contactus.php">Contact Us</a>';
				}
				else if ($who == 'home') {
					$html .='<a href="NUSC/Contact%20Us/Contactus.php">Contact Us</a>';
				}
				$html .='</ul>';
				$html .='<div id="MediaDiv">';
				if ($who == 'parent') {
					$html .='<img src="../../Core%20Images/facebook.png" />';
					$html .='<img src="../../Core%20Images/twitter.png" />';
					$html .='<img src="../../Core%20Images/instagram.png" />';
				}
				else if ($who == 'child') {
					$html .='<img src="../../../Core%20Images/facebook.png" />';
				}
				else if ($who == 'grandchild') {
					$html .='<img src="../../../../Core%20Images/facebook.png" />';
				}
				else if ($who == 'home') {
					$html .='<img src="Core%20Images/facebook.png" />';
				}
				$html .='</div>';
				$html .='</div>';
				$html .='</div>';
				$html .='</div>';
			
				return $html;
			}
			echo get_header2('parent');
			?>
			<!-- InstanceBeginEditable name="Body" -->
			<div id="BodyDiv1">
				<div class="eboard_container">
					<div class="row title_row">
						<b>
							<big>
								<big>E-Board</big>
							</big>
						</b>
					</div>
					<div class="row eboard subheading">
						<b>
								<big>Men's E-Board</big>
						</b>
					</div>
					<div class="row">
						<div class="eboard_member first2 first1" align="center">
							<a href="Male Athletes/<?=$M_President->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_President);?>.jpg" alt="<?=$M_President->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_President->last_name ?>.php"><?=$M_President->first_name.' '.$M_President->last_name ?></a>
								</b>
							</p>
							<p align="center">President</p>
						</div>
						<div class="eboard_member first2" align="center">
							<a href="Male Athletes/<?=$M_VP->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_VP);?>.jpg" width="150" height="224" alt="<?=$M_VP->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_VP->last_name ?>.php"><?=$M_VP->first_name.' '.$M_VP->last_name ?></a>
								</b>
							</p>
							<p align="center">Vice President</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Male Athletes/<?=$M_Treasurer->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_Treasurer);?>.jpg" width="150" height="224" alt="<?=$M_Treasurer->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_Treasurer->last_name ?>.php"><?=$M_Treasurer->first_name.' '.$M_Treasurer->last_name ?></a>
								</b>
							</p>
							<p align="center">Treasurer</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Male Athletes/<?=$M_Secretary->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_Secretary);?>.jpg" width="150" height="224" alt="<?=$M_Secretary->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_Secretary->last_name ?>.php"><?=$M_Secretary->first_name.' '.$M_Secretary->last_name ?></a>
								</b>
							</p>
							<p align="center">Secretary</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Male Athletes/<?=$M_SID->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_SID);?>.jpg" width="150" height="224" alt="<?=$M_SID->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_SID->last_name ?>.php"><?=$M_SID->first_name.' '.$M_SID->last_name ?></a>
								</b>
							</p>
							<p align="center">SID</p>
						</div>
					</div>
					<div class="row eboard subheading">
						<b>
								<big>Women's E-Board</big>
						</b>
					</div>
					<div class="row eboard">
						<div class="eboard_member first2 first1" align="center">
							<a href="Female Athletes/<?=$W_President->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_President);?>.jpg" alt="<?=$W_President->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_President->last_name ?>.php"><?=$W_President->first_name.' '.$W_President->last_name ?></a>
								</b>
							</p>
							<p align="center">President</p>
						</div>
						<div class="eboard_member first2" align="center">
							<a href="Female Athletes/<?=$W_VP->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_VP);?>.jpg" width="150" height="224" alt="<?=$W_VP->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_VP->last_name ?>.php"><?=$W_VP->first_name.' '.$W_VP->last_name ?></a>
								</b>
							</p>
							<p align="center">Vice President</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Female Athletes/<?=$W_Treasurer->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_Treasurer);?>.jpg" width="150" height="224" alt="<?=$W_Treasurer->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_Treasurer->last_name ?>.php"><?=$W_Treasurer->first_name.' '.$W_Treasurer->last_name ?></a>
								</b>
							</p>
							<p align="center">Treasurer</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Female Athletes/<?=$W_Secretary->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_Secretary);?>.jpg" width="150" height="224" alt="<?=$W_Secretary->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_Secretary->last_name ?>.php"><?=$W_Secretary->first_name.' '.$W_Secretary->last_name ?></a>
								</b>
							</p>
							<p align="center">Secretary</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Female Athletes/<?=$W_SID->last_name ?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_SID);?>.jpg" width="150" height="224" alt="<?=$W_SID->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_SID->last_name ?>.php"><?=$W_SID->first_name.' '.$W_SID->last_name ?></a>
								</b>
							</p>
							<p align="center">SID</p>
						</div>
					</div>
				</div>
			</div>
			<!-- InstanceEndEditable -->
			<?=get_footer('parent');?>
			<!-- InstanceEnd -->
		</html>
