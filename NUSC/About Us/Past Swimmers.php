<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>NUSC | Men's Team</title>
		<!-- InstanceEndEditable -->
		</head>
		<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

			<?=get_header('parent');?>
			<!-- InstanceBeginEditable name="Body" -->
			<div id="BodyDiv1">
				<table width="969" border="0" style="border-collapse: collapse;">
					<tr class="dark_blue">
						<th height="37" colspan="6" scope="col" class="dark_blue">
							<div align="center">
								<strong>
									<big>Male Alumni</big>
								</strong>
							</div>
						</th>
					</tr>
					<tr class="dark_blue">
						<th width="91" scope="row">
							<div align="center"></div>
						</th>
						<td width="143">
							<div align="center">
								<strong>Name</strong>
							</div>
						</td>
						<td width="106">
							<div align="center">
								<strong>Class</strong>
							</div>
						</td>
						<td width="183">
							<div align="center">
								<strong>Stroke</strong>
							</div>
						</td>
						<td width="239">
							<div align="center">
								<strong>High School</strong>
							</div>
						</td>
						<td width="181">
							<div align="center">
								<strong>Hometown</strong>
							</div>
						</td>
					</tr>
					<?php build_mens_roster($past_men);?>
				</table>
				<table width="969" border="0" style="border-collapse: collapse;">
					<tr class="dark_blue">
						<th height="37" colspan="6" scope="col" class="dark_blue">
							<div align="center">
								<strong>
									<big>Female Alumni</big>
								</strong>
							</div>
						</th>
					</tr>
					<tr class="dark_blue">
						<th width="91" scope="row">
							<div align="center"></div>
						</th>
						<td width="143">
							<div align="center">
								<strong>Name</strong>
							</div>
						</td>
						<td width="106">
							<div align="center">
								<strong>Class</strong>
							</div>
						</td>
						<td width="183">
							<div align="center">
								<strong>Stroke</strong>
							</div>
						</td>
						<td width="239">
							<div align="center">
								<strong>High School</strong>
							</div>
						</td>
						<td width="181">
							<div align="center">
								<strong>Hometown</strong>
							</div>
						</td>
					</tr>
					<?php build_womens_roster($past_women);?>
				</table>
			</div>
			<!-- InstanceEndEditable -->
			<?=get_footer('parent');?>
		</body>
		<!-- InstanceEnd -->
	</html>
