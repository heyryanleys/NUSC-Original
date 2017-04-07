<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Team/roster.php';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/Stylesheets/main_style.css';?>
	<?php require $_SERVER['DOCUMENT_ROOT'] . 'NUSC/CustomJS.js';
		  $male_club_records = get_club_records($events, $all_men);
		  $female_club_records = get_club_records($events, $all_women);?>
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
				<center>
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
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="29">
								<div align="center">
									<big>
										<b>Freestyle</b>
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
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['50 Freestyle']->swimmer->last_name;?>.php"><?=$female_club_records['50 Freestyle']->swimmer->first_name.' '.$female_club_records['50 Freestyle']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['50 Freestyle']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['50 Freestyle']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['50 Freestyle']->event;?></div>
							</td>
							<td>
								<a href="../Team/Alumni/Lua.php">Kevin Lua</a>
							</td>
							<td>
								<div align="center">00:21.35</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
						<tr bgcolor="#B9D8F0">
							<td>
								<a href="../Team/Female Athletes/Renaud.php">Alice Renaud</a>
							</td>
							<td>
								<div align="center">00:55.28</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
							<td>
								<div align="center">100 Freestyle</div>
							</td>
							<td>
								<a href="../Team/Alumni/Lua.php">Kevin Lua</a>
							</td>
							<td>
								<div align="center">00:47.89</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['200 Freestyle']->swimmer->last_name;?>.php"><?=$female_club_records['200 Freestyle']->swimmer->first_name.' '.$female_club_records['200 Freestyle']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['200 Freestyle']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 Freestyle']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 Freestyle']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Knapik.php">Matthew Knapik</a>
								<a href="../Team/Male Athletes/Li.php"></a>
							</td>
							<td>
								<div align="center">01:46.81</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['500 Freestyle']->swimmer->last_name;?>.php"><?=$female_club_records['500 Freestyle']->swimmer->first_name.' '.$female_club_records['500 Freestyle']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['500 Freestyle']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['500 Freestyle']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['500 Freestyle']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Thornton.php">David Thornton</a>
								<a href="../Team/Male Athletes/Knapik.php"></a>
							</td>
							<td>
								<div align="center">04:48.64</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['1000 Freestyle']->swimmer->last_name;?>.php"><?=$female_club_records['1000 Freestyle']->swimmer->first_name.' '.$female_club_records['1000 Freestyle']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['1000 Freestyle']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['1000 Freestyle']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['1000 Freestyle']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Thornton.php">David Thornton</a>
							</td>
							<td>
								<div align="center">09:56.44</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
						<tr>
							<td height="18" bgcolor="#B9D8F0">
								<a href="../Team/Alumni/Silka.php">Mara Silka</a>
							</td>
							<td>
								<div align="center">19:39.90</div>
							</td>
							<td>
								<div align="center">2013</div>
							</td>
							<td>
								<div align="center">1650 Freestyle</div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Thornton.php">David Thornton</a>
							</td>
							<td>
								<div align="center">17:21.94</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
					</table>
				</center>
				<br />
				<br />
				<center>
					<table width="969" style="border-collapse: collapse;” border="0">
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="29">
								<div align="center">
									<big>
										<b>Butterfly</b>
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
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['50 Butterfly']->swimmer->last_name;?>.php"><?=$female_club_records['50 Butterfly']->swimmer->first_name.' '.$female_club_records['50 Butterfly']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['50 Butterfly']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['50 Butterfly']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['50 Butterfly']->event;?></div>
							</td>
							<td>Joseph Rogan</td>
							<td>
								<div align="center">00:24.06</div>
							</td>
							<td>
								<div align="center">2010</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['100 Butterfly']->swimmer->last_name;?>.php"><?=$female_club_records['100 Butterfly']->swimmer->first_name.' '.$female_club_records['100 Butterfly']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['100 Butterfly']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['100 Butterfly']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['100 Butterfly']->event;?></div>
							</td>
							<td>Joseph Rogan</td>
							<td>
								<div align="center">00:53.56</div>
							</td>
							<td>
								<div align="center">2009</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['200 Butterfly']->swimmer->last_name;?>.php"><?=$female_club_records['200 Butterfly']->swimmer->first_name.' '.$female_club_records['200 Butterfly']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['200 Butterfly']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 Butterfly']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 Butterfly']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Li.php">Lewis Li</a>
							</td>
							<td>
								<div align="center">02:00.21</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
					</table>
				</center>
				<br />
				<br />
				<center>
					<table width="969" style="border-collapse: collapse;” border="0">
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="29">
								<div align="center">
									<big>
										<b>Backstroke</b>
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
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['50 Backstroke']->swimmer->last_name;?>.php"><?=$female_club_records['50 Backstroke']->swimmer->first_name.' '.$female_club_records['50 Backstroke']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['50 Backstroke']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['50 Backstroke']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['50 Backstroke']->event;?></div>
							</td>
							<td>
								<a href="../Team/Alumni/Ryan.php">Trevor Ryan</a>
							</td>
							<td>
								<div align="center">00:25.34</div>
							</td>
							<td>
								<div align="center">2012</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['100 Backstroke']->swimmer->last_name;?>.php"><?=$female_club_records['100 Backstroke']->swimmer->first_name.' '.$female_club_records['100 Backstroke']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['100 Backstroke']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['100 Backstroke']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['100 Backstroke']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Knapik.php">Matthew Knapik</a>
							</td>
							<td>
								<div align="center">00:53.89</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['200 Backstroke']->swimmer->last_name;?>.php"><?=$female_club_records['200 Backstroke']->swimmer->first_name.' '.$female_club_records['200 Backstroke']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['200 Backstroke']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 Backstroke']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 Backstroke']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Knapik.php">Matthew Knapik</a>
							</td>
							<td>
								<div align="center">01:56.76</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
					</table>
				</center>
				<br />
				<br />
				<center>
					<table width="969" style="border-collapse: collapse;” border="0">
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="29">
								<div align="center">
									<big>
										<b>Breaststroke</b>
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
						<tr>
							<td>
								<a href="../Team/Coaches/Past Coaches/Donahue.php">April Donahue</a>
							</td>
							<td>
								<div align="center">00:31.94</div>
							</td>
							<td>
								<div align="center">2009</div>
							</td>
							<td>
								<div align="center">50 Breaststroke</div>
							</td>
							<td>
								<a href="../Team/Alumni/Lua.php">Kevin Lua</a>
							</td>
							<td>
								<div align="center">00:27.45</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Coaches/Past Coaches/Donahue.php">April Donahue</a>
							</td>
							<td>
								<div align="center">01:12.44</div>
							</td>
							<td>
								<div align="center">2008</div>
							</td>
							<td>
								<div align="center">100 Breaststroke</div>
							</td>
							<td>
								<a href="../Team/Alumni/Lua.php">Kevin Lua</a>
							</td>
							<td>
								<div align="center">00:59.78</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Coaches/Past Coaches/Donahue.php">April Donahue</a>
							</td>
							<td>
								<div align="center">02:33.72</div>
							</td>
							<td>
								<div align="center">2009</div>
							</td>
							<td>
								<div align="center">200 Breaststroke</div>
							</td>
							<td>
								<a href="../Team/Alumni/Lua.php">Kevin Lua</a>
							</td>
							<td>
								<div align="center">02:12.75</div>
							</td>
							<td>
								<div align="center">2014</div>
							</td>
						</tr>
					</table>
				</center>
				<br />
				<br />
				<center>
					<table width="969" style="border-collapse: collapse;” border="0">
						<tr>
							<td colspan="7" bgcolor="#4F9DE8" height="29">
								<div align="center">
									<big>
										<b>Individual Medley</b>
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
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['100 IM']->swimmer->last_name;?>.php"><?=$female_club_records['100 IM']->swimmer->first_name.' '.$female_club_records['100 IM']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['100 IM']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['100 IM']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['100 IM']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Li.php">Lewis Li</a>
							</td>
							<td>
								<div align="center">00:54.97</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['200 IM']->swimmer->last_name;?>.php"><?=$female_club_records['200 IM']->swimmer->first_name.' '.$female_club_records['200 IM']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['200 IM']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 IM']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['200 IM']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Thornton.php">David Thornton</a>
							</td>
							<td>
								<div align="center">01:58.28</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
						<tr>
							<td>
								<a href="../Team/Female Athletes/<?=$female_club_records['400 IM']->swimmer->last_name;?>.php"><?=$female_club_records['400 IM']->swimmer->first_name.' '.$female_club_records['400 IM']->swimmer->last_name;?></a>
							</td>
							<td>
								<div align="center"><?=display_time($female_club_records['400 IM']->event_time);?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['400 IM']->event_date[2];?></div>
							</td>
							<td>
								<div align="center"><?=$female_club_records['400 IM']->event;?></div>
							</td>
							<td>
								<a href="../Team/Male Athletes/Thornton.php">David Thornton</a>
							</td>
							<td>
								<div align="center">04:07.84</div>
							</td>
							<td>
								<div align="center">2015</div>
							</td>
						</tr>
					</table>
				</center>
				<br />
				<br />
				<center>
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
						<tr>
							<td>
								<p>
								<a href="../Team/Female Athletes/Gee.php">S. Gee</a>, <a href="../Team/Female Athletes/Abel.php">C. Abel</a>,</p>
									<p>
										<a href="../Team/Female Athletes/Pinkes.php">S. Pinkes</a>, <a href="../Team/Female Athletes/Renaud.php">A. Renaud</a>
									</p>
								</td>
								<td>
									<div align="center">01:41.47</div>
								</td>
								<td>
									<div align="center">2015</div>
								</td>
								<td>
									<div align="center">200 Freestyle Relay</div>
								</td>
								<td>
									<p>
										<a href="../Team/Male Athletes/Knapik.php">M. Knapik</a>, <a href="../Team/Male Athletes/Desrochers.php">N. Desrochers</a>
									<a href="../Team/Male Athletes/Li.php"></a>,</p>
										<p>
											<a href="../Team/Alumni/Lua.php">K. Lua,</a>
											<a href="../Team/Alumni/Baren.php">G. Baron</a>
										</p>
									</td>
									<td>
										<div align="center">01:28.49</div>
									</td>
									<td>
										<div align="center">2014</div>
									</td>
								</tr>
								<tr>
									<td>
										<p>
										<a href="../Team/Female Athletes/Gee.php">S. Gee</a>, <a href="../Team/Female Athletes/Aldrich.php">K. Aldrich</a>,</p>
											<p>
												<a href="../Team/Female Athletes/Pinkes.php">S. Pinkes,</a>
												<a href="../Team/Female Athletes/Renaud.php">A. Renaud</a>
											</p>
										</td>
										<td>
											<div align="center">03:41.02</div>
										</td>
										<td>
											<div align="center">2015</div>
										</td>
										<td>
											<div align="center">400 Freestyle Relay</div>
										</td>
										<td>
											<p>
											<a href="../Team/Male Athletes/Knapik.php">M. Knapik</a>, <a href="../Team/Male Athletes/Li.php">L. Li</a>,</p>
												<p>
													<a href="../Team/Alumni/Abbott-Schiff.php">J. Abbott-Schiff</a>,<a href="../Team/Male Athletes/Shi.php"> E. Shi</a>
												</p>
											</td>
											<td>
												<div align="center">03:15.39</div>
											</td>
											<td>
												<div align="center">2015</div>
											</td>
										</tr>
										<tr>
											<td>
												<p>
												<a href="../Team/Female Athletes/Aldrich.php">K. Aldrich</a>, <a href="../Team/Alumni/Pinkes.php">S. Pinkes</a>,</p>
													<p>
														<a href="../Team/Female Athletes/Renaud.php">A. Renaud</a>, <a href="../Team/Female Athletes/Gee.php">S. Gee</a>
													</p>
												</td>
												<td>
													<div align="center">8:10.66</div>
												</td>
												<td>
													<div align="center">2015</div>
												</td>
												<td>
													<div align="center">800 Freestyle Relay</div>
												</td>
												<td>
													<p>
													<a href="../Team/Male Athletes/Galus.php">B. Galus</a>, <a href="../Team/Male Athletes/Bartlett.php">C. Bartlett</a>,</p>
														<p>
															<a href="../Team/Male Athletes/McCrobie.php">T. McCrobie</a>, <a href="../Team/Alumni/Baren.php">G. Baron</a>
														</p>
													</td>
													<td>
														<div align="center">07:22.96</div>
													</td>
													<td>
														<div align="center">2014</div>
													</td>
												</tr>
												<tr>
													<td>
														<p>
														<a href="../Team/Female Athletes/Aldrich.php">K. Aldrich</a>, <a href="../Team/Female Athletes/Butler.php">E. Butler</a>,</p>
															<p>
																<a href="../Team/Female Athletes/Abel.php">C. Abel</a>, <a href="../Team/Female Athletes/Pinkes.php">S. Pinkes</a>
															</p>
														</td>
														<td>
															<div align="center">01:56.15</div>
														</td>
														<td>
															<div align="center">2015</div>
														</td>
														<td>
															<div align="center">200 Medley Relay</div>
														</td>
														<td>
															<p>
															<a href="../Team/Male Athletes/Knapik.php">M. Knapik</a>, <a href="../Team/Alumni/Breitler.php">G. Breitler</a>,</p>
																<p>
																	<a href="../Team/Male Athletes/Li.php">L. Li</a>, <a href="../Team/Alumni/Lua.php">K. Lua</a>
																</p>
															</td>
															<td>
																<div align="center">01:39.44</div>
															</td>
															<td>
																<div align="center">2014</div>
															</td>
														</tr>
														<tr>
															<td>
																<p>
																<a href="../Team/Female Athletes/Aldrich.php">K. Aldrich</a>, <a href="../Team/Female Athletes/Butler.php">E. Butler</a>, </p>
																	<p>
																		<a href="../Team/Female Athletes/Abel.php">C. Abel</a>, <a href="../Team/Female Athletes/Renaud.php">A. Renaud</a>
																	</p>
																</td>
																<td>
																	<div align="center">04:11.84</div>
																</td>
																<td>
																	<div align="center">2015</div>
																</td>
																<td>
																	<div align="center">400 Medley Relay</div>
																</td>
																<td>
																	<p>
																	<a href="../Team/Male Athletes/Knapik.php">M. Knapik</a>, <a href="../Team/Alumni/Lua.php">K. Lua</a>,</p>
																		<p>
																			<a href="../Team/Male Athletes/Li.php">L. Li</a>, <a href="../Team/Alumni/Baren.php">G. Baron</a>
																		</p>
																	</td>
																	<td>
																		<div align="center">03:33.43</div>
																	</td>
																	<td>
																		<div align="center">2014</div>
																	</td>
																</tr>
															</table>
														</center>

													</div>

													<!-- InstanceEndEditable -->
													<?=get_footer('parent');?>
													<!-- InstanceEnd -->
												</html>
