<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<!-- InstanceBegin template="/Templates/Main Template.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>NUSC | E-Board</title>
		<!-- InstanceEndEditable -->
		</head>
		<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

			<?=get_header('parent');?>
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
							<a href="Male Athletes/<?=get_page_link($M_President)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_President);?>.jpg" alt="<?=$M_President->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=get_page_link($M_President)?>.php"><?=$M_President->first_name.' '.$M_President->last_name ?></a>
								</b>
							</p>
							<p align="center">President</p>
						</div>
						<div class="eboard_member first2" align="center">
							<a href="Male Athletes/<?=get_page_link($M_VP)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_VP);?>.jpg" width="150" height="224" alt="<?=$M_VP->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=get_page_link($M_VP)?>.php"><?=$M_VP->first_name.' '.$M_VP->last_name ?></a>
								</b>
							</p>
							<p align="center">Vice President</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Male Athletes/<?=get_page_link($M_Treasurer)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_Treasurer);?>.jpg" width="150" height="224" alt="<?=$M_Treasurer->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=get_page_link($M_Treasurer)?>.php"><?=$M_Treasurer->first_name.' '.$M_Treasurer->last_name ?></a>
								</b>
							</p>
							<p align="center">Treasurer</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Male Athletes/<?=get_page_link($M_Secretary)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_Secretary);?>.jpg" width="150" height="224" alt="<?=$M_Secretary->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=get_page_link($M_Secretary)?>.php"><?=$M_Secretary->first_name.' '.$M_Secretary->last_name ?></a>
								</b>
							</p>
							<p align="center">Secretary</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Male Athletes/<?=get_page_link($M_SID)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($M_SID);?>.jpg" width="150" height="224" alt="<?=$M_SID->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=get_page_link($M_SID)?>.php"><?=$M_SID->first_name.' '.$M_SID->last_name ?></a>
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
							<a href="Female Athletes/<?=get_page_link($W_President)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_President);?>.jpg" alt="<?=$W_President->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=get_page_link($W_President)?>.php"><?=$W_President->first_name.' '.$W_President->last_name ?></a>
								</b>
							</p>
							<p align="center">President</p>
						</div>
						<div class="eboard_member first2" align="center">
							<a href="Female Athletes/<?=get_page_link($W_VP)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_VP);?>.jpg" width="150" height="224" alt="<?=$W_VP->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=get_page_link($W_VP)?>.php"><?=$W_VP->first_name.' '.$W_VP->last_name ?></a>
								</b>
							</p>
							<p align="center">Vice President</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Female Athletes/<?=get_page_link($W_Treasurer)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_Treasurer);?>.jpg" width="150" height="224" alt="<?=$W_Treasurer->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=get_page_link($W_Treasurer)?>.php"><?=$W_Treasurer->first_name.' '.$W_Treasurer->last_name ?></a>
								</b>
							</p>
							<p align="center">Treasurer</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Female Athletes/<?=get_page_link($W_Secretary)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_Secretary);?>.jpg" width="150" height="224" alt="<?=$W_Secretary->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=get_page_link($W_Secretary)?>.php"><?=$W_Secretary->first_name.' '.$W_Secretary->last_name ?></a>
								</b>
							</p>
							<p align="center">Secretary</p>
						</div>
						<div class="eboard_member" align="center">
							<a href="Female Athletes/<?=get_page_link($W_SID)?>.php">
								<img src="../../Core Images/Team Shots/<?=get_last_first($W_SID);?>.jpg" width="150" height="224" alt="<?=$W_SID->first_name ?>" />
							</a>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=get_page_link($W_SID)?>.php"><?=$W_SID->first_name.' '.$W_SID->last_name ?></a>
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
