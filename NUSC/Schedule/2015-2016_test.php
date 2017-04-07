<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">
		<?=get_header('parent');?>
		<div id="BodyDiv1">
			<table width="969" border="0" style="border-collapse: collapse;?>
				<tr>
					<td width="108">
						<div align="center"></div>
						<?=build_past_seasons($This_Season);?>
					</td>
				</tr>
			</table>
		</div>
	<!-- InstanceEndEditable -->
	<?=get_footer('parent');?>
</html>