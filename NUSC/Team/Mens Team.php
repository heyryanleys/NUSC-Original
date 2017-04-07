<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>NUSC | Men's Team</title>
	</head>
	<body onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

		<?=get_header('parent');?>
		<div id="BodyDiv1">
			<div class="roster_container">
				<div class="row title_row">
					<h2>2015-2016 Men's Roster</h2>
				</div>
				<div class="row column_headings">
					<div class="pic"></div>
					<div class="name"><p><strong>Name</strong></p></div>
					<div class="year"><p><strong>Class</strong></p></div>
					<div class="stroke"><p><strong>Stroke</strong></p></div>
					<div class="high_school"><p><strong>High School</strong></p></div>
					<div class="hometown"><p><strong>Hometown</strong></p></div>
				</div>
				<?=build_mens_roster($current_men);?>
			</div>
		</div>
		<?=get_footer('parent');?>
	</body>
</html>
