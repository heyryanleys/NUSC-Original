<?
/*Any functions that say IGNORE should never need to be altered in any way, they are simply used by other functions to make life easier.*/
/*Of course if you have reason to believe one of them isn't working properly you can alter them, or contact Charlie Haviland and I will take a look.*/

/*IGNORE*/
/*Returns the last name, an underscore, and the first name...all in lowercase EX: get_last_first(Joey_Abbott_Schiff) = 'abbott_schiff'*/
function get_last_first($swimmer) {
	$first = strtolower($swimmer->first_name);
	$last = strtolower($swimmer->last_name);
	$final = str_replace(' ', '_', str_replace('-', '_', $last . '_' . $first));
	return $final;
}

function get_page_link($swimmer) {
	$first = substr($swimmer->first_name, 0, 1);
	$last = $swimmer->last_name;
	$final = str_replace(' ', '_', $last . '_' . $first);
	return $final;
}

/*IGNORE*/
/*Returns the number of years that the given swimmer has spent on the team EX: $year_joined = sophomore, $current_year = junior, return: 3*/
function get_years_on_team($swimmer) {
	$year_joined;
	$current_year;
	
	/*Get Number of the Year the Swimmer is Right Now*/
	if ($swimmer->year == 'Freshman') {
		$current_year = 1;
	}
	else if ($swimmer->year == 'Sophomore') {
		$current_year = 2;
	}
	else if ($swimmer->year == 'Middler') {
		$current_year = 3;
	}
	else if ($swimmer->year == 'Junior') {
		$current_year = 4;
	}
	else if ($swimmer->year == 'Senior') {
		$current_year = 5;
	}
	else if ($swimmer->year == 'Graduate') {
		$current_year = 6;
	}
	else if ($swimmer->year == 'Alumni') {
		$current_year = 6;
	}
	else {
		return -42;
	}
	
	/*Get Number of the Year the Swimmer Joined NUSC*/
	if ($swimmer->year_joined == 'Freshman') {
		$year_joined = 1;
	}
	else if ($swimmer->year_joined == 'Sophomore') {
		$year_joined = 2;
	}
	else if ($swimmer->year_joined == 'Middler') {
		$year_joined = 3;
	}
	else if ($swimmer->year_joined == 'Junior') {
		$year_joined = 4;
	}
	else if ($swimmer->year_joined == 'Senior') {
		$year_joined = 5;
	}
	else if ($swimmer->year_joined == 'Graduate') {
		$year_joined = 6;
	}
	return (($current_year - $year_joined) + 1);
}

/*IGNORE*/
/*Takes a time in seconds and displays it in Minutes:Seconds:Sub-Seconds form EX: display_time(72.49) = '01:12.49'*/
function display_time($time_in_seconds){
	if ($time_in_seconds == 99999) {
		return 'Time Error';
	}
    $seconds = $time_in_seconds;
    $minutes = floor($seconds / 60);
    $seconds_trunc = (int) $seconds;
    $sub_seconds_dec = $seconds - $seconds_trunc;
    $sub_seconds_long = $sub_seconds_dec * 100;
    
    
    
    $sub_seconds = round($sub_seconds_long);
    $seconds = ($seconds % 60);
    return sprintf("%02d", $minutes).':'.sprintf("%02d", $seconds).'.'.sprintf("%02d",$sub_seconds);
}

/*IGNORE*/
/*Takes a numerical finishing place and gives it the proper suffix. EX: display_place(3) = '3rd'*/
function display_place($place) {
	$result = '';
	if ($place == -42) {
		return "ERROR";
	}
	if ($place == -1) {
		return "DQ";
	}
	if ($place == 0) {
		return "N/A";
	}
	
	
	$last_digit = $place % 10;
	if ($last_digit == 1) {
		$result = strval($place).'st';
	}
	else if ($last_digit == 2) {
		$result = strval($place).'nd';
	}
	else if ($last_digit == 3) {
		$result = strval($place).'rd';
	}
	else {
		$result = strval($place).'th';
	}
	
	if (($place == 11) || ($place == 111) || ($place == 211) || ($place == 311) || ($place == 411) ||
		($place == 12) || ($place == 112) || ($place == 212) || ($place == 312) || ($place == 412) ||
		($place == 13) || ($place == 113) || ($place == 213) || ($place == 313) || ($place == 413)) {
		$result = strval($place).'th';
	}
	return $result;
}

/*IGNORE*/
/*Takes an array of 3 numbers and displays the date. EX: display_date(array(2,14,2015) = 'February 14th 2015'*/
function display_date($meet,$event) {
	$date = $meet->meet_date;
	$day1 = array("4x200 Medley Relay","400 IM","200 Backstroke","200 Butterfly","200 Breaststroke","500 Freestyle","4x100 Medley Relay");
	$day2 = array("4x100 Freestyle Relay","50 Butterfly","200 IM","50 Freestyle","100 Breaststroke","200 Freestyle","100 Backstroke",
				  "4x50 Medley Relay","1000 Freestyle");
	$day3 = array("50 Backstroke","100 Butterfly","50 Breaststroke","100 Freestyle","100 IM","4x50 Freestyle Relay");
	if (substr($meet->meet_name,5) == "ECC Nationals") {
		if (in_array($event,$day2)) {
			$date[1] += 1;
		}
		if (in_array($event,$day3)) {
			$date[1] += 2;
		}
	}
	$result;
	$month;
	$day;
	$year;
	if ($date[0] == 1) {
		$month = 'January';
	}
	else if ($date[0] == 2) {
		$month = 'February';
	}
	else if ($date[0] == 3) {
		$month = 'March';
	}
	else if ($date[0] == 4) {
		$month = 'April';
	}
	else if ($date[0] == 5) {
		$month = 'May';
	}
	else if ($date[0] == 6) {
		$month = 'June';
	}
	else if ($date[0] == 7) {
		$month = 'July';
	}
	else if ($date[0] == 8) {
		$month = 'August';
	}
	else if ($date[0] == 9) {
		$month = 'September';
	}
	else if ($date[0] == 10) {
		$month = 'October';
	}
	else if ($date[0] == 11) {
		$month = 'November';
	}
	else {
		$month = 'December';
	}
	
	$day_num = $date[1];
	if ($day_num == 1) {
		$day = strval($day_num).'st';
	}
	else if ($day_num == 2) {
		$day = strval($day_num).'nd';
	}
	else if ($day_num == 3) {
		$day = strval($day_num).'rd';
	}
	else if ($day_num == 21) {
		$day = strval($day_num).'st';
	}
	else if ($day_num == 22) {
		$day = strval($day_num).'nd';
	}
	else if ($day_num == 23) {
		$day = strval($day_num).'rd';
	}
	else if ($day_num == 31) {
		$day = strval($day_num).'st';
	}
	else {
		$day = strval($day_num).'th';
	}
	
	
	$year = $date[2];
	
	$result = $month.' '.$day.', '.strval($year);
	if ($date == null) {
		return "Error";
	}
	return $result;
}

/*/////////////////////////////////////////////////////////////////////
////Unless there is a problem with the calculation or display of the club record times, nothing in this section should be touched, period.

/*Calculating Club Record Times*/


/*Checks and replaces any relay leadoff times with the correct times*/
function check_leadoffs($times) {
	$relay_checks = array('50 Freestyle' => '4x50 Freestyle Relay',
						  '100 Freestyle' => '4x100 Freestyle Relay',
						  '200 Freestyle' => '4x200 Freestyle Relay',
						  '50 Backstroke' => '4x50 Medley Relay',
						  '100 Backstroke' => '4x100 Medley Relay');

	/*goes through each possible event where a relay might beat an event, and replaces it if so.*/
	foreach($relay_checks as $individual => $relay) {
		/*creates an individual time if necessary*/
		if (($times[$relay]->event_time <= $times[$individual]->event_time) && ($times[$relay]->leg == 1)) {
			$times[$individual]->relay_leadoff = true;
			$times[$individual]->event_time = $times[$relay]->event_time;
			$times[$individual]->meet = $times[$relay]->meet;
			$times[$individual]->place = 0;
		}
		/*else if they didn't swim the individual race*/
		else if (($times[$relay]->leg == 1) && (!array_key_exists($individual,$times))) {
			$offset = 0;
			$all_events = array("50 Freestyle","100 Freestyle","200 Freestyle","500 Freestyle",
	  					"1000 Freestyle","1650 Freestyle","50 Backstroke","100 Backstroke",
	  					"200 Backstroke","50 Breaststroke","100 Breaststroke","200 Breaststroke",
	 					"50 Butterfly","100 Butterfly","200 Butterfly");
	 		
	 		/*this loop figures out what position in the array the new time should be put at.*/
	 		/*ex: if inserting a 50 back and the person swam all free events, it would go at place 6,*/
	 		/*	but if they swam no free events, it would go at place 0*/
	 		/*this ensures that the order remains correct*/
	 		for($i = 0; $i < array_search($individual,$all_events);$i++) {
	 			$all_event = $all_events[$i];
	 			if(array_key_exists($all_event,$times)) {
	 				$offset++;
	 			}
	 		}
			$timescopy = $times;
			$times = array_slice($timescopy, 0, $offset) +
		            array($individual => new BestTime($times[$relay]->swimmer,
		            								  $times[$relay]->event_time,
		            								  $times[$relay]->meet,
		            								  0,
		            								  false,
		            								  true)) +
		            array_slice($timescopy, $offset);
		}
	}
	return $times;
}

function efficient_check_leadoffs($swimmers) {
	foreach($swimmers as $swimmer) {
		$seasons = $swimmer->career;
		foreach ($seasons as $season) {
			$season->times = check_leadoffs($season->times);
		}
	}
}
$no_link = array("Joseph Rogan","Alison Baggen","Melanie Norton","Kristian Kemppainen","Melanie Norton","Stephanie Giancola", "Ana Echavarria","Lauren Emery","Elizabeth Brown","Audrey Miller","Nina Fattore","Nicholas Matook","Jaqueline Skinner", "Sarah Tannenbaum","Elizabeth Brown","Katherine Alexander","Robert Danemiller","Olivia Mabrey","Jerry Yu","Jason Wu", "Kimberly Forester","Anna Smith","Catherine Fong","Lauren Emery","Austin Mateo","Carolina Vargas","Camille Schiff", "Kaitlyn Fagundes","Parker Traugot","Eryn Nakashima","David Ellis","Daniel Ricardelli","Verron Darville","Jonathan Ingraham", "Gregory Breitler"."Mark Bacigalupo","Maya Gilchrist","Emily Johnson","Taylor Obey","Caitlin Winters","Katy Budra","Emma Boutcher", "Anna Smith","Alyssa Mokay","Brittany Bohannon","Gregory Breitler");

/*Takes every time from every swimmer and returns an associative array with each key being the event and each value being the best time for that event*/
function get_club_records($events, $swimmers) {
	$temp_records = array('50 Freestyle' => null,
					  '100 Freestyle' => null,
					  '200 Freestyle' => null,
					  '500 Freestyle' => null,
					  '1000 Freestyle' => null,
					  '1650 Freestyle' => null,
					  '50 Backstroke' => null,
					  '100 Backstroke' => null,
					  '200 Backstroke' => null,
					  '50 Breaststroke' => null,
					  '100 Breaststroke' => null,
					  '200 Breaststroke' => null,
					  '50 Butterfly' => null,
					  '100 Butterfly' => null,
					  '200 Butterfly' => null,
					  '100 IM' => null,
					  '200 IM' => null,
					  '400 IM' => null);
	foreach ($events as $event) {
		$Winning_Time = new BestTime($New_Swimmer_Template,2000,$Meet_09,130);
		foreach ($swimmers as $swimmer) {
			foreach ($swimmer->career as $season) {
				$times = $season->times;
				if ((sizeof($times) != 0) && ($times[$event] != null)) {
					$BestTime = $times[$event];
					if ($BestTime->event_time < $Winning_Time->event_time) {
						$Winning_Time = $BestTime;
					}
				}
			}
		}
		$Winning_Time->club_record = true;
		$temp_records[$event] = $Winning_Time;
	}
	return $temp_records;
}

function display_club_records($male_club_records,$female_club_records,$events) {
	$strokes = array('Freestyle','Butterfly','Backstroke','Breaststroke','Individual Medley');
	global $no_link;
	$html = '';
	foreach ($strokes as $stroke) {
		$html .= '<tr>';
		$html .= '<td colspan="7" bgcolor="#4F9DE8" height="29">';
		$html .= '<div align="center">';
		$html .= '<big>';
		$html .= '<b>'.$stroke.'</b>';
		$html .= '</big>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td width="190" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Women</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '<td width="100" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Time</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '<td width="100" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Year</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '<td width="147" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Event</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '<td width="190" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Men</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '<td width="100" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Time</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '<td width="100" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Year</strong>';
		$html .= '</div>';
		$html .= '</td>';
		$html .= '</tr>';
		if ($stroke == 'Freestyle') {
			$start = 0;
			$end = 5;
		}
		else if ($stroke == 'Backstroke') {
			$start = 6;
			$end = 8;
		}
		else if ($stroke == 'Breaststroke') {
			$start = 9;
			$end = 11;
		}
		else if ($stroke == 'Butterfly') {
			$start = 12;
			$end = 14;
		}
		else if ($stroke == 'Individual Medley') {
			$start = 15;
			$end = 17;
		}
		
		for ($i = $start; $i <= $end; $i++) {
			$event = $events[$i];
			$male_link = true;
			$female_link = true;
			
			if (in_array($female_club_records[$event]->swimmer->first_name.' '.$female_club_records[$event]->swimmer->last_name,$no_link)) {
				$female_link = false;
			}
			if (in_array($male_club_records[$event]->swimmer->first_name.' '.$male_club_records[$event]->swimmer->last_name,$no_link)) {
				$male_link = false;
			}
			
			$html .= '<tr>';
			$html .= '<td>';
			if ($female_link) {
				$html .= '<a href="../Team/Female Athletes/'.get_page_link($female_club_records[$event]->swimmer).'.php">';
			}
			$html .= $female_club_records[$event]->swimmer->first_name.' '.$female_club_records[$event]->swimmer->last_name;
			if ($female_link) {
				$html .= '</a>';
			}
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.display_time($female_club_records[$event]->event_time).'</div>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.$female_club_records[$event]->meet->meet_date[2].'</div>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.$event.'</div>';
			$html .= '</td>';
			$html .= '<td>';
			if ($male_link) {
			$html .= '<a href="../Team/Male Athletes/'.get_page_link($male_club_records[$event]->swimmer).'.php">';
			}
			$html .= $male_club_records[$event]->swimmer->first_name.' '.$male_club_records[$event]->swimmer->last_name;
			if ($male_link) {
				$html .= '</a>';
			}
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.display_time($male_club_records[$event]->event_time).'</div>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.$male_club_records[$event]->meet->meet_date[2].'</div>';
			$html .= '</td>';
			$html .= '</tr>';
		}
	}
	return $html;
}
/*Finds the relay records and stores them as a collection of the 4 BestRelayTimes*/
function get_relay_records($relay_events, $swimmers) {
	$temp_records = array('200 Freestyle Relay' => null,
					  '400 Freestyle Relay' => null,
					  '800 Freestyle Relay' => null,
					  '200 Medley Relay' => null,
					  '400 Medley Relay' => null);
	foreach ($relay_events as $event) {
		$BestTotalTime = 20000;
		foreach ($swimmers as $swimmer) {
			foreach ($swimmer->career as $season) {
				$times = $season->times;
				if ((sizeof($times) != 0) && ($times[$event] != null) && ($times[$event]->total_event_time != 2000)) {
					$BestTime = $times[$event];
					if (is_array($BestTime)) {
						foreach($BestTime as $leg) {
							if ($leg->total_event_time < $BestTotalTime && $leg->total_event_time != 0) {
								$BestTotalTime = $leg->total_event_time;
							}
						}
					}
					else if ($BestTime->total_event_time < $BestTotalTime && $BestTime->total_event_time != 0) {
						$BestTotalTime = $BestTime->total_event_time;
					}
				}
			}
		}
		
		foreach ($swimmers as $swimmer) {
			foreach ($swimmer->career as $season) {
				$times = $season->times;
				if ((sizeof($times) != 0) && ($times[$event] != null) && ($times[$event]->total_event_time != 2000)) {
					$BestTime = $times[$event];
					if (is_array($BestTime)) {
						foreach($BestTime as $leg) {
							if ($leg->total_event_time == $BestTotalTime) {
								if ($leg->leg == 1) {
									$first_leg = $leg;
								}
								if ($leg->leg == 2) {
									$second_leg = $leg;
								}
								if ($leg->leg == 3) {
									$third_leg = $leg;
								}
								if ($leg->leg == 4) {
									$fourth_leg = $leg;
								}
								$leg->club_record = true;
							}
						}
					}
					else if ($BestTime->total_event_time == $BestTotalTime) {
						if ($BestTime->leg == 1) {
							$first_leg = $BestTime;
						}
						if ($BestTime->leg == 2) {
							$second_leg = $BestTime;
						}
						if ($BestTime->leg == 3) {
							$third_leg = $BestTime;
						}
						if ($BestTime->leg == 4) {
							$fourth_leg = $BestTime;
						}
						$BestTime->club_record = true;
					}
				}
			}
		}
		if ($first_leg->event_time == 2000 || $second_leg->event_time == 2000 || $third_leg->event_time == 2000 || $fourth_leg->event_time == 2000) {
			$temp_records[$event] = null;
		}
		else if ($first_leg->total_event_time != $second_leg->total_event_time || $third_leg->total_event_time != $fourth_leg->total_event_time) {
			$temp_records[$event] = null;
		}
		else {
			$temp_records[$event] = array($first_leg,$second_leg,$third_leg,$fourth_leg);			
		}
	}
	return $temp_records;
}
function display_relay_records($male_relay_records,$female_relay_records,$relay_events) {
	$html = '';
	foreach ($relay_events as $event) {
		$maleLegs = $male_relay_records[$event];
		$femaleLegs = $female_relay_records[$event];
		$error_message = 'There was an error finding the indicated club record. We apologize for the inconvenience.';
		$html .= '<tr>';
		if (!($femaleLegs == null)) {
			$html .= '<td>';
			$html .= '<p>';
			$html .= '<a href="../Team/Female Athletes/'.get_page_link($femaleLegs[0]->swimmer).'.php">'.substr($femaleLegs[0]->swimmer->first_name,0,1).'. '.$femaleLegs[0]->swimmer->last_name.'</a>, ';
			$html .= '<a href="../Team/Female Athletes/'.get_page_link($femaleLegs[1]->swimmer).'.php">'.substr($femaleLegs[1]->swimmer->first_name,0,1).'. '.$femaleLegs[1]->swimmer->last_name.'</a>,';
			$html .= '</p>';
			$html .= '<p>';
			$html .= '<a href="../Team/Female Athletes/'.get_page_link($femaleLegs[2]->swimmer).'.php">'.substr($femaleLegs[2]->swimmer->first_name,0,1).'. '.$femaleLegs[2]->swimmer->last_name.'</a>, ';
			$html .= '<a href="../Team/Female Athletes/'.get_page_link($femaleLegs[3]->swimmer).'.php">'.substr($femaleLegs[3]->swimmer->first_name,0,1).'. '.$femaleLegs[3]->swimmer->last_name.'</a>';
			$html .= '</p>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.display_time($femaleLegs[0]->total_event_time).'</div>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.$femaleLegs[0]->meet->meet_date[2].'</div>';
			$html .= '</td>';
		}
		else {
			$html .= '<td colspan="3">';
			$html .= "<p>$error_message</p>";
			$html .= '</td>';
		}
		
		$html .= '<td>';
		$html .= '<div align="center">'.$event.'</div>';
		$html .= '</td>';
		if (!($maleLegs == null)) {
			$html .= '<td>';
			$html .= '<p>';
			$html .= '<a href="../Team/Male Athletes/'.get_page_link($maleLegs[0]->swimmer).'.php">'.substr($maleLegs[0]->swimmer->first_name,0,1).'. '.$maleLegs[0]->swimmer->last_name.'</a>, ';
			$html .= '<a href="../Team/Male Athletes/'.get_page_link($maleLegs[1]->swimmer).'.php">'.substr($maleLegs[1]->swimmer->first_name,0,1).'. '.$maleLegs[1]->swimmer->last_name.'</a>,';
			$html .= '</p>';
			$html .= '<p>';
			$html .= '<a href="../Team/Male Athletes/'.get_page_link($maleLegs[2]->swimmer).'.php">'.substr($maleLegs[2]->swimmer->first_name,0,1).'. '.$maleLegs[2]->swimmer->last_name.'</a>, ';
			$html .= '<a href="../Team/Male Athletes/'.get_page_link($maleLegs[3]->swimmer).'.php">'.substr($maleLegs[3]->swimmer->first_name,0,1).'. '.$maleLegs[3]->swimmer->last_name.'</a>';
			$html .= '</p>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.display_time($maleLegs[0]->total_event_time).'</div>';
			$html .= '</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.$maleLegs[0]->meet->meet_date[2].'</div>';
			$html .= '</td>';
		}
		else {
			$html .= '<td colspan="3">';
			$html .= "<p>$error_message</p>";
			$html .= '</td>';
		}
		
		$html .= '</tr>';
	}
	$html .= '</table>';
	return $html;
}


/*Takes every time from every swimmer and returns an associative array with each key being the event and each value being an*/
/*array of the 10 best times for that event. But not actually, because that would be too easy. Instead it only uses the top*/
/*time from each swimmer, so that there is only one time from each swimmer for each event, and it is their best career time.*/
function get_top_10($events, $swimmers) {
	$temp_records = array('50 Freestyle' => null,
					  '100 Freestyle' => null,
					  '200 Freestyle' => null,
					  '500 Freestyle' => null,
					  '1000 Freestyle' => null,
					  '1650 Freestyle' => null,
					  '50 Backstroke' => null,
					  '100 Backstroke' => null,
					  '200 Backstroke' => null,
					  '50 Breaststroke' => null,
					  '100 Breaststroke' => null,
					  '200 Breaststroke' => null,
					  '50 Butterfly' => null,
					  '100 Butterfly' => null,
					  '200 Butterfly' => null,
					  '100 Freestyle' => null,
					  '100 IM' => null,
					  '200 IM' => null,
					  '400 IM' => null);
	foreach ($events as $event) {
		$top_10 = array_fill(0,10,new BestTime($New_Swimmer_Template,2000,$Nats_15,999)); /*start with big times that will all get replaced by real ones*/
		$swimmers_acc = array(); /*accumulator to make sure people only appear once in the list*/
		foreach ($swimmers as $swimmer) {
			$all_event_times = array(); /*holds all of a swimmer's bestTimes for the given event. The fastest of these will be used in the final list.*/
			$seasons = $swimmer->career;
			foreach ($seasons as $season) {
				$BestTime = $season->times[$event];
				if ($BestTime != null) { /*otherwise null would almost always win and we'd have a pretty blank page*/
					array_push($all_event_times,$BestTime); /*put the time from that season into the list of contenders*/
				}
			}
			$BestTime = new BestTime($New_Swimmer_Template,20000,$Nats_15,999);
			foreach ($all_event_times as $contender) {/*picks the swimmer's best time in the event from all seasons*/
				if ($contender->event_time < $BestTime->event_time) {
					$BestTime = $contender;
				}
			}
			if (!(in_array($BestTime->swimmer,$swimmers_acc))) { /*keeps the sorting-algorithm below from basically imploding on itself.*/
				for ($i = 0; $i < 10; $i++) { /*move the items in the list down when a new item is put in the middle of the list.*/
					if (($BestTime->event_time < $top_10[$i]->event_time)) {
						for ($j = 9; $j > $i; $j--) {
							$top_10[$j] = $top_10[$j - 1];
						}
						$top_10[$i] = $BestTime;
						array_push($swimmers_acc,$BestTime->swimmer);
						break;
						break;
					}
				}
			}
		}
		for ($i = 9; $i >= 0; $i--) {
			if ($top_10[$i]->event_time != 99999) {
				break;
			}
			else {
				$top_10[$i] = null;
			}
		}
		$temp_records[$event] = $top_10;
	}
	return $temp_records;
}

/*When called from top10.php, this function will take the times calculated in get_top_10 and return the proper top 10 times table*/
function display_top_10($male_top10,$female_top10,$events) {
	$html = '';
	global $no_link;
	foreach ($events as $event) {
		$female_10_times = $female_top10[$event];
		$male_10_times = $male_top10[$event];
		
		$html .= '<table width="969" style="border-collapse: collapse;” border="0" class="top10table">';
		$html .= '<tr>';
		$html .= '<td colspan="9" bgcolor="#4F9DE8" height="37">';
		$html .= '<div align="center">';
		$html .= '<big>';
		$html .= '<b>';
		$html .= '<a name="fr100" id="'.$event.'"></a>';
		$html .= $event;
		$html .= '</b></big>';
		$html .= '</div></td>';
		$html .= '</tr><tr>';
		$html .= '<td width="44" bgcolor="#4F9DE8">';
		$html .= '<div align="center"></div>';
		$html .= '</td>';
		$html .= '<td width="200" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Women</strong>';
		$html .= '</div></td>';
		$html .= '<td width="100" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Time</strong>';
		$html .= '</div></td>';
		$html .= '<td width="107" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Year</strong>';
		$html .= '</div></td>';
		$html .= '<td width="29" bgcolor="#4F9DE8">';
		$html .= '<div align="center"></div>';
		$html .= '</td>';
		$html .= '<td width="44" bgcolor="#4F9DE8">';
		$html .= '<div align="center"></div>';
		$html .= '</td>';
		$html .= '<td width="200" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Men</strong>';
		$html .= '</div></td>';
		$html .= '<td width="100" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Time</strong>';
		$html .= '</div></td>';
		$html .= '<td width="107" bgcolor="#4F9DE8">';
		$html .= '<div align="center">';
		$html .= '<strong>Year</strong>';
		$html .= '</div></td></tr>';
		for ($i = 0; $i < 10; $i++) {
			$female_BestTime = $female_10_times[$i];
			$female_swimmer = $female_BestTime->swimmer;
			$male_BestTime = $male_10_times[$i];
			$male_swimmer = $male_BestTime->swimmer;
			$html .= '<tr><td>';
			$num_of_male_ties = 0;
			$num_of_female_ties = 0;
			$male_link = true;
			$female_link = true;
			
			if ($female_BestTime->event_time == $female_10_times[$i - 1]->event_time) {
				$num_of_female_ties += 1;
			}
			if ($male_BestTime->event_time == $male_10_times[$i - 1]->event_time) {
				$num_of_male_ties += 1;
			}
			if (in_array($female_swimmer->first_name.' '.$female_swimmer->last_name,$no_link)) {
				$female_link = false;
			}
			if (in_array($male_swimmer->first_name.' '.$male_swimmer->last_name,$no_link)) {
				$male_link = false;
			}
			
			$female_place = (($i + 1) - $num_of_female_ties);
			$male_place = (($i + 1) - $num_of_male_ties);
			
			$html .= '<div align="center">'.strval($female_place).'</div>';
			$html .= '</td><td>';
			if ($female_link) {
				$html .= '<a href="../Team/Female Athletes/'.get_page_link($female_swimmer).'.php">';
			}
			$html .= $female_swimmer->first_name.' '.$female_swimmer->last_name;
			if ($female_link) {
				$html .= '</a>';
			}
			$html .= '</td><td>';
			$html .= '<div align="center">';
			if ($female_BestTime->event_time > 0) {
				$html .= display_time($female_BestTime->event_time);
			}
			$html .= '</div>';
			$html .= '</td><td>';
			$html .= '<div align="center">'.$female_BestTime->meet->meet_date[2].'</div>';
			$html .= '</td>';
			$html .= '<td>&nbsp;</td>';
			$html .= '<td>';
			$html .= '<div align="center">'.strval($male_place).'</div>';
			$html .= '</td><td>';
			if ($male_link) {
				$html .= '<a href="../Team/Male Athletes/'.get_page_link($male_swimmer).'.php">';
			}
			$html .= $male_swimmer->first_name.' '.$male_swimmer->last_name;
			if ($male_link) {
				$html .= '</a>';
			}
			$html .= '</td><td>';
			$html .= '<div align="center">'.display_time($male_BestTime->event_time).'</div>';
			$html .= '</td><td>';
			$html .= '<div align="center">'.$male_BestTime->meet->meet_date[2].'</div>';
			$html .= '</td></tr>';
		}
		$html .= '</table>';
	}
	return $html;
}



/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////End of club record calculations

//UPDATE IF...
//  you want to change how many slides are cycled through on the home page.
//   ->To do this, look for the EDIT comments in the function.
//  Note: if you change num_of_slides to a bad number it will default to all of the picutres
//Returns the code which creates the slideshow on the homepage*/
function get_index_slides() {
	$html = '';
	$html .= '<div class="flex-control-paging">';
	$html .= '<div class="flexslider">';
	$html .= '<ul class="slides">';
	$html .= '<!-- picture resolution should ALWAYS be: width: 961px; height: 646px; -->';
	
	/*Sees how many pictures are in the slideshow folder*/
	/*I took this code from the internet and don't know exactly how it works so try not to mess with it too much*/
	$filecount = 0; 
    $dir = 'Core Images/Flexslider/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $filecount++;
        }
    }

	$upper_bound = $filecount;
	
	/*EDIT*/
	$num_of_slides =/*EDIT*/ 6;
	/*END EDIT*/
	
	$accumulator = array(9);
	
	/*if someone tries to display negative slides or more slides than there are, it just displays all the pictures*/
	if (($num_of_slides < 1) || ($num_of_slides > $filecount)) {
		$num_of_slides = $filecount;
	}
	
	/*put the banner puc first every time*/
	$html .= '<li>';
	$html .= '<img class="slideshow_img" src="../Core Images/Flexslider/Slideshow9.jpg"/>';
	$html .= '</li>';
	
	/*get other random pics*/
	for ($i = 1; $i < $num_of_slides; $i++) {
		$pic_num = rand(1,$upper_bound);
		while (in_array($pic_num,$accumulator)) {
			$pic_num = rand(1,$upper_bound);
		}
		$html .= '<li>';
		$html .= '<img class="slideshow_img" src="../Core Images/Flexslider/Slideshow'.strval($pic_num).'.jpg"/>';
		$html .= '</li>';
		array_push($accumulator,$pic_num);
	}
	
	
	$html .= '</ul>';
	$html .= '</div>';
	$html .= '</div>';
	
	
	return $html;
}

/*Returs the code to build the men's team page*/
function build_mens_roster($swimmers) {
	$html = '';
	foreach($swimmers as $swimmer) {

		$alternate_page_link = get_page_link($swimmer);
		$img_uri = get_last_first($swimmer);
		$html .= '<div class="row swimmer">';
		$html .= '<div class="pic">';
		$html .= '<a href="../Team/Male Athletes/'.$alternate_page_link.'.php">';
		
		$filepath = $_SERVER['DOCUMENT_ROOT'] . 'Core Images/Team Shots/'.$img_uri.'.jpg';
		
		if (file_exists($filepath)) {
			$html .= '<img src="../../Core Images/Team Shots/'.$img_uri.'.jpg" alt="'.$swimmer->first_name.'" />';
		}
		else {
			$html .= '<img src="../../Core Images/athlete_placeholder.png" alt="'.$swimmer->last_name.'" />';
		}
		$html .= '</a>';
		$html .= '</div>';
		$html .= '<div class="name"><p class="header"><strong>Name</strong></p>';
		$html .= '<a href="../Team/Male Athletes/'.$alternate_page_link.'.php"><p>'.$swimmer->first_name.' '.$swimmer->last_name.' '.$swimmer->eboard.'</p></a>';
		$html .= '</div>';
		$html .= '<div class="year"><p class="header"><strong>Year</strong></p><p>'.$swimmer->year.'</p></div>';
		$html .= '<div class="stroke"><p class="header"><strong>Stroke</strong></p><p>'.$swimmer->stroke.'</p></div>';
		$html .= '<div class="high_school"><p class="header"><strong>High School</strong></p><p>'.$swimmer->high_school.'</p></div>';
		$html .= '<div class="hometown"><p class="header"><strong>Hometown</strong></p><p>'.$swimmer->hometown.'</p></div>';
		$html .= '</div>';
	}
	return $html;
}

/*Returns the code to build the women's team page*/
function build_womens_roster($swimmers) {
	$html = '';
	foreach($swimmers as $swimmer) {

		$page_link = get_page_link($swimmer);
		$img_uri = get_last_first($swimmer);

		$html .= '<div class="row swimmer">';
		$html .= '<div class="pic">';
		$html .= '<a href="../Team/Female Athletes/'.$page_link.'.php">';
		
		$filepath = $_SERVER['DOCUMENT_ROOT'] . 'Core Images/Team Shots/'.$img_uri.'.jpg';
		
		if (file_exists($filepath)) {
			$html .= '<img src="../../Core Images/Team Shots/'.$img_uri.'.jpg" alt="'.$swimmer->first_name.'" />';
		}
		else {
			$html .= '<img src="../../Core Images/athlete_placeholder.png" alt="'.$swimmer->last_name.'" />';
		}
		$html .= '</a>';
		$html .= '</div>';
		$html .= '<div class="name"><p class="header"><strong>Name</strong></p>';
		$html .= '<a href="../Team/Female Athletes/'.$page_link.'.php"><p>'.$swimmer->first_name.' '.$swimmer->last_name.' '.$swimmer->eboard.'</p></a>';
		$html .= '</div>';
		$html .= '<div class="year"><p class="header"><strong>Year</strong></p><p>'.$swimmer->year.'</p></div>';
		$html .= '<div class="stroke"><p class="header"><strong>Stroke</strong></p><p>'.$swimmer->stroke.'</p></div>';
		$html .= '<div class="high_school"><p class="header"><strong>High School</strong></p><p>'.$swimmer->high_school.'</p></div>';
		$html .= '<div class="hometown"><p class="header"><strong>Hometown</strong></p><p>'.$swimmer->hometown.'</p></div>';
		$html .= '</div>';
	}
	return $html;
}

/*Returns the code for the header*/
function get_header($who) {
	$html = '';

	$html .='<div class="MenuDiv1">';
	$html .='<a class="map" href="http://www.nuswimmingclub.neu.edu/index.php"></a>';
	$html .='<div id="div1">';
	$html .='<div align="center">';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="">Team</a>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Womens%20Team.php">Women\'s Team</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Mens%20Team.php">Men\'s Team</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Coaches.php">Coaches</a>';
	$html .='</li>';
	$html .='<li>';
		$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Eboard.php">E-Board</a>';
	$html .='</li>';
	$html .='</ul>';
	$html .='</li>';
	$html .='</ul>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="">Schedule</a>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Schedule/Practice.php">Practice</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Schedule/2015-2016.php">2015-2016</a>';
	$html .='</li>';
	$html .='</ul>';
	$html .='</li>';
	$html .='</ul>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="">Records</a>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Records/Records.php">Team Records</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Records/Top10.php">Top 10 Times</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Records/Past%20Seasons.php">Past Seasons</a>';
	$html .='</li>';
	$html .='</ul>';
	$html .='</li>';
	$html .='</ul>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="">About Us</a>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/About%20Us/Faq.php">FAQ</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/About%20Us/History.php">Team History</a>';
	$html .='</li>';
	/*$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/About%20Us/Past%20Swimmers.php">Past Swimmers</a>';
	$html .='</li>';*/
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/About%20Us/Constitution.php">Constitution</a>';
	$html .='</li>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/About%20Us/Forms.php">Forms</a>';
	$html .='</li>';
	$html .='</ul>';
	$html .='</li>';
	$html .='</ul>';
	$html .='<ul>';
	$html .='<li>';
	$html .='<a href="http://www.nuswimmingclub.neu.edu/NUSC/Contact%20Us/Contactus.php">Contact Us</a>';
	$html .='</ul>';
	$html .='<div id="MediaDiv1">';
	$html .='<img class="social_imgs" src="http://www.nuswimmingclub.neu.edu/Core%20Images/social_media_icons.png" usemap="#Map2" border="0" style="padding-top: 10px;" />';
	$html .='<map name="Map2" id="Map2">';
	$html .='<area shape="circle" coords="64,19,19" href="http://www.twitter.com/NUSwimClub" alt="Twitter" />';
	$html .='<area shape="circle" coords="108,19,19" href="http://www.instagram.com/NUSwimClub" alt="Instagram" />';
	$html .='<area shape="circle" coords="20,19,19" href="http://www.facebook.com/NUSwimmingClub" alt="Facebook" />';
	$html .='</map>';
	$html .='</div>';
	$html .='</div>';
	$html .='</div>';
	$html .='</div>';

	return $html;
}

/*Returns the ocde for the footer*/
function get_footer($who) {
	$html = '';
	$html .= '<div id="FooterDiv1">';
	$html .= '<a href="http://www.gonu.com">';
	$html .= '<img src="http://www.nuswimmingclub.neu.edu/Core%20Images/Go%20NU%20Logo%20Grey.png" alt="Go NU" name="Image1" width="95" height="120" class="GoNU" id="Image1" onmouseover="MM_swapImage(';
	$html .= "'Image1','','http://www.nuswimmingclub.neu.edu/Core%20Images/Go%20NU%20Logo.png',1)";
	$html .= '" onmouseout="MM_swapImgRestore()" border="0" />';
	$html .= '</a>';
	$html .= '<a href="http://www.campusrec.neu.edu">';
	$html .= '<img src="http://www.nuswimmingclub.neu.edu/Core%20Images/Campus%20Rec%20Logo%20Grey%202.png" alt="Campus Rec" width="200" height="120" class="CampusRecreation" id="Image2" onmouseover="MM_swapImage(';
	$html .= "'Image2','','http://www.nuswimmingclub.neu.edu/Core%20Images/Campus%20Rec%20Logo.png',1)";
	$html .= '" onmouseout="MM_swapImgRestore()" border="0" />';
	$html .= '</a>';
	$html .= '<a href="http://swimclub.gtorg.gatech.edu/?page_id=54">';
	$html .= '<img src="http://www.nuswimmingclub.neu.edu/Core%20Images/ECCGrey.png" alt="ECC" width="95" height="120" class="ECC" id="Image3" onmouseover="MM_swapImage(';
	$html .= "'Image3','','http://www.nuswimmingclub.neu.edu/Core%20Images/ECCColor.png',1)";
	$html .= '" onmouseout="MM_swapImgRestore()" border="0" />';
	$html .= '</a>';
	$html .= '<p>&nbsp;</p>';
	$html .= '<p class="footer_text">';
	$html .= '<font color=#ffffff size=2> &copy Northeastern University Swim Club 2014-2015, all rights reserved. | Page designed & maintained by ';
	$html .= '<a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Male%20Athletes/Gell.php" style="color: rgb(255,255,255)">Kevin Gell</a> , <a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Male%20Athletes/Haviland.php" style="color: rgb(255,255,255)">Charlie Haviland</a> &amp; <a href="http://www.nuswimmingclub.neu.edu/NUSC/Team/Male%20Athletes/Leys.php" style="color: rgb(255,255,255)">Ryan Leys</a>';
	$html .= '</font>';
	$html .= '</p>';
	$html .= '</div>';

	return $html;
}
$qualifying_mens_times = array('50 Freestyle' => 26.09,
	  '100 Freestyle' => 57.99,
	  '200 Freestyle' => 124.99,
	  '500 Freestyle' => 325.09,
	  '1000 Freestyle' => 665.99,
	  '1650 Freestyle' => null,
	  '50 Backstroke' => 31.99,
	  '100 Backstroke' => 64.59,
	  '200 Backstroke' => 135.99,
	  '50 Breaststroke' => 34.99,
	  '100 Breaststroke' => 73.59,
	  '200 Breaststroke' => 200.99,
	  '50 Butterfly' => 28.59,
	  '100 Butterfly' => 60.99,
	  '200 Butterfly' => 134.09,
	  '100 IM' => 66.99,
	  '200 IM' => 143.99,
	  '400 IM' => 308.59);
	  
$qualifying_womens_times = array('50 Freestyle' => 31.59,
	  '100 Freestyle' => 68.99,
	  '200 Freestyle' => 146.59,
	  '500 Freestyle' => 375.09,
	  '1000 Freestyle' => 752.09,
	  '1650 Freestyle' => null,
	  '50 Backstroke' => 36.99,
	  '100 Backstroke' => 78.59,
	  '200 Backstroke' => 156.09,
	  '50 Breaststroke' => 41.99,
	  '100 Breaststroke' => 84.99,
	  '200 Breaststroke' => 179.59,
	  '50 Butterfly' => 33.59,
	  '100 Butterfly' => 72.59,
	  '200 Butterfly' => 158.99,
	  '100 IM' => 77.99,
	  '200 IM' => 160.09,
	  '400 IM' => 357.99);
/*Called only by generate_swimmer_page, this function builds the table containing the career best times for any swimmer*/
function generate_times_table($swimmer, $Current_Year){
	global $qualifying_mens_times;
	global $qualifying_womens_times;
	$Current_Season = $Current_Year;
	$gender = $swimmer->gender;
	$years_on_team = get_years_on_team($swimmer);
	if ($years_on_team == -42) {
		return '<div class="row"><p>An internal error has occurred.</p> <p>We apologize for the inconvenience.</p></div>';
	}
	$html = '';
	$career = $swimmer->career;
	for ($i = $years_on_team; $i > 0; $i--) {
		$season = $career[(count ($career) - $i)];
		$times = $season->times;
		if (!$season->skipped) {
			$html .='<div class="row dark_blue">';
				$html .= '<div class="season_header">';
					$html .='<b>';
						if ($i == $years_on_team && $swimmer->year != 'Alumni') {
							$html .='<big>Current Season</big>';
						}
						else {
							$html .='<big>'.strval(($Current_Season - (($years_on_team - $i) + 1))).' - '.strval(($Current_Season - ($years_on_team - $i))).' Season</big>';
						}
					$html .='</b>';
				$html .= '</div>';
			$html .='</div>';
			$html .='<div class="row dark_blue column_headings">';
				$html .='<div class="event">';
					$html .='<strong>Event</strong>';
				$html .='</div>';
				$html .='<div class="time">';
					$html .='<strong>Time</strong>';
				$html .='</div>';
				$html .='<div class="meet">';
					$html .='<strong>Meet</strong>';
				$html .='</div>';
				$html .='<div class="venue">';
					$html .='<strong>Venue</strong>';
				$html .='</div>';
				$html .='<div class="place">';
					$html .='<strong>Place</strong>';
				$html .='</div>';
				$html .='<div class="date">';
					$html .='<strong>Date</strong>';
				$html .='</div>';
			$html .='</div>';
	
			$event_count = 0;		
	
			foreach ($times as $event=>$BestTime) {
				$display_time = display_time($BestTime->event_time);
				if ($gender == "male") {
					if ($i == $years_on_team) {
						if ($BestTime->event_time <= $qualifying_mens_times[$event]) {
							$display_time = "<span class=\"qualified\" title=\"Qualifying Time: ".display_time($qualifying_mens_times[$event])."\">".$display_time."</span>";
						}
						else if (substr($event,0,2) != "4x"){
							$temp_display_time = $display_time;
							$display_time = "<span class=\"not_qualified\" ";
							$display_time .= "title=\"Qualifying Time: ";
							$display_time .= display_time($qualifying_mens_times[$event])." \n Drop ";
							$display_time .= $BestTime->event_time - $qualifying_mens_times[$event];
							$display_time .= " seconds to qualify!\">";
							$display_time .= $temp_display_time."</span>";
						}
					}
				}
				if ($gender == "female") {
					if ($i == $years_on_team) {
						if ($BestTime->event_time <= $qualifying_womens_times[$event]) {
							$display_time = "<span class=\"qualified\" title=\"Qualifying Time: ".display_time($qualifying_womens_times[$event])."\">".$display_time."</span>";
						}
						else if (substr($event,0,2) != "4x"){
							$temp_display_time = $display_time;
							$display_time = "<span class=\"not_qualified\" ";
							$display_time .= "title=\"Qualifying Time: ";
							$display_time .= display_time($qualifying_womens_times[$event])." \n Drop ";
							$display_time .= $BestTime->event_time - $qualifying_womens_times[$event];
							$display_time .= " seconds to qualify!\">";
							$display_time .= $temp_display_time."</span>";
						}
					}
				}
				
				if ($BestTime->meet == null) {
					$BestTime->meet = 'not a real meet';
				}
				if (is_array($BestTime)) {
					$first = true;
					foreach($BestTime as $leg) {
						$display_time = display_time($leg->event_time);
						$html .= '<div class="row best_time">';
						if ($first) {
							$html .= '<div class="event"><span>'.$event.'</span></div>';
						}
						else {
							$html .= '<div class="event" style="text-align: center"><span></span></div>';
						}
						if ($leg instanceof BestRelayTime) {
							$html .= '<div class="time"><span>'.display_place($leg->leg).' Leg, '.$display_time;
						}
						else if ($leg instanceof BestTime) {
							$html .= '<div class="time">'.$display_time;
						}
						if ($leg->club_record) {
							$html .= '#';
						}
						if ($leg->meet->meet_venue == 'GA Tech Aquatic Center' && $leg->place <= 20 && $leg->place > 0) {
							$html .= '^';
						}
						if ($leg->relay_leadoff) {
							$html .= '*';
						}
						$html .= '</span></div>';
						$html .= '<div class="meet"><span>'.$leg->meet->meet_name.'</div></span>';
						$html .= '<div class="venue"><span>'.$leg->meet->meet_venue.'</div><span>';
						$html .= '<div class="place"><span>'.display_place($leg->place).'</span></div>';
						$html .= '<div class="date"><span>'.display_date($leg->meet,$event).'</span></div>';
						$html .= '</div>';
		
						$first = false;
						$event_count += 1;
					}
				}
				if (null != $BestTime && (!(is_array($BestTime)))) {
					$html .= '<div class="row best_time">';
					$html .= '<div class="event"><span>'.$event.'</span></div>';
					if ($BestTime instanceof BestRelayTime) {
						$html .= '<div class="time"><span class="show_ms">Time: </span><span>'.display_place($BestTime->leg).' Leg, '.$display_time;
					}
					else if ($BestTime instanceof BestTime) {
						$html .= '<div class="time"><span class="show_ms">Time: </span><span>'.$display_time;
					}
					if ($BestTime->club_record) {
						$html .= '#';
					}
					if ($BestTime->meet->meet_venue == 'GA Tech Aquatic Center' && $BestTime->place <= 20 && $BestTime->place > 0) {
						$html .= '^';
					}
					if ($BestTime->relay_leadoff) {
						$html .= '*';
					}
					$html .= '</span></div>';
					$html .= '<div class="meet"><span>'.$BestTime->meet->meet_name.'</span></div>';
					$html .= '<div class="venue"><span>'.$BestTime->meet->meet_venue.'</span></div>';
					$html .= '<div class="place"><span>'.display_place($BestTime->place).'</span></div>';
					$html .= '<div class="date"><span class="show_ms">Date: </span><span>'.display_date($BestTime->meet,$event).'</span></div>';
					$html .= '</div>';
	
					$event_count += 1;
				}
			}
			if ($event_count == 0) {
					$html .= '<div class="row best_time">';
					$html .= '<div class="no_times">No Times Available</div>';
					$html .= '</div>';
			}
		}
	}
	return $html;
}

/*NEEDS TO BE UPDATED
//At the beginning of each season the $Current_Season should be incremented. See further instructions inside the function
//When called from a swimmer page this function will return the html with all of the swimmer's correct information*/
function generate_swimmer_page($swimmer) {
	
	
	/*EDIT CURRENT YEAR HERE,
	//Current_Season is whatever year nationals will be held in the season (the second year of the two)
	//Ex: 2014-2015 season -> Current_Season should be set to 2015*/
	$Current_Season = ($swimmer->year != "Alumni") ? 2016 : $swimmer->year_graduated;
	$times_table = generate_times_table($swimmer, $Current_Season);
	$Current_Season = 2016;
	
	
	$alternate_page_link = get_last_first($swimmer);
	$head = get_header('child');
	$foot = get_footer('child');
	$html = '';
	$html .='<head>';
	$html .='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	$html .='<title>NUSC | '.$swimmer->first_name.' '.$swimmer->last_name.'</title>';
	$html .='</head>';
	$html .='<body onload="MM_preloadImages(';
	$html .="'../../../Core%20Images/Go%20NU%20Logo.png','../../../Core%20Images/Campus%20Rec%20Logo.png','../../../Core%20Images/ECCColor.png')";
	$html .='">';
	$html .=$head;
	$html .='<div id="BodyDiv1">';
		$html .='<div class="swimmer_page_container">';
			$html .='<div class="row title_row">';
				$html .='<b>';
					$html .='<big>';
						$html .= '<big>'.strval(($Current_Season - ($i + 1))).' - '.strval(($Current_Season - $i)).' Northeastern University Swim Club</big>';
					$html .='</big>';
				$html .='</b>';
			$html .='</div>';
			$html .='<div class="row swimmer_info_row">';
				$html .='<div class="swimmer_pic_container">';
					$img_url = get_last_first($swimmer);
					
					$filepath = $_SERVER['DOCUMENT_ROOT'] . 'Core Images/Team Shots/'.$img_url.'.jpg';
					
					if (file_exists($filepath)) {
						$html .='<img class="swimmer_pic" src="../../../Core Images/Team Shots/'.$img_url.'.jpg" alt="'.$swimmer->first_name.'" />';
					}
					else {
						$html .='<img class="swimmer_pic" src="../../../Core Images/athlete_placeholder.png" alt="'.$swimmer->first_name.'" />';
					}
				$html .='</div>';
				$html .='<div class="swimmer_name">';
					$html .='<big>';
						$html .='<big>';
							$html .='<b>';
								$html .=$swimmer->first_name." $x";
							$html .='</b>';
						$html .='</big>';
					$html .='</big>';
				$html .='</div>';
				$html .='<div class="swimmer_stroke">';
					$html .='<b>Stroke:</b> '.$swimmer->stroke;
				$html .='</div>';
				$html .='<div class="swimmer_height">';
					if ($swimmer->feet_tall != -42 && $swimmer->inches_tall != -42) {
						$html .='<b>Height:</b> '.$swimmer->feet_tall.' ft '.$swimmer->inches_tall.' in';
					}
					else {
						$html .='<b>Height: ERROR</b> ';
					}
				$html .='</div>';
				$html .='<div class="swimmer_year">';
					$html .='<b>Year:</b> '.$swimmer->year;
				$html .='</div>';
				$html .='<div class="swimmer_hs">';
					$html .='<b>High School:</b> '.$swimmer->high_school;
				$html .='</div>';
				$html .='<div class="swimmer_hometown">';
					$html .='<b>Hometown:</b> '.$swimmer->hometown;
				$html .='</div>';
			$html .='</div>';
			$html .='<div class="row">';
				$html .='<div class="swimmer_bio">';
					$html .='<p class="margin">';
						$html .=$swimmer->bio;
					$html .='</p>';
				$html .='</div>';
			$html .='</div>';
			$html .='<div class="row key">';
				$html .='<div><small>* (Relay Lead Off) </small></div>';
				$html .='<div><small># (Club Record)</small></div>';
				$html .='<div><small>^ (ECC Finalist)</small></div>';
			$html .='</div>';
			$html .= $times_table;
		$html .='</div>';
	$html .='</div>';
	$html .=$foot;

	return $html;
}
function build_past_seasons($seasons) {
	$html = '';
	foreach ($seasons as $meets) {
		$year1 = $meets[sizeof($meets)-1]->meet_date[2];
		$year2 = $year1 + 1;
		$header = $year1.' - '.$year2;
		$link = $year1.'-'.$year2;
		$html .= '<tr>
					<td height="37" colspan="4" bgcolor="#4F9DE8">
						<div align="center">
							<big>
								<b> '.$header.' Meet Schedule</b>
							</big>
						</div>
					</td>
				</tr>
				<tr>
					<td width="135" bgcolor="#4F9DE8">
						<div align="center"></div>
					</td>
					<td width="477" bgcolor="#4F9DE8">
						<div align="center">
							<b>Meet</b>
						</div>
					</td>
					<td width="161" bgcolor="#4F9DE8">
						<div align="center">
							<b>Date</b>
						</div>
					</td>
					<td width="178" bgcolor="#4F9DE8">
						<div align="center">
							<b>Results</b>
						</div>
					</td>
				</tr>';
		foreach ($meets as $meet) {
			$img = $meet->meet_results[2];
			$html .= '<tr>
						<td>
							<div align="center">
								<img src="../../Core Images/Team Logos/'.$img.'.png" width="100" height="100" alt="'.$img.'" />
							</div>
						</td>
						<td>
							<div align="center">'.substr($meet->meet_name,5).'</div>
						</td>
						<td>
							<div align="center">'.display_date($meet).'</div>
						</td>
						<td>
							<p align="center">
								<strong>'.$meet->meet_results[0].'</strong>
							</p>';
							if ($meet->meet_results[1] != "") {
								$html .= '<p align="center">
											<a target="_blank" href="../Results/'.$link.'/'.$meet->meet_results[1];
											if ($meet->meet_name != '2014 UMASS Amherst Invitational'){
												$html.= '.pdf">Full Results</a>';
											}
											else {
												$html.= '.xlsx">Full Results</a>';
											}
										  $html .= '</p>';
							}
						$html .= '</td>
					</tr>';
		}
	}
	return $html;
}
?>