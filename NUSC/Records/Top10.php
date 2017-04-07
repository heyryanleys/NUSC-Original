<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- InstanceBegin template="/Templates/Main Template.dwt" codeOutsideHTMLIsLocked="false" -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<!-- InstanceBeginEditable name="doctitle" -->
		<title>NUSC | Top 10 Times</title>
		<!-- InstanceEndEditable -->
	</head>
	<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">
		<?=get_header('parent');?>
		<!-- InstanceBeginEditable name="Body" -->
		<div id="BodyDiv1">
			<center>
				<table width="969" style="border-collapse: collapse;” border="0" class="top10table">
					<tr>
						<td height="37" colspan="8" bgcolor="#4F9DE8">
							<div align="center">
								<b>
									<big>
										<b>
											<a name="fr50" id="fr50"></a>
										</b>Top Times Index</big>
										<b></div>
									</td>
								</tr>
								<tr>
									<td bgcolor="#4F9DE8">
										<div align="center"></div>
										<div align="center"></div>
									</td>
									<td colspan="2" bgcolor="#4F9DE8">
										<div align="center">
											<strong>Freestyle</strong>
										</div>
									</td>
									<td width="100" bgcolor="#4F9DE8">
										<div align="center">
											<strong>Butterfly</strong>
										</div>
									</td>
									<td width="100" bgcolor="#4F9DE8">
										<div align="center">
											<strong>Backstroke</strong>
										</div>
									</td>
									<td width="100" bgcolor="#4F9DE8">
										<div align="center">
											<strong>Breaststroke</strong>
										</div>
									</td>
									<td width="74" bgcolor="#4F9DE8">
										<div align="center">
											<strong>IM</strong>
										</div>
									</td>
									<td width="184" bgcolor="#4F9DE8">&nbsp;</td>
								</tr>
								<tr bgcolor="#B9D8F0">
									<td width="185">&nbsp;</td>
									<td width="100">
										<div align="center">
											<a href="#fr50">50 Free</a>
										</div>
									</td>
									<td width="100">
										<div align="center">
											<a href="#200 Freestyle">500 Free</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#200 Breaststroke">50 Fly</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#1650 Freestyle">50 Back</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#200 Backstroke">50 Breast</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#200 Butterfly">100 IM</a>
										</div>
									</td>
									<td width="184">&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<div align="center">
											<a href="#50 Freestyle">100 Free</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#500 Freestyle">1000 Free</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#50 Butterfly">100 Fly</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#50 Backstroke">100 Back</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#50 Breaststroke">100 Breast</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#100 IM">200 IM</a>
										</div>
									</td>
									<td>&nbsp;</td>
								</tr>
								<tr bgcolor="#B9D8F0">
									<td>&nbsp;</td>
									<td>
										<div align="center">
											<a href="#100 Freestyle">200 Free</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#1000 Freestyle">1650 Free</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#100 Butterfly">200 Fly</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#100 Backstroke">200 Back</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#100 Breaststroke">200 Breast</a>
										</div>
									</td>
									<td>
										<div align="center">
											<a href="#200 IM">400 IM</a>
										</div>
									</td>
									<td>&nbsp;</td>
								</tr>
							</table>
							<?php 					
								$male_top_10 = get_top_10($events, $all_men);
								$female_top_10 = get_top_10($events, $all_women);
								
								echo display_top_10($male_top_10,$female_top_10,$events);
								?>
					</div>
					<!-- InstanceEndEditable -->
					<?=get_footer('parent');?>
					<!-- InstanceEnd -->
				</html>
