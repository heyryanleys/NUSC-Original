<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/parent_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';?>
	<!-- InstanceBegin template="/Templates/Main Template.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>NUSC | Women's Team</title>
		<script type="text/javascript">
			$(window).scroll(function() {
				var fromTop = $(window).scrollTop();
				if(fromTop > 20) {
					$('div.MenuDiv1').addClass('collapse');
				}
				else {
					$('div.MenuDiv1').removeClass('collapse');
				};
			});
		</script>
	</head>
	<body background="../../Core%20Images/Underwater%20Background_test_2.jpg" onload="MM_preloadImages('../../Core%20Images/Go%20NU%20Logo.png','../../Core%20Images/Campus%20Rec%20Logo.png','../../Core%20Images/ECCColor.png')">

		<?=get_header('parent');?>
		<!-- InstanceBeginEditable name="Body" -->
		<div id="BodyDiv1">
			<div class="roster_container">
				<div class="row title_row">
					<h2>2014-2015 Women's Roster</h2>
				</div>
				<div class="row column_headings">
					<div class="pic"></div>
					<div class="name"><p><strong>Name</strong></p></div>
					<div class="year"><p><strong>Class</strong></p></div>
					<div class="stroke"><p><strong>Stroke</strong></p></div>
					<div class="high_school"><p><strong>High School</strong></p></div>
					<div class="hometown"><p><strong>Hometown</strong></p></div>
				</div>
				<?php 
				function build_womens_roster2($swimmers) {
					$html = '';
					foreach($swimmers as $swimmer) {
				
						$img_uri = get_last_first($swimmer);
				
						$html .= '<div class="row swimmer">';
						$html .= '<div class="pic">';
						$html .= '<a href="../Team/Female Athletes/'.$swimmer->last_name.'.php">';
						$html .= '<img src="../../Core Images/Team Shots/'.$img_uri.'.jpg" alt="'.$swimmer->first_name.'" />';
						$html .= '</a>';
						$html .= '</div>';
						$html .= '<div class="name">';
						$html .= '<a href="../Team/Female Athletes/'.$swimmer->last_name.'.php"><p>'.$swimmer->first_name.' '.$swimmer->last_name.' '.$swimmer->eboard.'</p></a>';
						$html .= '</div>';
						$html .= '<div class="year"><p>'.$swimmer->year.'</p></div>';
						$html .= '<div class="stroke"><p>'.$swimmer->stroke.'</p></div>';
						$html .= '<div class="high_school"><p>'.$swimmer->high_school.'</p></div>';
						$html .= '<div class="hometown"><p>'.$swimmer->hometown.'</p></div>';
						$html .= '</div>';
					}
					echo $html;
				}
				
				build_womens_roster($current_women);?>
			</div>
		</div>
		<!-- InstanceEndEditable -->
		<?=get_footer('parent');?>
	</body>
	<!-- InstanceEnd -->
</html>
