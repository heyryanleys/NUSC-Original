<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>NUSC | Team Records</title>
		<!-- InstanceEndEditable -->
	</head>
		<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

			<?=get_header('parent');?>
			<!-- InstanceBeginEditable name="Body" -->
			<div id="BodyDiv1">
					<table width="969" style="border-collapse: collapse;” border="0">
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="37">
								<div align="center">
									<strong>
										<big>
											<big>Record Board</big>
										</big>
									</strong>
								</div>
							</td>
						</tr>
						<?=display_club_records($male_club_records,$female_club_records,$events);?>
					<table width="969" style="border-collapse: collapse;” border="0">
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="29">
								<div align="center">
									<big>
										<b>Relays</b>
									</big>
								</div>
							</td>
						</tr>
						<tr>
							<td width="190" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Women</strong>
								</div>
							</td>
							<td width="100" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Time</strong>
								</div>
							</td>
							<td width="100" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Year</strong>
								</div>
							</td>
							<td width="147" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Event</strong>
								</div>
							</td>
							<td width="190" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Men</strong>
								</div>
							</td>
							<td width="100" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Time</strong>
								</div>
							</td>
							<td width="100" bgcolor="#4F9DE8">
								<div align="center">
									<strong>Year</strong>
								</div>
							</td>
						</tr>
						<?=display_relay_records($male_relay_records,$female_relay_records,$relay_events);?>
			</div>
	<!-- InstanceEndEditable -->
	<?=get_footer('parent');?>
	<!-- InstanceEnd -->
</html>
