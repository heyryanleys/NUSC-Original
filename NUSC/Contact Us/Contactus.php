<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- InstanceBegin template="/Templates/Main Template.dwt" codeOutsideHTMLIsLocked="false" -->
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>NUSC | Contact Us</title>
		<!-- InstanceEndEditable -->
	</head>
		<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

			<!-- InstanceBeginEditable name="Body" -->
			<?=get_header('parent');?>
			<div id="BodyDiv1">
				<center>
					<table width="100%" border="0" style="border-collapse: collapse;">
						<tr>
							<th  bgcolor="#4F9DE8" height="50">
								<big>Contact Us</big>
							</th>
						</tr>
						<tr>
							<td align="center">
							<h3 style="margin-bottom: -10px">* Indicates a required field</h3>
							<form name="htmlform" method="post" action="html_form_send_2.php">
								<table id="contact_form" style="width:auto">
								</tr>
								<br />
								<tr>
									<td valign="top">
										<input  placeholder="First Name*" type="text" name="first_name" maxlength="50" size="30">
									</td>
								</tr>

								<tr>
									<td valign="top">
										<input  placeholder="Last Name*" type="text" name="last_name" maxlength="50" size="30">
									</td>
								</tr>
								<tr>
									<td valign="top">
										<input placeholder="Subject*" type="text" name="subject" maxlength="140" size="30">
									</td>
								</tr>
								<tr>
									<td valign="top">
										<input  placeholder="Email Address*" type="text" name="email" maxlength="80" size="30">
									</td>

								</tr>
								<tr>
									<td valign="top">
										<input placeholder="Telephone Number" type="text" name="telephone" maxlength="30" size="30">
									</td>
								</tr>
								<tr>
									<td valign="top">
										<textarea  style="font-family: Arial" placeholder="Comments*" name="comments" maxlength="1000"></textarea>
									</td>
									<tr>
										<td colspan="2"  style="text-align:center">
											<input style="cursor: pointer; height: 26px; width: 58px" type="submit" value="Submit">
										</td>
									</tr>
								</tr>
							</table>
						</form>
						</td>
					</tr>
				</table>
			</center>
			<br />
		</div>
		<!-- InstanceEndEditable -->
		<?=get_footer('parent');?>
		<!-- InstanceEnd -->
	</html>
