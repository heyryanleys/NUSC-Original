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

			<?=get_header('parent');?>
			<!-- InstanceBeginEditable name="Body" -->
			<div id="BodyDiv1">
				<table border="0" style="border-collapse: collapse;">
					<tr>
						<td height="37" colspan="7" bgcolor="#4F9DE8">
							<div align="center">
								<b>
									<big>
										<big>E-Board</big>
									</big>
								</b>
							</div>
						</td>
					</tr>
					<tr height="5" bgcolor="#B9D8F0">
					</tr>
					<tr>
						<td width="67" bgcolor="#B9D8F0">&nbsp;</td>
						<td width="161">
							<div align="center">
								<a href="Male Athletes/<?=$M_President->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($M_President);?>.jpg" width="150" height="224" alt="<?=$M_President->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Male Athletes/<?=$M_VP->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($M_VP);?>.jpg" width="150" height="224" alt="<?=$M_VP->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Male Athletes/<?=$M_Treasurer->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($M_Treasurer);?>.jpg" width="150" height="224" alt="<?=$M_Treasurer->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Male Athletes/<?=$M_Secretary->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($M_Secretary);?>.jpg" width="150" height="224" alt="<?=$M_Secretary->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Male Athletes/<?=$M_SID->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($M_SID);?>.jpg" width="150" height="224" alt="<?=$M_SID->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="67" bgcolor="#B9D8F0">&nbsp;</td>

					</tr>
					<tr bgcolor="#B9D8F0">
						<td>&nbsp;</td>
						<td>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_President->last_name ?>.php"><?=$M_President->first_name.' '.$M_President->last_name ?></a>
								</b>
							</p>
							<p align="center">President</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_VP->last_name ?>.php"><?=$M_VP->first_name.' '.$M_VP->last_name ?></a>
								</b>
							</p>
							<p align="center">Vice President</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_Treasurer->last_name ?>.php"><?=$M_Treasurer->first_name.' '.$M_Treasurer->last_name ?></a>
								</b>
							</p>
							<p align="center">Treasurer</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_Secretary->last_name ?>.php"><?=$M_Secretary->first_name.' '.$M_Secretary->last_name ?></a>
								</b>
							</p>
							<p align="center">Secretary</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Male Athletes/<?=$M_SID->last_name ?>.php"><?=$M_SID->first_name.' '.$M_SID->last_name ?></a>
								</b>
							</p>
							<p align="center">SID</p>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
				<table width="969" border="0" style="border-collapse: collapse;">
					<tr>
						<td width="67" bgcolor="#B9D8F0">&nbsp;</td>
						<td width="161">
							<div align="center">
								<a href="Female Athletes/<?=$W_President->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($W_President);?>.jpg" width="150" height="224" alt="<?=$W_President->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Female Athletes/<?=$W_VP->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($W_VP);?>.jpg" width="150" height="224" alt="<?=$W_VP->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Female Athletes/<?=$W_Treasurer->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($W_Treasurer);?>.jpg" width="150" height="224" alt="<?=$W_Treasurer->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Female Athletes/<?=$W_Secretary->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($W_Secretary);?>.jpg" width="150" height="224" alt="<?=$W_Secretary->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="161">
							<div align="center">
								<a href="Female Athletes/<?=$W_SID->last_name ?>.php">
									<img src="../../Core Images/Team Shots/<?=get_last_first($W_SID);?>.jpg" width="150" height="224" alt="<?=$W_SID->first_name ?>" />
								</a>
							</div>
						</td>
						<td width="67" bgcolor="#B9D8F0">&nbsp;</td>

					</tr>
					<tr bgcolor="#B9D8F0">
						<td>&nbsp;</td>
						<td>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_President->last_name ?>.php"><?=$W_President->first_name.' '.$W_President->last_name ?></a>
								</b>
							</p>
							<p align="center">President</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_VP->last_name ?>.php"><?=$W_VP->first_name.' '.$W_VP->last_name ?></a>
								</b>
							</p>
							<p align="center">Vice President</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_Treasurer->last_name ?>.php"><?=$W_Treasurer->first_name.' '.$W_Treasurer->last_name ?></a>
								</b>
							</p>
							<p align="center">Treasurer</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_Secretary->last_name ?>.php"><?=$W_Secretary->first_name.' '.$W_Secretary->last_name ?></a>
								</b>
							</p>
							<p align="center">Secretary</p>
						</td>
						<td>
							<p align="center">
								<b>
									<a href="Female Athletes/<?=$W_SID->last_name ?>.php"><?=$W_SID->first_name.' '.$W_SID->last_name ?></a>
								</b>
							</p>
							<p align="center">SID</p>
						</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</div>
			<!-- InstanceEndEditable -->
			<?=get_footer('parent');?>
			<!-- InstanceEnd -->
		</html>
