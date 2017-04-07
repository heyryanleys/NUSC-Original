<?php
class Meet {
   public $meet_name = '';
   public $meet_venue = '';
   public $meet_date = array();
   public $meet_results = array("TBD","","");
   function __construct($meet_name, $meet_venue,$meet_date,$meet_results) {
       $this->meet_name = $meet_name;
       $this->meet_venue = $meet_venue;
       //sets the event date (if it is an actual date)
       if (is_array($meet_date) && $meet_date[0] > 0 && $meet_date[0] < 13
           && $meet_date[1] > 0 && $meet_date[1] < 32 && $meet_date[2] > 2004) {
           $this->meet_date = $meet_date;
       } else {
           $this->meet_date = null;
       }

       //sets the meet results
       if (is_array($meet_results) && sizeof($meet_results) == 3)  {
           $this->meet_results = $meet_results;
       }
   }
}

//2003
$Meet_03 = new Meet('','',array(1,1,2003));
//2004
$Meet_04 = new Meet('','',array(1,1,2004));
//2005
$Meet_05 = new Meet('','',array(1,1,2005));
//2006
$Meet_06 = new Meet('','',array(1,1,2006));
//2007
$Meet_07 = new Meet('','',array(1,1,2007));
//2008
$Meet_08 = new Meet('','',array(1,1,2008));
//2009
$Meet_09 = new Meet('','',array(1,1,2009));
//2010
$Meet_10 = new Meet('','',array(1,1,2010));
$NCCS_10 = new Meet('2010 NUSC Fall Invitational','Barletta Natatorium',array(11,13,2010),array("Unknown","","NU"));
$Princeton_10 = new Meet('2010 Princeton Invitational','Ye Old Dillon Gymnasium',array(11,21,2010),array("1st - 734.5 Pts.","Princeton Results 2010","Princeton"));
$Harvard_10 = new Meet('2010 Harvard Invitational','Blodgett Pool',array(10,30,2010),array("2nd - 528 Pts.","","Harvard"));
//2011
$Meet_11 = new Meet('','',array(1,1,2011));
$Nats_11 = new Meet('2011 ECC Nationals','GA Tech Aquatic Center',array(4,1,2011),array('32nd - 24 Pts','2011_ecc_results','ECC 2011'));
$Harvard_11 = new Meet('2011 Harvard Invitational','Blodgett Pool',array(10,22,2011),array('1st - 336 Pts.','Harvard Fall 2011 Invitational Results Sheet1','Harvard'));
$F_RVB_11 = new Meet('2011 NUSC RVB Meet','Barletta Natatorium',array(10,15,2011),array('Red - 271.5 Black - 268.5','','NU'));
$NCCS_11 = new Meet('2011 NCCS Invitational','Barletta Natatorium',array(11,5,2011),array('1st - 197 Pts.','November 5 invitational 11 Results','NU'));
$UVM_11 = new Meet('2011 UVM Invitational','Patrick Gymnasium',array(3,19,2011),array('1st','2011 Spring UVM Results','UVM'));
$Princeton_11 = new Meet('2011 Princeton Invitational','Dillon Gymnasium',array(11,19,2011),array('1st','','Princeton'));
//2012
$Meet_12 = new Meet('','',array(1,1,2012));
$Nats_12 = new Meet('2012 ECC Nationals','GA Tech Aquatic Center',array(3,30,2012),array('17th - 236 Pts','','ECC 2012'));
$Amherst_12 = new Meet('2012 UMASS Amherst Invitational','Boyden Pool',array(11,17,2012),array('3rd - 127 Pts.','','Umass'));
$NCCS_12 = new meet('2012 NUSC Fall Invitational','Barletta Natatorium',array(10,13,2012),array('1st','NUSC Invitational 10 13 12','NU'));
$F_RVB_12 = new Meet('2012 Fall RVB Meet','Barletta Natatorium',array(10,6,2012),array('Black - 242 Red - 149','2012 Fall RVB Meet Results','NU'));
$UVM_12 = new Meet('2012 UVM Invitational','Patrick Gymnasium',array(11,3,2012),array('1st','UVM 2012','UVM'));
$Princeton_12 = new Meet('2012 Princeton Invitational','DeNunzio Natatorium',array(12,1,2012),array('3rd - 725 Pts.','Princeton Results 2012','Princeton'));
$Swim_Bunny_12 = new Meet('2012 UCONN Swim Bunny Invitational','Wolff-Zackin Natatorium',array(2,30,2012),array('Unknown','','UConn'));
//2013
$Meet_13 = new Meet('','',array(1,1,2013));
$Swim_Bunny_13 = new Meet('2013 UCONN Swim Bunny Invitational','Wolff-Zackin Natatorium',array(3,30,2013),array('3rd - 725 Pts.','UCONN Swim Bunny Invitational 2013','UConn'));
$F_RVB_13 = new Meet('2013 Fall RVB Meet','Barletta Natatorium',array(10,5,2013),array('Black - 1,232 Red - 1,222','RVB 10_5_13 Results','NU'));
$S_RVB_13 = new Meet('2013 Spring RVB Meet','Barletta Natatorium',array(3,23,2013),array('Red - 678.5 Black - 568.5','RVB 1 3_16_13','NU'));
$Nats_13 = new Meet('2013 ECC Nationals','GA Tech Aquatic Center',array(4,19,2013),array('12th - 305 Pts.','2013_ecc_results','ECC 2013'));
$Harvard_13 = new Meet('2013 Harvard Invitational','Blodgett Pool',array(10,19,2013),array('3rd - 208 Pts.','2013 Harvard Invitational Results','Harvard'));
$URI_13 = new Meet('2013 URI Dual Meet','Tootell Aquatic Center',array(2,16,2013),array('1st - 123 Pts.','2013 URI Dual Meet Results','URI'));
$Princeton_13 = new Meet('2013 Princeton Invitational','DeNunzio Natatorium',array(11,23,2013),array('1st - 1,597.5 Pts.','2013 Princeton Invitational Results','Princeton'));
$NCCS_13 = new meet('2013 NCCS Invitational','Barletta Natatorium',array(11,2,2013),array('1st - 3,146.5 Pts.','2013 NCCS Invitational Results','NU'));
$Uconn_13 = new Meet('2013 UCONN Sadzoni Invitational','Wolff-Zackin Natatorium',array(11,16,2013),array('2nd - 201 Pts.','2013 UCONN Sadzoni Invitational Results','UConn'));
$Rutgers_13 = new Meet('2013 Rutgers Spring Splash Invite','Sonny Werblin Rec Center',array(2,23,2013),array('2nd - 862.5 Pts.','Rutgers Invitational 2013','Rutgers'));
//2014
$Meet_14 = new Meet('','',array(1,1,2014),array('','',''));
$Nats_14 = new Meet('2014 ECC Nationals','GA Tech Aquatic Center',array(4,4,2014),array('4th - 762 Pts.','2014 ECC Nationals Results','ECC 2014'));
$Amherst_14 = new Meet('2014 UMASS Amherst Invitational','Boyden Pool',array(11,15,2014),array('1st - 260 Pts.','2014 UMASS Invitational Results','Umass'));
$NCCS_14 = new Meet('2014 NCCS Invitational','Barletta Natatorium',array(11,8,2014),array('1st - 1,502.5 Pts.','2014 NCCS Invitational Results','NU'));
$Harvard_14 = new Meet('2014 Harvard Invitational','Blodgett Pool',array(10,26,2014),array('1st - 1,708 Pts.','2014 Harvard Invitational Results','Harvard'));
$UVM_14 = new Meet('2014 UVM Dual Meet','Patrick Gymnasium',array(2,8,2014),array('1st - 223 Pts.','2014 UVM Dual Meet Results','UVM'));
$URI_14 = new Meet('2014 URI Dual Meet','Tootell Aquatic Center',array(3,1,2014),array('2nd - 115 Pts.','','URI'));
$F_RVB_14 = new Meet('2014 Fall RVB Meet','Barletta Natatorium',array(10,4,2014),array('Red 401 - Black 393','2014 rvb results','NU'));
$Rutgers_14 = new Meet('2014 Rutgers Winter Classic','Sonny Werblin Rec Center',array(2,22,2014),array('1st - 1,112 Pts.','2014 Rutgers Winter Classic Results','Rutgers'));
//2015
$Meet_15 = new Meet('','',array(1,1,2015));
$Nats_15 = new Meet('2015 ECC Nationals','GA Tech Aquatic Center',array(4,10,2015),array('TBD','','ECC 2015'));
$S_RVB_15 = new Meet('2015 Spring RVB Meet','Barletta Natatorium',array(1,31,2015),array('Black - 1027 Red - 942','','NU'));
$F_RVB_15 = new Meet('2015 Fall RVB Meet','Barletta Natatorium',array(10,3,2015),array('Black - 294 Red 284','fall 2015 rvb results','NU'));
$Lowell_15 = new Meet('2015 UMASS Lowell Invitational','Costello Pool',array(2,22,2015),array('1st - 554 Pts.','UML Meet Results','UMassLowell'));
$PSU_15 = new Meet('2015 Penn State Invitational','McCoy Natatorium',array(2,7,2015),array('2nd - 840.50 Pts.','PSU Invite Results','penn state'));
$Harvard_15 = new Meet('2015 Harvard Invitational','Blodgett Pool',array(10,24,2015),array('2nd - 1196','Harvard Invitational Results 2015','Harvard'));
$NCCS_15 = new Meet('2015 NCCS Invitational','Barletta Natatorium',array(11,7,2015),array('1st - 1354','2015 nccs meet results','NU'));
$UVM_15 = new Meet('2015 UVM Dual Meet','Patrick Gymnasium',array(3,21,2015),array('Unknown','','UVM'));
$Villanova_15 = new Meet('2015 Villanova Invitational','Pavillion Pool',array(11,21,2015),array('TBD','','Villanova'));

$Meets_10_11 = array($Nats_11,$UVM_11,$Princeton_10,$NCCS_10,$Harvard_10);
$Meets_11_12 = array($Nats_12,$Swim_Bunny_12,$Princeton_11,$NCCS_11,$Harvard_11,$F_RVB_11);
$Meets_12_13 = array($Nats_13,$Swim_Bunny_13,$S_RVB_13,$Rutgers_13,$URI_13,$Princeton_12,$Amherst_12,$UVM_12,$NCCS_12,$F_RVB_12);
$Meets_13_14 = array($Nats_14,$URI_14,$Rutgers_14,$UVM_14,$Princeton_13,$Uconn_13,$NCCS_13,$Harvard_13,$F_RVB_13);
$Meets_14_15 = array($Nats_15,$Lowell_15,$PSU_15,$S_RVB_15,$Amherst_14,$NCCS_14,$Harvard_14,$F_RVB_14);
$Meets_15_16 = array($Villanova_15,$NCCS_15,$Harvard_15,$F_RVB_15);

$Past_Meets = array($Meets_14_15,$Meets_13_14,$Meets_12_13,$Meets_11_12,$Meets_10_11);
$This_Season = array($Meets_15_16);

class BestTime {
   public $Swimmer = null;
   public $event_time = 99999;
   public $meet = null;
   public $place = -2;
   public $club_record = false;
   public $relay_leadoff = false;
   function __construct($Swimmer, $event_time, $meet, $place, $relay_leadoff) {
       //sets swimmer
       $this->swimmer = $Swimmer;
       //sets the event time (if its greater than 0)
       if (is_float($event_time) && $event_time > 0) {
           $this->event_time = $event_time;
       }
       //sets the meet (if its a string)
       if ($meet instanceof Meet) {
           $this->meet = $meet;
       }
       //sets the place
       if (is_int($place) && $place > -2) {
           $this->place = $place;
       }
       else {
           $this->place = -42;
       }
       $this->relay_leadoff = $relay_leadoff;
   }

}

class BestRelayTime extends BestTime {
   public $leg;
   public $total_event_time = 2000;
   function __construct($Swimmer, $event_time, $meet, $place, $leg, $total_event_time) {
       parent::__construct($Swimmer, $event_time, $meet, $place);
       if (is_int($leg) && $leg > 0 && $leg < 5) {
           $this->leg = $leg;
       }
       else {
           $this->leg = -42;
       }
       //sets the total event time (if higher than event_time)
       if (is_float($total_event_time) && $total_event_time > $event_time) {
           $this->total_event_time = $total_event_time;
       }
   }

}

class Season {
   public $times;
   public $skipped = false;
   function __construct($times,$skipped) {
       if (is_array($times)) {
       $this->times = $times;
       }
       if (is_bool($skipped)) {
    	$this->skipped = $skipped;
   		}
   }

}


/* BEST TIME TEMPLATE:

$Swimmer_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Swimmer,0,$Nats_15,0),
     "100 Freestyle" => new BestTime($Swimmer,0,$Nats_15,0),
     "200 Freestyle" => new BestTime($Swimmer,0,$Nats_15,0),
     "500 Freestyle" => new BestTime($Swimmer,0,$Nats_15,0),
     "1000 Freestyle" => new BestTime($Swimmer,0,$Nats_15,0),
     "1650 Freestyle" => new BestTime($Swimmer,0,$Nats_15,0),
     "50 Backstroke" => new BestTime($Swimmer,0,$Nats_15,0),
     "100 Backstroke" => new BestTime($Swimmer,0,$Nats_15,0),
     "200 Backstroke" => new BestTime($Swimmer,0,$Nats_15,0),
     "50 Breaststroke" => new BestTime($Swimmer,0,$Nats_15,0),
     "100 Breaststroke" => new BestTime($Swimmer,0,$Nats_15,0),
     "200 Breaststroke" => new BestTime($Swimmer,0,$Nats_15,0),
     "50 Butterfly" => new BestTime($Swimmer,0,$Nats_15,0),
     "100 Butterfly" => new BestTime($Swimmer,0,$Nats_15,0),
     "200 Butterfly" => new BestTime($Swimmer,0,$Nats_15,0),
     "100 IM" => new BestTime($Swimmer,0,$Nats_15,0),
     "200 IM" => new BestTime($Swimmer,0,$Nats_15,0),
     "400 IM" => new BestTime($Swimmer,0,$Nats_15,0),
     "4x50 Freestyle Relay" => new BestRelayTime($Swimmer,0,$Nats_15,0,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Swimmer,0,$Nats_15,0,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Swimmer,0,$Nats_15,0,4),
     "4x50 Medley Relay" => new BestRelayTime($Swimmer,0,$Nats_15,0,4),
     "4x100 Medley Relay" => new BestRelayTime($Swimmer,0,$Nats_15,0,4)
));
$Swimmer_Sophomore_Season = new Season (array());
$Swimmer_Middler_Season = new Season (array());
$Swimmer_Junior_Season = new Season (array());
$Swimmer_Senior_Season = new Season (array());

$Swimmer_Career = array($Swimmer_Senior_Season,$Swimmer_Junior_Season,
                       $Swimmer_Middler_Season,$Swimmer_Sophomore_Season, $Swimmer_Freshman_Season);


*/


//    ALUMNI    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*Maya Gilchrist*/$Maya_Gilchrist_Freshman_Season = new Season (array("200 Backstroke" => new BestTime($Maya_Gilchrist,150.77,$Nats_14,0))); $Maya_Gilchrist_Career = array($Maya_Gilchrist_Freshman_Season);/*Emily Johnson*/$Emily_Johnson_Freshman_Season = new Season (array("200 Backstroke" => new BestTime($Emily_Johnson,152.21,$Meet_09,0))); $Emily_Johnson_Career = array($Emily_Johnson_Freshman_Season);/*Taylor Obey*/$Taylor_Obey_Freshman_Season = new Season (array("200 Backstroke" => new BestTime($Taylor_Obey,157.14,$Meet_08,0))); $Taylor_Obey_Career = array($Taylor_Obey_Freshman_Season);/*Caitlin Winters*/$Caitlin_Winters_Freshman_Season = new Season (array("200 Backstroke" => new BestTime($Caitlin_Winters,158.08,$Meet_09,0))); $Caitlin_Winters_Career = array($Caitlin_Winters_Freshman_Season);/*Camille Schiff*/$Camille_Schiff_Freshman_Season = new Season (array("50 Backstroke" => new BestTime($Camille_Schiff,31.71,$Nats_13,0))); $Camille_Schiff_Career = array($Camille_Schiff_Freshman_Season);/*Austin Mateo*/$Austin_Mateo_Freshman_Season = new Season (array("50 Backstroke" => new BestTime($Austin_Mateo,31.44,$Nats_13,0), "100 Backstroke" => new BestTime($Austin_Mateo,67.42,$Nats_13,0), "200 Backstroke" => new BestTime($Austin_Mateo,154.18,$Nats_13,0))); $Austin_Mateo_Career = array($Austin_Mateo_Freshman_Season);/*Eryn Nakashima*/$Eryn_Nakashima_Freshman_Season = new Season (array("100 Backstroke" => new BestTime($Eryn_Nakashima,69.28,$Nats_13,0), "50 Breaststroke" => new BestTime($Eryn_Nakashima,35.15,$Nats_13,0), "100 Breaststroke" => new BestTime($Eryn_Nakashima,77.15,$Nats_13,0), "100 IM" => new BestTime($Eryn_Nakashima,67.85,$Nats_13,0), "200 IM" => new BestTime($Eryn_Nakashima,147.93,$Nats_13,0))); $Eryn_Nakashima_Career = array($Eryn_Nakashima_Freshman_Season);/*Kaitlyn Fagundes*/$Kaitlyn_Fagundes_Freshman_Season = new Season (array("50 Backstroke" => new BestTime($Kaitlyn_Fagundes,31.71,$Nats_12,0), "100 Backstroke" => new BestTime($Kaitlyn_Fagundes,70.19,$Nats_11,0))); $Kaitlyn_Fagundes_Career = array($Kaitlyn_Fagundes_Freshman_Season);/*Kimberly Forester*/$Kimberly_Forester_Freshman_Season = new Season (array("50 Backstroke" => new BestTime($Kimberly_Forester,30.65,$Meet_10,0), "100 Backstroke" => new BestTime($Kimberly_Forester,65.53,$Meet_10,0), "100 Butterfly" => new BestTime($Kimberly_Forester,68.27,$Meet_10,0), "200 IM" => new BestTime($Kimberly_Forester,147.66,$Meet_09,0),)); $Kimberly_Forester_Career = array($Kimberly_Forester_Freshman_Season);/*Catherine Fong*/$Catherine_Fong_Freshman_Season = new Season (array("100 Backstroke" => new BestTime($Catherine_Fong,68.47,$Meet_11,0), "100 Butterfly" => new BestTime($Catherine_Fong,67.25,$Meet_11,0), "200 Butterfly" => new BestTime($Catherine_Fong,160.14,$Meet_13,0),)); $Catherine_Fong_Career = array($Catherine_Fong_Freshman_Season);/*Katherine Alexander*/$Katherine_Alexander_Freshman_Season = new Season (array("1650 Freestyle" => new BestTime($Katherine_Alexander,1278.20,$Meet_08,0))); $Katherine_Alexander_Career = array($Katherine_Alexander_Freshman_Season);/*Sarah Tannenbaum*/$Sarah_Tannenbaum_Freshman_Season = new Season (array("1650 Freestyle" => new BestTime($Sarah_Tannenbaum,1263.98,$Meet_08,0), "200 Butterfly" => new BestTime($Sarah_Tannenbaum,149.52,$Meet_08,0))); $Sarah_Tannenbaum_Career = array($Sarah_Tannenbaum_Freshman_Season);/*Olivia Mabrey*/$Olivia_Mabrey_Freshman_Season = new Season (array("50 Backstroke" => new BestTime($Olivia_Mabrey,31.88,$Meet_14,0), "50 Butterfly" => new BestTime($Olivia_Mabrey,28.82,$Meet_12,0), "100 Butterfly" => new BestTime($Olivia_Mabrey,64.46,$Meet_14,0))); $Olivia_Mabrey_Career = array($Olivia_Mabrey_Freshman_Season);/*Jaqueline Skinner*/$Jaqueline_Skinner_Senior_Season = new Season (array("1000 Freestyle" => new BestTime($Jaqueline_Skinner,734.43,$Meet_11,0), "1650 Freestyle" => new BestTime($Jaqueline_Skinner,1273.52,$Meet_10,0)));$Jaqueline_Skinner_Career = array($Jaqueline_Skinner_Senior_Season);/*Erika Nothnagel*/$Erika_Nothnagel_Senior_Season = new Season (array("50 Freestyle" => new BestTime($Erika_Nothnagel,26.44,$Meet_14,0), "100 Freestyle" => new BestTime($Erika_Nothnagel,57.34,$Meet_14,0), "200 Freestyle" => new BestTime($Erika_Nothnagel,125.0,$Meet_13,0), "50 Breaststroke" => new BestTime($Erika_Nothnagel,34.49,$Meet_12,0), "100 Breaststroke" => new BestTime($Erika_Nothnagel,77.01,$Meet_13,0), "200 Breaststroke" => new BestTime($Erika_Nothnagel,170.17,$Meet_14,0), "50 Butterfly" => new BestTime($Erika_Nothnagel,28.31,$Meet_12,0), "100 IM" => new BestTime($Erika_Nothnagel,68.35,$Meet_12,0))); $Erika_Nothnagel_Career = array($Erika_Nothnagel_Senior_Season);/*Alison Baggen*/$Alison_Baggen_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Alison_Baggen,25.78,$Meet_10,1), "100 Freestyle" => new BestTime($Alison_Baggen,57.81,$Meet_10,1),)); $Alison_Baggen_Career = array($Alison_Baggen_Freshman_Season);/*Elizabeth Brown*/$Elizabeth_Brown_Senior_Season = new Season (array("500 Freestyle" => new BestTime($Elizabeth_Brown,348.80,$Meet_07,0), "1650 Freestyle" => new BestTime($Elizabeth_Brown,1276.74,$Meet_06,0), "50 Breaststroke" => new BestTime($Elizabeth_Brown,34.52,$Meet_07,0), "100 Breaststroke" => new BestTime($Elizabeth_Brown,75.66,$Meet_07,0), "200 Breaststroke" => new BestTime($Elizabeth_Brown,164.07,$Meet_07,0), "200 IM" => new BestTime($Elizabeth_Brown,149.64,$Meet_06,0)));$Elizabeth_Brown_Career = array($Elizabeth_Brown_Senior_Season);/*April Donahue*/$April_Donahue_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($April_Donahue,25.82,$Meet_09,1), "100 Freestyle" => new BestTime($April_Donahue,56.42,$Meet_08,1), "200 Freestyle" => new BestTime($April_Donahue,127.55,$Meet_07,1), "50 Breaststroke" => new BestTime($April_Donahue,31.94,$Meet_09,1), "100 Breaststroke" => new BestTime($April_Donahue,72.44,$Meet_08,1), "200 Breaststroke" => new BestTime($April_Donahue,155.72,$Meet_09,1), "100 IM" => new BestTime($April_Donahue,68.41,$Meet_07,1), "200 IM" => new BestTime($April_Donahue,143.48,$Meet_09,1),)); $April_Donahue_Career = array($April_Donahue_Freshman_Season);/*Ana Echavarria*/$Ana_Echavarria_Freshman_Season = new Season (array("200 Freestyle" => new BestTime($Ana_Echavarria,126.23,$Nats_14,1), "500 Freestyle" => new BestTime($Ana_Echavarria,346.38,$Nats_14,1), "1000 Freestyle" => new BestTime($Ana_Echavarria,723.59,$Nats_14,1), "1650 Freestyle" => new BestTime($Ana_Echavarria,1265.83,$Nats_13,1),)); $Ana_Echavarria_Career = array($Ana_Echavarria_Freshman_Season);/*Lauren Emery*/$Lauren_Emery_Freshman_Season = new Season (array("500 Freestyle" => new BestTime($Lauren_Emery,345.98,$Meet_06,1), "50 Backstroke" => new BestTime($Lauren_Emery,30.17,$Meet_05,1), "100 Backstroke" => new BestTime($Lauren_Emery,69.68,$Meet_05,1), "100 IM" => new BestTime($Lauren_Emery,66.94,$Meet_06,1), "200 IM" => new BestTime($Lauren_Emery,144.49,$Meet_06,1),)); $Lauren_Emery_Career = array($Lauren_Emery_Freshman_Season);/*Stephanie Giancola*/$Stephanie_Giancola_Freshman_Season = new Season (array("100 Freestyle" => new BestTime($Stephanie_Giancola,58.30,$Meet_09,1), "200 Freestyle" => new BestTime($Stephanie_Giancola,127.38,$Meet_09,1), "50 Butterfly" => new BestTime($Stephanie_Giancola,29.29,$Meet_09,1), "100 Butterfly" => new BestTime($Stephanie_Giancola,65.46,$Meet_09,1), "200 Butterfly" => new BestTime($Stephanie_Giancola,149.94,$Meet_09,1), "100 IM" => new BestTime($Stephanie_Giancola,66.57,$Meet_10,1), "200 IM" => new BestTime($Stephanie_Giancola,145.66,$Meet_08,1), "400 IM" => new BestTime($Stephanie_Giancola,315.19,$Meet_09,1),)); $Stephanie_Giancola_Career = array($Stephanie_Giancola_Freshman_Season);/*Melanie Norton*/$Melanie_Norton_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Melanie_Norton,26.47,$Meet_09,1), "100 Freestyle" => new BestTime($Melanie_Norton,57.66,$Meet_09,1), "200 Freestyle" => new BestTime($Melanie_Norton,126.71,$Meet_09,1), "500 Freestyle" => new BestTime($Melanie_Norton,347.37,$Meet_09,1), "1000 Freestyle" => new BestTime($Melanie_Norton,740.29,$Meet_11,1), "1650 Freestyle" => new BestTime($Melanie_Norton,1183.72,$Meet_09,1), "50 Butterfly" => new BestTime($Melanie_Norton,29.47,$Meet_11,1), "100 Butterfly" => new BestTime($Melanie_Norton,66.77,$Meet_08,1), "50 Breaststroke" => new BestTime($Melanie_Norton,35.00,$Meet_10,1), "100 Breaststroke" => new BestTime($Melanie_Norton,73.56,$Meet_09,1), "200 Breaststroke" => new BestTime($Melanie_Norton,158.64,$Meet_09,1), "200 IM" => new BestTime($Melanie_Norton,147.72,$Meet_11,1),)); $Melanie_Norton_Career = array($Melanie_Norton_Freshman_Season);/*Gina Reid*/$Gina_Reid_Freshman_Season = new Season (array("50 Breaststroke" => new BestTime($Gina_Reid,35.41,$Nats_14,0))); $Gina_Reid_Career = array($Gina_Reid_Freshman_Season);/*Alexandra Schroeder*/$Alexandra_Schroeder_Freshman_Season = new Season (array("200 Freestyle" => new BestTime($Alexandra_Schroeder,126.77,$Meet_12,1), "500 Freestyle" => new BestTime($Alexandra_Schroeder,341.72,$Meet_12,1), "1000 Freestyle" => new BestTime($Alexandra_Schroeder,726.99,$Meet_11,1), "200 Backstroke" => new BestTime($Alexandra_Schroeder,148.07,$Meet_11,1),)); $Alexandra_Schroeder_Career = array($Alexandra_Schroeder_Freshman_Season);/*Shannon Song*/$Shannon_Song_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Shannon_Song,29.84,$S_RVB_15,8), "50 Breaststroke" => new BestTime($Shannon_Song,32.19,$S_RVB_15,2), "200 Breaststroke" => new BestTime($Shannon_Song,178.00,$S_RVB_15,2), "4x50 Medley Relay" => new BestRelayTime($Shannon_Song,34.23,$S_RVB_15,2,2)));$Shannon_Song_Career = array($Shannon_Song_Freshman_Season);/*Emma Boutcher*/$Emma_Boutcher_Freshman_Season = new Season (array("50 Butterfly" => new BestTime($Emma_Boutcher,29.29,$F_RVB_14,8), "50 Breaststroke" => new BestTime($Emma_Boutcher,33.60,$F_RVB_14,2), "100 Breaststroke" => new BestTime($Emma_Boutcher,73.25,$F_RVB_14,2), "100 IM" => new BestTime($Emma_Boutcher,65.90,$F_RVB_14,2)));$Emma_Boutcher_Career = array($Emma_Boutcher_Freshman_Season);/*Katy Budra*/$Katy_Budra_Freshman_Season = new Season (array("50 Breaststroke" => new BestTime($Katy_Budra,36.46,$F_RVB_14,8)));$Katy_Budra_Career = array($Katy_Budra_Freshman_Season);/*Brittany Bohannon*/$Brittany_Bohannon_Freshman_Season = new Season (array("400 IM" => new BestTime($Brittany_Bohannon,344.44,$Meet_08,8)));$Brittany_Bohannon_Career = array($Brittany_Bohannon_Freshman_Season);/*Alyssa Mokay*/$Alyssa_Mokay_Freshman_Season = new Season (array("400 IM" => new BestTime($Alyssa_Mokay,359.89,$Meet_08,8)));$Alyssa_Mokay_Career = array($Alyssa_Mokay_Freshman_Season);/*Nina Fattore*/$Nina_Fattore_Senior_Season = new Season (array("500 Freestyle" => new BestTime($Nina_Fattore,356.12,$Meet_08,0), "1650 Freestyle" => new BestTime($Nina_Fattore,1231.72,$Meet_08,0), "200 Butterfly" => new BestTime($Nina_Fattore,160.78,$Meet_07,0), "400 IM" => new BestTime($Nina_Fattore,357.93,$Meet_09,0)));$Nina_Fattore_Career = array($Nina_Fattore_Senior_Season);/*Danielle Parise*/$Danielle_Parise_Senior_Season = new Season (array("500 Freestyle" => new BestTime($Danielle_Parise,351.09,$Meet_10,0), "200 Breaststroke" => new BestTime($Danielle_Parise,179.89,$Meet_09,0)));$Danielle_Parise_Career = array($Danielle_Parise_Senior_Season);/*Audrey Miller*/$Audrey_Miller_Senior_Season = new Season (array("500 Freestyle" => new BestTime($Audrey_Miller,352.55,$Meet_14,0)));$Audrey_Miller_Career = array($Audrey_Miller_Senior_Season);/*Anna Smith*/$Anna_Smith_Senior_Season = new Season (array("100 Butterfly" => new BestTime($Anna_Smith,68.45,$Meet_11,0)));$Anna_Smith_Career = array($Anna_Smith_Senior_Season);/*Mark Bacigalupo*/$Mark_Bacigalupo_Freshman_Season = new Season (array("200 Backstroke" => new BestTime($Mark_Bacigalupo,133.05,$Meet_09,0),));$Mark_Bacigalupo_Career = array($Mark_Bacigalupo_Freshman_Season);/*Gad Baron*/$Gad_Baron_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Gad_Baron,23.95,$Princeton_10,11), "100 Freestyle" => new BestTime($Gad_Baron,51.65,$Princeton_10,6), "200 Freestyle" => new BestTime($Gad_Baron,114.15,$Nats_11,38), "50 Breaststroke" => new BestTime($Gad_Baron,38.25,$UVM_11,4), "50 Butterfly" => new BestTime($Gad_Baron,26.38,$Harvard_10,1), "100 Butterfly" => new BestTime($Gad_Baron,59.15,$Harvard_10,1), "200 Butterfly" => new BestTime($Gad_Baron,132.48,$Nats_11,19), "4x50 Freestyle Relay" => new BestRelayTime($Gad_Baron,23.25,$NCCS_10,1,4), "4x50 Medley Relay" => new BestRelayTime($Gad_Baron,23.02,$NCCS_10,2,4), "4x100 Medley Relay" => new BestRelayTime($Gad_Baron,53.11,$Nats_11,19,4,2000)));$Gad_Baron_Sophomore_Season = new Season (array("50 Freestyle" => new BestTime($Gad_Baron,23.80,$NCCS_11,3), "100 Freestyle" => new BestTime($Gad_Baron,50.74,$Nats_12,55), "200 Freestyle" => new BestTime($Gad_Baron,112.97,$Nats_12,28), "50 Butterfly" => new BestTime($Gad_Baron,26.65,$Nats_12,101), "100 Butterfly" => new BestTime($Gad_Baron,59.14,$F_RVB_12,2), "200 Butterfly" => new BestTime($Gad_Baron,128.90,$Nats_12,15), "4x50 Freestyle Relay" => new BestRelayTime($Gad_Baron,24.12,$NCCS_11,1,4), "4x100 Freestyle Relay" => new BestRelayTime($Gad_Baron,50.17,$Nats_12,11,4), "4x100 Medley Relay" => new BestRelayTime($Gad_Baron,57.19,$Nats_12,9,3,2000)));$Gad_Baron_Middler_Season = new Season (array("50 Freestyle" => new BestTime($Gad_Baron,23.28,$Nats_13,55), "100 Freestyle" => new BestTime($Gad_Baron,50.32,$Nats_13,32), "200 Freestyle" => new BestTime($Gad_Baron,111.11,$Nats_13,18), "50 Butterfly" => new BestTime($Gad_Baron,27.15,$Rutgers_13,6), "100 Butterfly" => new BestTime($Gad_Baron,57.21,$Nats_13,46), "200 Butterfly" => new BestTime($Gad_Baron,126.16,$Nats_13,14), "100 IM" => new BestTime($Gad_Baron,65.13,$UVM_12,4), "4x50 Freestyle Relay" => new BestRelayTime($Gad_Baron,22.93,$Nats_13,10,4), "4x100 Freestyle Relay" => new BestRelayTime($Gad_Baron,49.54,$Nats_13,5,4), "4x50 Medley Relay" => new BestRelayTime($Gad_Baron,25.81,$Nats_13,13,3), "4x100 Medley Relay" => new BestRelayTime($Gad_Baron,56.91,$Nats_13,9,3,2000)));$Gad_Baron_Junior_Season = new Season (array("50 Freestyle" => new BestTime($Gad_Baron,22.64,$Nats_14,51), "100 Freestyle" => new BestTime($Gad_Baron,49.14,$Nats_14,30), "200 Freestyle" => new BestTime($Gad_Baron,108.95,$Nats_14,19), "50 Backstroke" => new BestTime($Gad_Baron,28.78,$Uconn_13,6), "100 Backstroke" => new BestTime($Gad_Baron,62.06,$Uconn_13,3), "200 Backstroke" => new BestTime($Gad_Baron,133.98,$Uconn_13,2), "100 Butterfly" => new BestTime($Gad_Baron,56.74,$Nats_14,46), "200 Butterfly" => new BestTime($Gad_Baron,126.55,$Nats_14,15), "4x50 Freestyle Relay" => new BestRelayTime($Gad_Baron,22.26,$Nats_14,8,4,88.49), "4x100 Freestyle Relay" => new BestRelayTime($Gad_Baron,48.36,$Nats_14,7,4), "4x200 Freestyle Relay" => new BestRelayTime($Gad_Baron,108.80,$Nats_14,6,4,442.96), "4x50 Medley Relay" => new BestRelayTime($Gad_Baron,25.09,$Princeton_13,1,3), "4x100 Medley Relay" => new BestRelayTime($Gad_Baron,48.14,$Nats_14,4,4,213.43)));$Gad_Baron_Senior_Season = new Season (array()); $Gad_Baron_Career = array($Gad_Baron_Senior_Season,$Gad_Baron_Junior_Season, $Gad_Baron_Middler_Season,$Gad_Baron_Sophomore_Season, $Gad_Baron_Freshman_Season);/*Gregory Breitler*/$Gregory_Breitler_Freshman_Season = new Season (array("50 Breaststroke" => new BestTime($Gregory_Breitler,28.63,$Meet_14,0),"100 Breaststroke" => new BestTime($Gregory_Breitler,63.69,$Meet_13,0),"200 Breaststroke" => new BestTime($Gregory_Breitler,142.45,$Meet_14,0),"4x50 Medley Relay" => new BestRelayTime($Gregory_Breitler,28.07,$Nats_14,10,2,99.44)));$Gregory_Breitler_Sophomore_Season = new Season (array());$Gregory_Breitler_Middler_Season = new Season (array());$Gregory_Breitler_Junior_Season = new Season (array());$Gregory_Breitler_Senior_Season = new Season (array()); $Gregory_Breitler_Career = array($Gregory_Breitler_Senior_Season,$Gregory_Breitler_Junior_Season, $Gregory_Breitler_Middler_Season,$Gregory_Breitler_Sophomore_Season, $Gregory_Breitler_Freshman_Season); /*Renato Calatroni*/$Renato_Calatroni_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Renato_Calatroni,22.68,$Nats_15,58), "100 Freestyle" => new BestTime($Renato_Calatroni,50.18,$Nats_15,0), "50 Butterfly" => new BestTime($Renato_Calatroni,24.61,$Nats_15,34), "100 Butterfly" => new BestTime($Renato_Calatroni,54.48,$Nats_15,19), "200 Butterfly" => new BestTime($Renato_Calatroni,145.37,$S_RVB_15,2), "50 Backstroke" => new BestTime($Renato_Calatroni,26.55,$Nats_15,36), "4x50 Freestyle Relay" => new BestRelayTime($Renato_Calatroni,23.57,$NCCS_14,2,4), "4x100 Freestyle Relay" => new BestRelayTime($Renato_Calatroni,50.18,$Nats_15,0,1), "4x50 Medley Relay" => new BestRelayTime($Renato_Calatroni,24.67,$Harvard_14,2,3), "4x100 Medley Relay" => new BestRelayTime($Renato_Calatroni,59.43,$S_RVB_15,1,3)));$Renato_Calatroni_Sophomore_Season = new Season(array(),true);$Renato_Calatroni_Career = array($Renato_Calatroni_Sophomore_Season,$Renato_Calatroni_Freshman_Season); /*Robert Danemiller*/$Robert_Danemiller_Freshman_Season = new Season (array("1650 Freestyle" => new BestTime($Robert_Danemiller,1186.51,$Meet_10,0), "200 Butterfly" => new BestTime($Robert_Danemiller,140.91,$Meet_10,0), "400 IM" => new BestTime($Robert_Danemiller,301.45,$Meet_10,0) ));$Robert_Danemiller_Career = array($Robert_Danemiller_Freshman_Season);/*Verron Darville*/$Verron_Darville_Freshman_Season = new Season (array("200 Breaststroke" => new BestTime($Verron_Darville,150.58,$Meet_09,0) ));$Verron_Darville_Career = array($Verron_Darville_Freshman_Season);/*David Ellis*/$David_Ellis_Freshman_Season = new Season (array("100 Backstroke" => new BestTime($David_Ellis,58.91,$Meet_11,0),));$David_Ellis_Career = array($David_Ellis_Freshman_Season);/*Jonathan Ingraham*/$Jonathan_Ingraham_Freshman_Season = new Season (array("200 Backstroke" => new BestTime($Jonathan_Ingraham,137.85,$Meet_13,0),));$Jonathan_Ingraham_Career = array($Jonathan_Ingraham_Freshman_Season);/*Kristian Kemppainen*/$Kristian_Kemppainen_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Kristian_Kemppainen,22.72,$Meet_12,0), "50 Backstroke" => new BestTime($Kristian_Kemppainen,26.43,$Meet_13,0), "100 Backstroke" => new BestTime($Kristian_Kemppainen,57.62,$Meet_13,0), "200 Backstroke" => new BestTime($Kristian_Kemppainen,125.10,$Meet_13,0), "100 IM" => new BestTime($Kristian_Kemppainen,57.73,$Meet_13,0)));$Kristian_Kemppainen_Career = array($Kristian_Kemppainen_Freshman_Season);/*Kevin Lua*/$Kevin_Lua_Middler_Season = new Season (array("50 Freestyle" => new BestTime($Kevin_Lua,22.20,$Nats_12,27), "100 Freestyle" => new BestTime($Kevin_Lua,48.41,$Nats_12,21), "50 Breaststroke" => new BestTime($Kevin_Lua,28.22,$Nats_12,11), "100 Breaststroke" => new BestTime($Kevin_Lua,62.82,$Nats_12,15), "100 IM" => new BestTime($Kevin_Lua,60.13,$Princeton_11,2), "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Lua,22.42,$Nats_12,15,4), "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Lua,48.43,$Nats_12,11,3), "4x50 Medley Relay" => new BestRelayTime($Kevin_Lua,22.44,$Nats_12,11,4), "4x100 Medley Relay" => new BestRelayTime($Kevin_Lua,61.67,$Nats_12,9,2),));$Kevin_Lua_Junior_Season = new Season (array("50 Freestyle" => new BestTime($Kevin_Lua,21.80,$Nats_13,8), "100 Freestyle" => new BestTime($Kevin_Lua,48.20,$Nats_13,9), "200 Freestyle" => new BestTime($Kevin_Lua,111.50,$Amherst_12,2), "50 Backstroke" => new BestTime($Kevin_Lua,29.96,$F_RVB_12,3), "50 Breaststroke" => new BestTime($Kevin_Lua,28.01,$Nats_13,9), "100 Breaststroke" => new BestTime($Kevin_Lua,60.31,$Princeton_12,2), "100 IM" => new BestTime($Kevin_Lua,55.67,$Princeton_12,1), "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Lua,21.82,$Nats_13,10,3), "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Lua,47.70,$Nats_13,5,3), "4x50 Medley Relay" => new BestRelayTime($Kevin_Lua,27.77,$Nats_13,13,2), "4x100 Medley Relay" => new BestRelayTime($Kevin_Lua,60.30,$Nats_13,9,2)));$Kevin_Lua_Senior_Season = new Season (array("50 Freestyle" => new BestTime($Kevin_Lua,21.35,$Nats_14,5), "100 Freestyle" => new BestTime($Kevin_Lua,47.89,$Nats_14,9), "50 Breaststroke" => new BestTime($Kevin_Lua,27.45,$Nats_14,6), "100 Breaststroke" => new BestTime($Kevin_Lua,59.78,$Nats_14,5), "200 Breaststroke" => new BestTime($Kevin_Lua,132.75,$Nats_14,6), "100 Butterfly" => new BestTime($Kevin_Lua,58.11,$F_RVB_13,1), "100 IM" => new BestTime($Kevin_Lua,57.85,$NCCS_13,2), "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Lua,21.41,$Nats_14,8,3,88.49), "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Lua,47.30,$Nats_14,7,3), "4x50 Medley Relay" => array(new BestRelayTime($Kevin_Lua,28.18,$Princeton_13,1,2), new BestRelayTime($Kevin_Lua,21.21,$Nats_14,10,4,99.44)), "4x100 Medley Relay" => new BestRelayTime($Kevin_Lua,58.63,$Nats_14,4,2,213.43),)); $Kevin_Lua_Career = array($Kevin_Lua_Senior_Season,$Kevin_Lua_Junior_Season, $Kevin_Lua_Middler_Season);/*Nicholas Matook*/$Nicholas_Matook_Freshman_Season = new Season (array("500 Freestyle" => new BestTime($Nicholas_Matook,308.69,$Meet_10,0), "1000 Freestyle" => new BestTime($Nicholas_Matook,643.43,$Meet_11,0), "1650 Freestyle" => new BestTime($Nicholas_Matook,1110.60,$Meet_10,0), "200 Backstroke" => new BestTime($Nicholas_Matook,131.78,$Meet_09,0) ));$Nicholas_Matook_Career = array($Nicholas_Matook_Freshman_Season);/*Daniel Ricardelli*/$Daniel_Ricardelli_Freshman_Season = new Season (array("200 Breaststroke" => new BestTime($Daniel_Ricardelli,151.95,$Meet_11,0),"400 IM" => new BestTime($Daniel_Ricardelli,298.78,$Meet_10,0) ));$Daniel_Ricardelli_Career = array($Daniel_Ricardelli_Freshman_Season);/*Joseph Rogan*/$Joseph_Rogan_Senior_Season = new Season (array("50 Freestyle" => new BestTime($Joseph_Rogan,22.00,$Meet_10,0), "50 Butterfly" => new BestTime($Joseph_Rogan,24.06,$Meet_10,0), "100 Butterfly" => new BestTime($Joseph_Rogan,53.56,$Meet_09,0), "200 Butterfly" => new BestTime($Joseph_Rogan,132.50,$Meet_09,0), "100 IM" => new BestTime($Joseph_Rogan,55.12,$Meet_10,0), "200 IM" => new BestTime($Joseph_Rogan,128.32,$Meet_09,0)));$Joseph_Rogan_Career = array($Joseph_Rogan_Senior_Season);/*Trevor Ryan*/$Trevor_Ryan_Freshman_Season = new Season (array("50 Freestyle" => new BestTime($Trevor_Ryan,24.28,$UVM_11,3), "50 Backstroke" => new BestTime($Trevor_Ryan,27.75,$Harvard_10,1), "100 Backstroke" => new BestTime($Trevor_Ryan,57.84,$Nats_11,20), "50 Butterfly" => new BestTime($Trevor_Ryan,25.53,$Nats_11,42), "100 Butterfly" => new BestTime($Trevor_Ryan,54.98,$Meet_10,0), "100 IM" => new BestTime($Trevor_Ryan,59.31,$Harvard_10,1), "200 IM" => new BestTime($Trevor_Ryan,130.4,$Nats_11,23)));$Trevor_Ryan_Sophomore_Season = new Season (array("200 Freestyle" => new BestTime($Trevor_Ryan,116.15,$F_RVB_11,1), "50 Backstroke" => new BestTime($Trevor_Ryan,25.34,$Nats_12,7), "100 Backstroke" => new BestTime($Trevor_Ryan,53.96,$Nats_12,8), "50 Breaststroke" => new BestTime($Trevor_Ryan,31.19,$NCCS_11,4), "50 Butterfly" => new BestTime($Trevor_Ryan,24.40,$Nats_12,25), "100 Butterfly" => new BestTime($Trevor_Ryan,55.15,$Princeton_11,3), "100 IM" => new BestTime($Trevor_Ryan,55.97,$Nats_12,14), "200 IM" => new BestTime($Trevor_Ryan,126.12,$Princeton_11,1)));$Trevor_Ryan_Middler_Season = new Season (array("50 Freestyle" => new BestTime($Trevor_Ryan,22.91,$Amherst_12,1), "50 Backstroke" => new BestTime($Trevor_Ryan,25.62,$Amherst_12,1), "100 Backstroke" => new BestTime($Trevor_Ryan,55.62,$Amherst_12,2), "50 Butterfly" => new BestTime($Trevor_Ryan,24.72,$Amherst_12,1)));$Trevor_Ryan_Junior_Season = new Season (array("50 Backstroke" => new BestTime($Trevor_Ryan,26.02,$NCCS_13,1), "50 Butterfly" => new BestTime($Trevor_Ryan,25.45,$NCCS_13,2), "100 IM" => new BestTime($Trevor_Ryan,58.63,$NCCS_13,3), "4x50 Medley Relay" => new BestRelayTime($Trevor_Ryan,26.03,$NCCS_13,2,1)));$Trevor_Ryan_Senior_Season = new Season (array()); $Trevor_Ryan_Career = array($Trevor_Ryan_Senior_Season,$Trevor_Ryan_Junior_Season, $Trevor_Ryan_Middler_Season,$Trevor_Ryan_Sophomore_Season, $Trevor_Ryan_Freshman_Season);/*Parker Traugot*/$Parker_Traugot_Senior_Season = new Season (array("50 Backstroke" => new BestTime($Parker_Traugot,26.69,$Meet_13,0), "100 Backstroke" => new BestTime($Parker_Traugot,57.26,$Meet_13,0), "200 Backstroke" => new BestTime($Parker_Traugot,125.59,$Meet_13,0), "200 IM" => new BestTime($Parker_Traugot,126.31,$Meet_13,0)));$Parker_Traugot_Career = array($Parker_Traugot_Senior_Season); /*Jerry Yu*/$Jerry_Yu_Freshman_Season = new Season (array("50 Butterfly" => new BestTime($Jerry_Yu,25.11,$Meet_12,0) ));$Jerry_Yu_Career = array($Jerry_Yu_Freshman_Season);/*Jason Wu*/$Jason_Wu_Freshman_Season = new Season (array("100 IM" => new BestTime($Jason_Wu,57.13,$Meet_11,0) ));$Jason_Wu_Career = array($Jason_Wu_Freshman_Season);


//    MEN    ////////////////////////////////////////////////////////////////////////////////////////////////////////////


/*Joey Abbott-Schiff*/
/*
$Joey_Abbott_Schiff_Freshman_Season = new Season (
array("100 Freestyle" => new BestTime($Joey_Abbott_Schiff,52.00,$F_RVB_14,3),
     "50 Breaststroke" => new BestTime($Joey_Abbott_Schiff,30.24,$PSU_15,8),
     "100 Breaststroke" => new BestTime($Joey_Abbott_Schiff,64.13,$Nats_15,45),
     "200 Breaststroke" => new BestTime($Joey_Abbott_Schiff,152.26,$S_RVB_15,2),
     "50 Butterfly" => new BestTime($Joey_Abbott_Schiff,24.88,$Nats_15,51),
     "100 Butterfly" => new BestTime($Joey_Abbott_Schiff,53.76,$Nats_15,15),
     "100 IM" => new BestTime($Joey_Abbott_Schiff,57.58,$Nats_15,41),
     "4x100 Freestyle Relay" => new BestRelayTime($Joey_Abbott_Schiff,48.59,$Nats_15,8,3,195.39),
     "4x200 Freestyle Relay" => new BestRelayTime($Joey_Abbott_Schiff,117.65,$S_RVB_15,1,4),
     "4x50 Medley Relay" => new BestRelayTime($Joey_Abbott_Schiff,28.42,$Nats_15,0,2),
     "4x100 Medley Relay" => new BestRelayTime($Joey_Abbott_Schiff,63.06,$Nats_15,55,2)
));
$Joey_Abbott_Schiff_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Joey_Abbott_Schiff,23.06,$Villanova_15,4),
	  "100 Freestyle" => new BestTime($Joey_Abbott_Schiff,51.90,$NCCS_15,3),
	  "100 Breaststroke" => new BestTime($Joey_Abbott_Schiff,68.78,$F_RVB_15,2),
	  "50 Butterfly" => new BestTime($Joey_Abbott_Schiff,25.23,$Villanova_15,2),
      "100 IM" => new BestTime($Joey_Abbott_Schiff,59.27,$F_RVB_15,3),
      "200 IM" => new BestTime($Joey_Abbott_Schiff,137.27,$F_RVB_15,2),
      "4x50 Freestyle Relay" => new BestRelayTime($Joey_Abbott_Schiff,22.20,$NCCS_15,1,4),
	  "4x100 Freestyle Relay" => new BestRelayTime($Joey_Abbott_Schiff,51.39,$F_RVB_15,1,4),
	  "4x50 Medley Relay" => array(new BestRelayTime($Joey_Abbott_Schiff,24.58,$F_RVB_15,2,3),
                                      new BestRelayTime($Joey_Abbott_Schiff,22.03,$Villanova_15,2,4))
));
$Joey_Abbott_Schiff_Middler_Season = new Season (array());
$Joey_Abbott_Schiff_Junior_Season = new Season (array());
$Joey_Abbott_Schiff_Senior_Season = new Season (array());
$Joey_Abbott_Schiff_Career = array($Joey_Abbott_Schiff_Senior_Season,$Joey_Abbott_Schiff_Junior_Season,
                      $Joey_Abbott_Schiff_Middler_Season,$Joey_Abbott_Schiff_Sophomore_Season, $Joey_Abbott_Schiff_Freshman_Season);

/*Connor Barnes*/

$Connor_Barnes_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Connor_Barnes,23.88,$Lowell_15,4),
     "100 Freestyle" => new BestTime($Connor_Barnes,51.34,$NCCS_14,3),
     "50 Backstroke" => new BestTime($Connor_Barnes,26.97,$Amherst_14,2),
     "100 Backstroke" => new BestTime($Connor_Barnes,58.98,$NCCS_14,3),
     "50 Butterfly" => new BestTime($Connor_Barnes,24.86,$Nats_15,49),
     "100 Butterfly" => new BestTime($Connor_Barnes,58.79,$Nats_15,84),
	 "200 Butterfly" => new BestTime($Connor_Barnes,149.76,$S_RVB_15,3),
     "4x50 Freestyle Relay" => new BestRelayTime($Connor_Barnes,24.31,$Harvard_14,6,2),
     "4x50 Medley Relay" => array(new BestRelayTime($Connor_Barnes,27.26,$PSU_15,13,1),
                                    new BestRelayTime($Connor_Barnes,25.42,$NCCS_14,3,3)),
     "4x100 Medley Relay" => new BestRelayTime($Connor_Barnes,59.01,$Nats_15,46,1)
));
$Connor_Barnes_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Connor_Barnes,23.90,$Villanova_15,8),
	  "100 Freestyle" => new BestTime($Connor_Barnes,53.67,$Villanova_15,10),
	  "50 Butterfly" => new BestTime($Connor_Barnes,26.03,$Villanova_15,4),
    "50 Backstroke" => new BestTime($Connor_Barnes,29.88,$RWB_16,3),
	  "4x50 Freestyle Relay" => array(new BestRelayTime($Connor_Barnes,24.15,$Villanova_15,4,4),
                                new BestRelayTime($Connor_Barnes,25.29,$Villanova_15,2,1)),
    "4x50 Medley Relay" => new BestRelayTime($Connor_Barnes,25.70,$RWB_16,3,4)
));
$Connor_Barnes_Middler_Season = new Season (array());
$Connor_Barnes_Junior_Season = new Season (array());
$Connor_Barnes_Senior_Season = new Season (array());

$Connor_Barnes_Career = array($Connor_Barnes_Senior_Season,$Connor_Barnes_Junior_Season,
                       $Connor_Barnes_Middler_Season,$Connor_Barnes_Sophomore_Season, $Connor_Barnes_Freshman_Season);


/*Chris Bartlett*/

$Chris_Bartlett_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Chris_Bartlett,24.01,$Rutgers_13,7),
     "100 Freestyle" => new BestTime($Chris_Bartlett,52.17,$Rutgers_13,4),
     "200 Freestyle" => new BestTime($Chris_Bartlett,115.97,$Swim_Bunny_13,4),
     "500 Freestyle" => new BestTime($Chris_Bartlett,321.08,$Nats_13,22),
     "1000 Freestyle" => new BestTime($Chris_Bartlett,693,$S_RVB_13,1),
     "100 Butterfly" => new BestTime($Chris_Bartlett,60.48,$Nats_13,74),
     "4x50 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,23.57,$Rutgers_13,1,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,52.17,$Rutgers_13,4,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,121.11,$Nats_13,16,4),
     "4x50 Medley Relay" => new BestRelayTime($Chris_Bartlett,26.4,$Nats_13,50,3),
     "4x100 Medley Relay" => new BestRelayTime($Chris_Bartlett,60.1,$Nats_13,39,3),

));

$Chris_Bartlett_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Chris_Bartlett,23.58,$Nats_14,126),
     "100 Freestyle" => new BestTime($Chris_Bartlett,50.23,$Nats_14,54),
     "200 Freestyle" => new BestTime($Chris_Bartlett,112.15,$Nats_14,34),
     "500 Freestyle" => new BestTime($Chris_Bartlett,314.61,$Nats_14,29),
     "1000 Freestyle" => new BestTime($Chris_Bartlett,693.77,$NCCS_13,4),
     "100 Butterfly" => new BestTime($Chris_Bartlett,57.47,$Nats_14,61),
     "100 IM" => new BestTime($Chris_Bartlett,62.92,$URI_14,5),
     "400 IM" => new BestTime($Chris_Bartlett,303.47,$NCCS_13,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,23.61,$URI_14,3,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,52.56,$Uconn_13,1,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,111.89,$Nats_14,6,2,442.96),
     "4x50 Medley Relay" => new BestRelayTime($Chris_Bartlett,24.07,$Princeton_13,5,4)

));

$Chris_Bartlett_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Chris_Bartlett,24.13,$Nats_15,194),
     "100 Freestyle" => new BestTime($Chris_Bartlett,51.49,$Nats_15,92),
     "200 Freestyle" => new BestTime($Chris_Bartlett,114.44,$Nats_15,57),
     "500 Freestyle" => new BestTime($Chris_Bartlett,311.63,$Nats_15,36),
     "1000 Freestyle" => new BestTime($Chris_Bartlett,693.77,$S_RVB_15,1),
     "50 Butterfly" => new BestTime($Chris_Bartlett,28.86,$S_RVB_15,7),
     "100 Butterfly" => new BestTime($Chris_Bartlett,59.87,$Nats_15,99),
     "200 Backstroke" => new BestTime($Chris_Bartlett,149.59,$S_RVB_15,5),
     "4x50 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,26.18,$S_RVB_15,2,1),
     "4x50 Medley Relay" => new BestRelayTime($Chris_Bartlett,24.26,$S_RVB_15,1,4),
     "4x100 Medley Relay" => new BestRelayTime($Chris_Bartlett,56.52,$S_RVB_15,2,4)

));

$Chris_Bartlett_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Chris_Bartlett,25.20,$Harvard_15,21),
    "100 Freestyle" => new BestTime($Chris_Bartlett,54.96,$Harvard_15,16),
	  "200 Freestyle" => new BestTime($Chris_Bartlett,126.98,$Villanova_15,9),
    "500 Freestyle" => new BestTime($Chris_Bartlett,348.98,$Harvard_15,6),
    "1000 Freestyle" => new BestTime($Chris_Bartlett,706.57,$RWB_16,1),
    "50 Butterfly" => new BestTime($Chris_Bartlett,28.31,$RWB_16,8),
    "100 Butterfly" => new BestTime($Chris_Bartlett,66.87,$F_RVB_15,5),
	  "100 IM" => new BestTime($Chris_Bartlett,66.81,$Villanova_15,6),
	  "4x50 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,25.27,$Villanova_15,4,2),
	  "4x100 Freestyle Relay" => new BestRelayTime($Chris_Bartlett,58.78,$F_RVB_15,1,2),
	  "4x50 Medley Relay" => new BestRelayTime($Chris_Bartlett,36.96,$Harvard_15,8,4),
    "4x100 Medley Relay" => new BestRelayTime($Chris_Bartlett,63.88,$RWB_16,3,3),
    "4x200 Medley Relay" => new BestRelayTime($Chris_Bartlett,103.64,$RWB_16,1,3)

));

$Chris_Bartlett_Senior_Season = new Season (array());


$Chris_Bartlett_Career = array($Chris_Bartlett_Senior_Season,$Chris_Bartlett_Junior_Season,
                       $Chris_Bartlett_Middler_Season,$Chris_Bartlett_Sophomore_Season, $Chris_Bartlett_Freshman_Season);


/*Tyler Birn*/

$Tyler_Birn_Freshman_Season = new Season (
array("100 IM" => new BestTime($Tyler_Birn,67.12,$F_RVB_15,8)
));

$Tyler_Birn_Sophomore_Season = new Season (array());

$Tyler_Birn_Middler_Season = new Season (array());

$Tyler_Birn_Junior_Season = new Season (array());

$Tyler_Birn_Senior_Season = new Season (array());


$Tyler_Birn_Career = array($Tyler_Birn_Senior_Season,$Tyler_Birn_Junior_Season,
                       $Tyler_Birn_Middler_Season,$Tyler_Birn_Sophomore_Season, $Tyler_Birn_Freshman_Season);

/*Hang Chen*/
$Hang_Chen_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Hang_Chen,23.37,$Lowell_15,2),
     "50 Backstroke" => new BestTime($Hang_Chen,25.66,$NCCS_14,19),
     "100 Backstroke" => new BestTime($Hang_Chen,56.80,$Nats_15,32),
     "200 Backstroke" => new BestTime($Hang_Chen,130.42,$NCCS_14,4),
     "50 Breaststroke" => new BestTime($Hang_Chen,27.91,$Lowell_15,2),
	 "100 Breaststroke" => new BestTime($Hang_Chen,63.53,$Nats_15,40),
     "100 IM" => new BestTime($Hang_Chen,59.33,$Harvard_14,9),
     "200 IM" => new BestTime($Hang_Chen,133.40,$Amherst_14,13),
     "4x50 Freestyle Relay" => new BestRelayTime($Hang_Chen,25.07,$S_RVB_15,1,4),
     "4x50 Medley Relay" => new BestRelayTime($Hang_Chen,26.36,$NCCS_14,3,2),
     "4x100 Medley Relay" => new BestRelayTime($Hang_Chen,58.28,$S_RVB_15,2,2)
));
$Hang_Chen_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Hang_Chen,24.88,$Harvard_15,18),
	  "50 Backstroke" => new BestTime($Hang_Chen,25.97,$NCCS_15,2),
	  "50 Breaststroke" => new BestTime($Hang_Chen,29.35,$Harvard_15,1),
	  "4x50 Medley Relay" => new BestRelayTime($Hang_Chen,26.36,$NCCS_15,2,1),
));
$Hang_Chen_Middler_Season = new Season (array());
$Hang_Chen_Junior_Season = new Season (array());
$Hang_Chen_Senior_Season = new Season (array());

$Hang_Chen_Career = array($Hang_Chen_Senior_Season,$Hang_Chen_Junior_Season,
                       $Hang_Chen_Middler_Season,$Hang_Chen_Sophomore_Season, $Hang_Chen_Freshman_Season);

/*WenQin Chen*/
$WenQin_Chen_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($WenQin_Chen,23.35,$RWB_16,2),
	  "100 Freestyle" => new BestTime($WenQin_Chen,51.81,$F_RVB_15,2),
	  "50 Backstroke" => new BestTime($WenQin_Chen,27.54,$NCCS_15,4),
	  "50 Breaststroke" => new BestTime($WenQin_Chen,45.70,$NCCS_15,10),
    "50 Butterfly" => new BestTime($WenQin_Chen,24.22,$RWB_16,1),
    "100 Butterfly" => new BestTime($WenQin_Chen,52.23,$Harvard_15,1),
    "200 Butterfly" => new BestTime($WenQin_Chen,121.50,$NCCS_15,1),
    "4x50 Freestyle Relay" => new BestRelayTime($WenQin_Chen,23.81,$F_RVB_15,1,4),
	  "4x50 Medley Relay" => new BestRelayTime($WenQin_Chen,23.07,$Harvard_15,2,3),
    "4x100 Medley Relay" => new BestRelayTime($WenQin_Chen,53.02,$RWB_16,3,2)
));
$WenQin_Chen_Sophomore_Season = new Season (array());
$WenQin_Chen_Middler_Season = new Season (array());
$WenQin_Chen_Junior_Season = new Season (array());
$WenQin_Chen_Senior_Season = new Season (array());

$WenQin_Chen_Career = array($WenQin_Chen_Senior_Season,$WenQin_Chen_Junior_Season,
                       $WenQin_Chen_Middler_Season,$WenQin_Chen_Sophomore_Season, $WenQin_Chen_Freshman_Season);


/*Brian_Desnoyers*/
$Brian_Desnoyers_Freshman_Season = new Season (
array("100 Freestyle" => new BestTime($Brian_Desnoyers,56.17,$Uconn_13,6),
     "500 Freestyle" => new BestTime($Brian_Desnoyers,357.51,$Harvard_13,8),
     "1000 Freestyle" => new BestTime($Brian_Desnoyers,732.99,$NCCS_13,5),
     "1650 Freestyle" => new BestTime($Brian_Desnoyers,1282.71,$NCCS_13,5),
     "50 Backstroke" => new BestTime($Brian_Desnoyers,32.62,$Uconn_13,7),
     "100 Breaststroke" => new BestTime($Brian_Desnoyers,75.96,$Nats_14,127),
     "50 Butterfly" => new BestTime($Brian_Desnoyers,29.58,$Nats_14,224),
     "100 Butterfly" => new BestTime($Brian_Desnoyers,67.2,$Nats_14,127),
     "100 IM" => new BestTime($Brian_Desnoyers,71.57,$Uconn_13,11),
     "200 IM" => new BestTime($Brian_Desnoyers,147.85,$Nats_14,87),
     "4x100 Freestyle Relay" => new BestRelayTime($Brian_Desnoyers,56.17,$Uconn_13,6,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Brian_Desnoyers,130.68,$Nats_14,32,3),
     "4x50 Medley Relay" => new BestRelayTime($Brian_Desnoyers,32.62,$Uconn_13,7,1)
));
$Brian_Desnoyers_Sophomore_Season = new Season (
array("100 Freestyle" => new BestTime($Brian_Desnoyers,62.23,$Harvard_14,38),
     "100 Breaststroke" => new BestTime($Brian_Desnoyers,78.0,$Lowell_15,6),
     "50 Butterfly" => new BestTime($Brian_Desnoyers,31.16,$Lowell_15,8),
     "100 Butterfly" => new BestTime($Brian_Desnoyers,68.75,$Lowell_15,9),
     "100 IM" => new BestTime($Brian_Desnoyers,70.51,$Harvard_14,12)
));
$Brian_Desnoyers_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Brian_Desnoyers,27.52,$RWB_16,13),
     "100 Freestyle" => new BestTime($Brian_Desnoyers,67.18,$F_RVB_15,14),
     "50 Butterfly" => new BestTime($Brian_Desnoyers,30.22,$RWB_16,11),
     "50 Breaststroke" => new BestTime($Brian_Desnoyers,35.73,$RWB_16,10),
     "100 Breaststroke" => new BestTime($Brian_Desnoyers,83.56,$F_RVB_15,9),
     "100 IM" => new BestTime($Brian_Desnoyers,73.02,$F_RVB_15,9)
));
$Brian_Desnoyers_Junior_Season = new Season (array());
$Brian_Desnoyers_Senior_Season = new Season (array());

$Brian_Desnoyers_Career = array($Brian_Desnoyers_Senior_Season,$Brian_Desnoyers_Junior_Season,
                       $Brian_Desnoyers_Middler_Season,$Brian_Desnoyers_Sophomore_Season, $Brian_Desnoyers_Freshman_Season);


/*Nate Desrochers*/

$Nate_Desrochers_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Nate_Desrochers,23.20,$Nats_12,64),
     "100 Freestyle" => new BestTime($Nate_Desrochers,53.25,$Princeton_11,5),
     "50 Backstroke" => new BestTime($Nate_Desrochers,28.66,$Nats_12,63),
     "100 Backstroke" => new BestTime($Nate_Desrochers,60.36,$Nats_12,52),
     "200 Backstroke" => new BestTime($Nate_Desrochers,133.94,$Nats_12,35),
     "100 IM" => new BestTime($Nate_Desrochers,61.08,$Nats_12,76),
     "4x50 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,24.57,$NCCS_11,1,3)

));

$Nate_Desrochers_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Nate_Desrochers,23.01,$Nats_13,46),
     "100 Freestyle" => new BestTime($Nate_Desrochers,51.35,$Nats_13,54),
     "200 Freestyle" => new BestTime($Nate_Desrochers,118.88,$Nats_13,51),
     "50 Backstroke" => new BestTime($Nate_Desrochers,27.47,$Nats_13,24),
     "100 Backstroke" => new BestTime($Nate_Desrochers,61.07,$Nats_13,39),
     "200 IM" => new BestTime($Nate_Desrochers,174.99,$S_RVB_13,7),
     "400 IM" => new BestTime($Nate_Desrochers,302.22,$Nats_13,22),
     "4x50 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,22.08,$Nats_13,54,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,52.70,$Nats_13,41,4),
     "4x50 Medley Relay" => array(new BestRelayTime($Nate_Desrochers,30.43,$S_RVB_13,2,1),
                                    new BestRelayTime($Nate_Desrochers,21.90,$Nats_13,50,4)),
     "4x100 Medley Relay" => new BestRelayTime($Nate_Desrochers,61.07,$Nats_13,39,1)

));

$Nate_Desrochers_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Nate_Desrochers,22.72,$Nats_14,56),
     "100 Freestyle" => new BestTime($Nate_Desrochers,49.98,$Nats_14,45),
     "200 Freestyle" => new BestTime($Nate_Desrochers,114.36,$Nats_14,47),
     "50 Backstroke" => new BestTime($Nate_Desrochers,27.26,$Nats_14,35),
     "100 Backstroke" => new BestTime($Nate_Desrochers,62.58,$NCCS_13,3),
     "200 Backstroke" => new BestTime($Nate_Desrochers,141.87,$NCCS_13,6),
     "50 Butterfly" => new BestTime($Nate_Desrochers,29.15,$F_RVB_13,6),
     "100 IM" => new BestTime($Nate_Desrochers,63.47,$Rutgers_14,16),
     "400 IM" => new BestTime($Nate_Desrochers,296.43,$Nats_14,23),
     "4x50 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,22.22,$Nats_14,8,2,88.49),
     "4x50 Medley Relay" => array(new BestRelayTime($Nate_Desrochers,29.34,$URI_14,2,1),
                                    new BestRelayTime($Nate_Desrochers,22.02,$Nats_14,57,4)),
     "4x100 Medley Relay" => new BestRelayTime($Nate_Desrochers,62.58,$NCCS_13,3,1)

));

$Nate_Desrochers_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Nate_Desrochers,23.35,$Nats_15,113),
     "100 Freestyle" => new BestTime($Nate_Desrochers,50.34,$Nats_15,49),
     "200 Freestyle" => new BestTime($Nate_Desrochers,122.51,$Nats_15,95),
     "50 Backstroke" => new BestTime($Nate_Desrochers,27.94,$Nats_15,72),
     "50 Breaststroke" => new BestTime($Nate_Desrochers,35.80,$S_RVB_15,10),
     "100 IM" => new BestTime($Nate_Desrochers,60.50,$Nats_15,89),
     "200 IM" => new BestTime($Nate_Desrochers,145.68,$NCCS_14,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,24.50,$S_RVB_15,1,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,53.26,$NCCS_14,1,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,122.67,$S_RVB_15,2,2),
     "4x50 Medley Relay" => new BestRelayTime($Nate_Desrochers,23.64,$NCCS_14,3,4)

));

$Nate_Desrochers_Senior_Season = new Season (

array("50 Butterfly" => new BestTime($Nate_Desrochers,29.77,$RWB_16,10),
    "4x50 Medley Relay" => new BestRelayTime($Nate_Desrochers,25.21,$RWB_16,1,4),
    "4x200 Freestyle Relay" => new BestRelayTime($Nate_Desrochers,138.85,$RWB_16,3,4)



));


$Nate_Desrochers_Career = array($Nate_Desrochers_Senior_Season,$Nate_Desrochers_Junior_Season,
                       $Nate_Desrochers_Middler_Season,$Nate_Desrochers_Sophomore_Season, $Nate_Desrochers_Freshman_Season);


/*Liam Doyle*/

$Liam_Doyle_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Liam_Doyle,23.27,$Nats_15,104),
     "100 Freestyle" => new BestTime($Liam_Doyle,50.85,$Nats_15,70),
     "200 Freestyle" => new BestTime($Liam_Doyle,114.21,$Nats_15,55),
     "50 Butterfly" => new BestTime($Liam_Doyle,25.38,$Nats_15,76),
     "100 Breaststroke" => new BestTime($Liam_Doyle,69.12,$Nats_15,96),
     "4x50 Freestyle Relay" => new BestRelayTime($Liam_Doyle,23.72,$Harvard_14,3,4),
     "4x50 Medley Relay" => new BestRelayTime($Liam_Doyle,28.0,$PSU_15,26,3)

));

$Liam_Doyle_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Liam_Doyle,23.48,$Villanova_15,0),
    "100 Freestyle" => new BestTime($Liam_Doyle,52.22,$Villanova_15,8),
    "50 Butterfly" => new BestTime($Liam_Doyle,25.62,$NCCS_15,3),
    "50 Backstroke" => new BestTime($Liam_Doyle,33.09,$F_RVB_15,4),
    "50 Breaststroke" => new BestTime($Liam_Doyle,32.36,$F_RVB_15,4),
	  "50 Butterfly" => new BestTime($Liam_Doyle,26.37,$Villanova_15,5),
    "100 Butterfly" => new BestTime($Liam_Doyle,57.68,$Villanova_15,2),
    "4x50 Freestyle Relay" => new BestRelayTime($Liam_Doyle,23.48,$Villanova_15,2,1),
	  "4x50 Medley Relay" => new BestRelayTime($Liam_Doyle,25.21,$Villanova_15,4,3)
));

$Liam_Doyle_Middler_Season = new Season (array());

$Liam_Doyle_Junior_Season = new Season (array());

$Liam_Doyle_Senior_Season = new Season (array());


$Liam_Doyle_Career = array($Liam_Doyle_Senior_Season,$Liam_Doyle_Junior_Season,
                       $Liam_Doyle_Middler_Season,$Liam_Doyle_Sophomore_Season, $Liam_Doyle_Freshman_Season);


/*Imran Elmaarouf*/
$Imran_Elmaarouf_Freshman_Season = new Season (
array("100 Backstroke" => new BestTime($Imran_Elmaarouf,58.61,$Harvard_15,2),
      "100 Breaststroke" => new BestTime($Imran_Elmaarouf,64.36,$Harvard_15,2),
      "100 IM" => new BestTime($Imran_Elmaarouf,58.17,$F_RVB_15,2),
      "4x50 Medley Relay" => new BestRelayTime($Imran_Elmaarouf,28.68,$F_RVB_15,2,2)
));
$Imran_Elmaarouf_Sophomore_Season = new Season (array());
$Imran_Elmaarouf_Middler_Season = new Season (array());
$Imran_Elmaarouf_Junior_Season = new Season (array());
$Imran_Elmaarouf_Senior_Season = new Season (array());

$Imran_Elmaarouf_Career = array($Imran_Elmaarouf_Senior_Season,$Imran_Elmaarouf_Junior_Season,
                       $Imran_Elmaarouf_Middler_Season,$Imran_Elmaarouf_Sophomore_Season, $Imran_Elmaarouf_Freshman_Season);


/*Ryan Fleischer*/
$Ryan_Fleischer_Freshman_Season = new Season (
array("50 Backstroke" => new BestTime($Ryan_Fleischer,31.18,$RWB_16,6),
    "100 Backstroke" => new BestTime($Ryan_Fleischer,69.47,$NCCS_15,3),
	  "50 Breaststroke" => new BestTime($Ryan_Fleischer,31.67,$F_RVB_15,3),
    "100 Breaststroke" => new BestTime($Ryan_Fleischer,74.11,$F_RVB_15,6),
    "50 Butterfly" => new BestTime($Ryan_Fleischer,29.41,$RWB_16,9),
    "4x50 Medley Relay" => new BestRelayTime($Ryan_Fleischer,31.67,$RWB_16,2,2)
));
$Ryan_Fleischer_Sophomore_Season = new Season (array());
$Ryan_Fleischer_Middler_Season = new Season (array());
$Ryan_Fleischer_Junior_Season = new Season (array());
$Ryan_Fleischer_Senior_Season = new Season (array());

$Ryan_Fleischer_Career = array($Ryan_Fleischer_Senior_Season,$Ryan_Fleischer_Junior_Season,
                       $Ryan_Fleischer_Middler_Season,$Ryan_Fleischer_Sophomore_Season, $Ryan_Fleischer_Freshman_Season);

/*Martin Fortuny*/
$Martin_Fortuny_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Martin_Fortuny,24.30,$Nats_14,197),
     "50 Backstroke" => new BestTime($Martin_Fortuny,28.53,$Nats_14,68),
     "100 Backstroke" => new BestTime($Martin_Fortuny,61.78,$Nats_14,44),
     "200 Backstroke" => new BestTime($Martin_Fortuny,140.08,$Nats_14,47),
     "100 IM" => new BestTime($Martin_Fortuny,61.91,$Nats_14,101),
     "4x100 Freestyle Relay" => new BestRelayTime($Martin_Fortuny,52.16,$Nats_14,68,4),
     "4x100 Medley Relay" => new BestRelayTime($Martin_Fortuny,61.78,$Nats_14,44,1)
));
$Martin_Fortuny_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Martin_Fortuny,24.07,$Amherst_14,4),
     "50 Backstroke" => new BestTime($Martin_Fortuny,28.60,$Harvard_14,7),
     "100 Backstroke" => new BestTime($Martin_Fortuny,63.42,$Harvard_14,10),
     "4x50 Medley Relay" => new BestRelayTime($Martin_Fortuny,28.70,$Harvard_14,7,1)
));
$Martin_Fortuny_Middler_Season = new Season (array());
$Martin_Fortuny_Junior_Season = new Season (array());
$Martin_Fortuny_Senior_Season = new Season (array());

$Martin_Fortuny_Career = array($Martin_Fortuny_Senior_Season,$Martin_Fortuny_Junior_Season,
                       $Martin_Fortuny_Middler_Season,$Martin_Fortuny_Sophomore_Season, $Martin_Fortuny_Freshman_Season);

/*Brett Galus*/

$Brett_Galus_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Brett_Galus,24.21,$Uconn_13,8),
     "100 Freestyle" => new BestTime($Brett_Galus,53.29,$Harvard_13,8),
     "200 Freestyle" => new BestTime($Brett_Galus,111.26,$Nats_14,6),
     "500 Freestyle" => new BestTime($Brett_Galus,307.66,$Nats_14,20),
     "1000 Freestyle" => new BestTime($Brett_Galus,632.94,$Nats_14,12),
     "100 Butterfly" => new BestTime($Brett_Galus,55.60,$Nats_14,38),
     "100 IM" => new BestTime($Brett_Galus,58.26,$Nats_14,37),
     "200 IM" => new BestTime($Brett_Galus,127.38,$Nats_14,29),
     "4x50 Freestyle Relay" => new BestRelayTime($Brett_Galus,24.25,$Uconn_13,4,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Brett_Galus,52.72,$NCCS_13,3,3),
     "4x200 Freestyle Relay" => new BestRelayTime($Brett_Galus,111.26,$Nats_14,6,1,442.96),
     "4x50 Medley Relay" => new BestRelayTime($Brett_Galus,25.26,$Princeton_13,4,3)

));

$Brett_Galus_Sophomore_Season = new Season (
array("200 Freestyle" => new BestTime($Brett_Galus,110.06,$Nats_15,29),
     "500 Freestyle" => new BestTime($Brett_Galus,299.42,$Nats_15,15),
     "1000 Freestyle" => new BestTime($Brett_Galus,633.49,$Nats_15,12),
     "1650 Freestyle" => new BestTime($Brett_Galus,1184.00,$S_RVB_15,5),
     "50 Backstroke" => new BestTime($Brett_Galus,29.84,$NCCS_14,6),
     "50 Butterfly" => new BestTime($Brett_Galus,26.41,$NCCS_14,5),
     "100 Butterfly" => new BestTime($Brett_Galus,55.84,$Nats_15,38),
     "100 IM" => new BestTime($Brett_Galus,59.11,$Nats_15,68),
     "4x50 Freestyle Relay" => new BestRelayTime($Brett_Galus,24.36,$Harvard_14,7,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Brett_Galus,120.25,$S_RVB_15,1,2),
     "4x50 Medley Relay" => new BestRelayTime($Brett_Galus,29.84,$NCCS_14,6,1)
));

$Brett_Galus_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Brett_Galus,25.28,$Harvard_15,8),
	  "100 Freestyle" => new BestTime($Brett_Galus,54.89,$Harvard_15,15),
	  "200 Freestyle" => new BestTime($Brett_Galus,121.83,$NCCS_15,5),
	  "50 Butterfly" => new BestTime($Brett_Galus,26.75,$NCCS_15,6),
	  "100 IM" => new BestTime($Brett_Galus,64.71,$Harvard_15,15),
	  "4x100 Freestyle Relay" => new BestRelayTime($Brett_Galus,54.91,$NCCS_15,2,3)
));
$Brett_Galus_Junior_Season = new Season (array());
$Brett_Galus_Senior_Season = new Season (array());

$Brett_Galus_Career = array($Brett_Galus_Senior_Season,$Brett_Galus_Junior_Season,
                       $Brett_Galus_Middler_Season,$Brett_Galus_Sophomore_Season, $Brett_Galus_Freshman_Season);


/*Brennan Garber*/
$Brennan_Garber_Freshman_Season = new Season (
array("50 Breaststroke" => new BestTime($Brennan_Garber,31.29,$Nats_15,0),
     "100 Breaststroke" => new BestTime($Brennan_Garber,66.66,$Nats_15,0),
     "200 Breaststroke" => new BestTime($Brennan_Garber,140.77,$Nats_15,18),
     "100 IM" => new BestTime($Brennan_Garber,62.12,$Nats_15,118),
     "200 IM" => new BestTime($Brennan_Garber,133.30,$Nats_15,56),
     "4x50 Freestyle Relay" => new BestRelayTime($Brennan_Garber,26.83,$S_RVB_15,3,3),
     "4x50 Medley Relay" => new BestRelayTime($Brennan_Garber,32.69,$NCCS_14,8,2)
));
$Brennan_Garber_Sophomore_Season = new Season (
array("50 Breaststroke" => new BestTime($Brennan_Garber,33.19,$Villanova_15,8),
    "100 Breaststroke" => new BestTime($Brennan_Garber,71.71,$Villanova_15,8),
	  "200 Breaststroke" => new BestTime($Brennan_Garber,155.96,$RWB_16,3),
    "200 IM" => new BestTime($Brennan_Garber,145.43,$Villanova_15,3),
	  "4x50 Freestyle Relay" => new BestRelayTime($Brennan_Garber,28.46,$F_RVB_15,5,4),
	  "4x50 Medley Relay" => array(new BestRelayTime($Brennan_Garber,31.68,$Villanova_15,4,2),
	                                 new BestRelayTime($Brennan_Garber,26.33,$NCCS_15,7,4)),
    "4x100 Medley Relay" => new BestRelayTime($Brennan_Garber,72.47,$RWB_16,3,2)
));
$Brennan_Garber_Middler_Season = new Season (array());
$Brennan_Garber_Junior_Season = new Season (array());
$Brennan_Garber_Senior_Season = new Season (array());

$Brennan_Garber_Career = array($Brennan_Garber_Senior_Season,$Brennan_Garber_Junior_Season,
                       $Brennan_Garber_Middler_Season,$Brennan_Garber_Sophomore_Season, $Brennan_Garber_Freshman_Season);

/*Kevin Gell*/
$Kevin_Gell_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Kevin_Gell,23.71,$Princeton_11,5),
     "100 Freestyle" => new BestTime($Kevin_Gell,51.04,$Nats_12,61),
     "200 Freestyle" => new BestTime($Kevin_Gell,112.64,$Nats_12,25),
     "500 Freestyle" => new BestTime($Kevin_Gell,311.73,$Nats_12,13),
     "100 IM" => new BestTime($Kevin_Gell,61.37,$Nats_12,82),
     "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Gell,23.73,$Nats_12,15,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Gell,51.46,$Nats_12,11,2),
     "4x100 Medley Relay" => new BestRelayTime($Kevin_Gell,51.10,$Nats_12,9,4)

));

$Kevin_Gell_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Kevin_Gell,23.49,$Nats_13,68),
     "100 Freestyle" => new BestTime($Kevin_Gell,50.86,$Nats_13,41),
     "200 Freestyle" => new BestTime($Kevin_Gell,112.58,$Nats_13,22),
     "500 Freestyle" => new BestTime($Kevin_Gell,310.95,$Nats_13,12),
     "1000 Freestyle" => new BestTime($Kevin_Gell,735.00,$S_RVB_13,2),
     "100 Breaststroke" => new BestTime($Kevin_Gell,78.89,$S_RVB_13,1),
     "50 Butterfly" => new BestTime($Kevin_Gell,30.39,$S_RVB_13,3),
     "100 Butterfly" => new BestTime($Kevin_Gell,71.22,$S_RVB_13,3),
     "100 IM" => new BestTime($Kevin_Gell,60.44,$Nats_13,55),
     "200 IM" => new BestTime($Kevin_Gell,152.45,$S_RVB_13,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Gell,22.98,$Nats_13,10,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Gell,50.31,$Nats_13,5,2),
     "4x50 Medley Relay" => new BestRelayTime($Kevin_Gell,23.04,$Nats_13,13,4),
     "4x100 Medley Relay" => new BestRelayTime($Kevin_Gell,50.21,$Nats_13,9,4)

));

$Kevin_Gell_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Kevin_Gell,23.28,$Nats_14,103),
     "100 Freestyle" => new BestTime($Kevin_Gell,51.36,$Nats_14,90),
     "200 Freestyle" => new BestTime($Kevin_Gell,114.55,$Nats_14,48),
     "500 Freestyle" => new BestTime($Kevin_Gell,310.77,$Nats_14,24),
     "1650 Freestyle" => new BestTime($Kevin_Gell,1216.96,$NCCS_13,2),
     "100 IM" => new BestTime($Kevin_Gell,60.45,$Nats_14,79),
     "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Gell,23.32,$NCCS_13,3,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Gell,54.09,$NCCS_13,1,3),
     "4x100 Medley Relay" => new BestRelayTime($Kevin_Gell,55.48,$NCCS_13,3,4)

));

$Kevin_Gell_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Kevin_Gell,23.24,$Nats_15,103),
     "100 Freestyle" => new BestTime($Kevin_Gell,51.54,$Nats_15,98),
     "200 Freestyle" => new BestTime($Kevin_Gell,112.15,$Nats_15,0),
     "500 Freestyle" => new BestTime($Kevin_Gell,315.50,$Nats_15,47),
     "1000 Freestyle" => new BestTime($Kevin_Gell,661.33,$Nats_15,26),
     "50 Butterfly" => new BestTime($Kevin_Gell,29.22,$S_RVB_15,8),
     "100 IM" => new BestTime($Kevin_Gell,63.80,$Amherst_14,4),
     "200 IM" => new BestTime($Kevin_Gell,149.22,$Harvard_14,9),
     "4x100 Freestyle Relay" => new BestRelayTime($Kevin_Gell,54.67,$NCCS_14,6,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Kevin_Gell,122.54,$S_RVB_15,1,1),
     "4x50 Medley Relay" => new BestRelayTime($Kevin_Gell,23.97,$PSU_15,7,4)

));

$Kevin_Gell_Senior_Season = new Season (

array("4x50 Medley Relay" => new BestRelayTime($Kevin_Gell,24.24,$RWB_16,2,4),
  "4x50 Freestyle Relay" => new BestRelayTime($Kevin_Gell,24.23,$RWB_16,1,4),


));


$Kevin_Gell_Career = array($Kevin_Gell_Senior_Season,$Kevin_Gell_Junior_Season,
                       $Kevin_Gell_Middler_Season,$Kevin_Gell_Sophomore_Season, $Kevin_Gell_Freshman_Season);


/*Brady Greene*/
$Brady_Greene_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Brady_Greene,24.00,$Nats_15,175),
     "50 Backstroke" => new BestTime($Brady_Greene,27.00,$Lowell_15,1),
     "100 Backstroke" => new BestTime($Brady_Greene,59.10,$Nats_15,53),
     "200 Backstroke" => new BestTime($Brady_Greene,131.57,$Nats_15,38),
     "4x50 Medley Relay" => new BestRelayTime($Brady_Greene,27.67,$NCCS_14,3,1)
));
$Brady_Greene_Sophomore_Season = new Season (
array("50 Backstroke" => new BestTime($Brady_Greene,27.63,$Villanova_15,0),
	  "100 Backstroke" => new BestTime($Brady_Greene,60.97,$Villanova_15,3),
    "200 Backstroke" => new BestTime($Brady_Greene,136.81,$RWB_16,2),
	  "4x50 Medley Relay" => new BestRelayTime($Brady_Greene,27.63,$Villanova_15,4,1),
));
$Brady_Greene_Middler_Season = new Season (array());
$Brady_Greene_Junior_Season = new Season (array());
$Brady_Greene_Senior_Season = new Season (array());

$Brady_Greene_Career = array($Brady_Greene_Senior_Season,$Brady_Greene_Junior_Season,
                       $Brady_Greene_Middler_Season,$Brady_Greene_Sophomore_Season, $Brady_Greene_Freshman_Season);

/*Yawei Hao*/
$Yawei_Hao_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Yawei_Hao,24.64,$Nats_14,215),
     "100 Freestyle" => new BestTime($Yawei_Hao,58.46,$Uconn_13,23),
     "200 Freestyle" => new BestTime($Yawei_Hao,130.11,$Uconn_13,11),
     "500 Freestyle" => new BestTime($Yawei_Hao,361.52,$Uconn_13,5),
     "50 Backstroke" => new BestTime($Yawei_Hao,32.00,$NCCS_13,7),
     "50 Breaststroke" => new BestTime($Yawei_Hao,32.67,$NCCS_13,6),
     "50 Butterfly" => new BestTime($Yawei_Hao,27.95,$F_RVB_13,5),
     "100 Butterfly" => new BestTime($Yawei_Hao,59.95,$Nats_14,85),
     "200 Butterfly" => new BestTime($Yawei_Hao,141.79,$NCCS_13,2),
     "100 IM" => new BestTime($Yawei_Hao,61.38,$Nats_14,96),
     "200 IM" => new BestTime($Yawei_Hao,137.66,$Nats_14,68),
     "400 IM" => new BestTime($Yawei_Hao,299.59,$Nats_14,24),
     "4x50 Freestyle Relay" => new BestRelayTime($Yawei_Hao,25.14,$Rutgers_14,11,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Yawei_Hao,56.08,$Nats_14,68,3),
     "4x50 Medley Relay" => array(new BestRelayTime($Yawei_Hao,32.33,$Uconn_13,5,2),
                                    new BestRelayTime($Yawei_Hao,26.83,$URI_14,2,3))
));

$Yawei_Hao_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Yawei_Hao,24.60,$Harvard_14,12),
     "100 Freestyle" => new BestTime($Yawei_Hao,54.07,$NCCS_14,4),
     "200 Freestyle" => new BestTime($Yawei_Hao,117.57,$Nats_15,72),
     "1000 Freestyle" => new BestTime($Yawei_Hao,744.45,$S_RVB_15,3),
     "200 Backstroke" => new BestTime($Yawei_Hao,144.68,$S_RVB_15,3),
     "200 Breaststroke" => new BestTime($Yawei_Hao,158.99,$S_RVB_15,3),
     "50 Butterfly" => new BestTime($Yawei_Hao,26.88,$Lowell_15,5),
     "100 Butterfly" => new BestTime($Yawei_Hao,58.24,$Nats_15,76),
     "200 Butterfly" => new BestTime($Yawei_Hao,138.06,$NCCS_14,2),
     "100 IM" => new BestTime($Yawei_Hao,59.25,$Nats_15,71),
     "200 IM" => new BestTime($Yawei_Hao,131.15,$Nats_15,48),
     "400 IM" => new BestTime($Yawei_Hao,281.82,$Nats_15,18),
     "4x100 Freestyle Relay" => new BestRelayTime($Yawei_Hao,54.07,$NCCS_14,4,1),
     "4x50 Medley Relay" => new BestRelayTime($Yawei_Hao,26.77,$Harvard_14,7,3)
));
$Yawei_Hao_Middler_Season = new Season
(array("50 Freestyle" => new BestTime($Yawei_Hao,23.94,$Villanova_15,9),
	   "100 Freestyle" => new BestTime($Yawei_Hao,52.01,$Villanova_15,5),
       "200 Freestyle" => new BestTime($Yawei_Hao,121.28,$F_RVB_15,5),
       "500 Freestyle" => new BestTime($Yawei_Hao,340.46,$F_RVB_15,2),
       "100 IM" => new BestTime($Yawei_Hao,62.41,$Harvard_15,12),
	   "4x50 Freestyle Relay" => new BestRelayTime($Yawei_Hao,23.32,$Villanova_15,2,4),
	   "4x100 Freestyle Relay" => new BestRelayTime($Yawei_Hao,53.03,$NCCS_15,2,2),
       "4x50 Medley Relay" => new BestRelayTime($Yawei_Hao,24.81,$Villanova_15,4,4)
));
$Yawei_Hao_Junior_Season = new Season (array());
$Yawei_Hao_Senior_Season = new Season (array());

$Yawei_Hao_Career = array($Yawei_Hao_Senior_Season,$Yawei_Hao_Junior_Season,
                       $Yawei_Hao_Middler_Season,$Yawei_Hao_Sophomore_Season, $Yawei_Hao_Freshman_Season);

/*Gavin Harris*/
$Gavin_Harris_Freshman_Season = new Season (
array("100 Freestyle" => new BestTime($Gavin_Harris,52.63,$Harvard_14,8),
     "200 Freestyle" => new BestTime($Gavin_Harris,118.30,$Amherst_14,2),
     "500 Freestyle" => new BestTime($Gavin_Harris,311.73,$NCCS_14,55),
     "1000 Freestyle" => new BestTime($Gavin_Harris,652.52,$Nats_15,21),
     "1650 Freestyle" => new BestTime($Gavin_Harris,1192.42,$S_RVB_15,6),
     "50 Breaststroke" => new BestTime($Gavin_Harris,29.67,$Nats_15,50),
     "100 Breaststroke" => new BestTime($Gavin_Harris,65.58,$Nats_15,62),
     "200 Breaststroke" => new BestTime($Gavin_Harris,151.67,$NCCS_14,5),
     "100 IM" => new BestTime($Gavin_Harris,61.56,$F_RVB_14,5),
     "400 IM" => new BestTime($Gavin_Harris,292.24,$Nats_15,25),
     "4x200 Freestyle Relay" => new BestRelayTime($Gavin_Harris,123.21,$S_RVB_15,2,1),
     "4x50 Medley Relay" => new BestRelayTime($Gavin_Harris,28.83,$Harvard_14,2,2)
));
$Gavin_Harris_Sophomore_Season = new Season (
array("100 Freestyle" => new BestTime($Gavin_Harris,54.16,$Villanova_15,12),
    "1000 Freestyle" => new BestTime($Gavin_Harris,755.60,$RWB_16,2),
    "50 Breaststroke" => new BestTime($Gavin_Harris,31.65,$Villanova_15,4),
	  "100 Breaststroke" => new BestTime($Gavin_Harris,70.31,$Villanova_15,7),
    "200 Breaststroke" => new BestTime($Gavin_Harris,200.00,$RWB_16,4),
    "4x200 Freestyle Relay" => new BestRelayTime($Gavin_Harris,123.21,$S_RVB_15,2,1)
));
$Gavin_Harris_Middler_Season = new Season (array());
$Gavin_Harris_Junior_Season = new Season (array());
$Gavin_Harris_Senior_Season = new Season (array());

$Gavin_Harris_Career = array($Gavin_Harris_Senior_Season,$Gavin_Harris_Junior_Season,
                       $Gavin_Harris_Middler_Season,$Gavin_Harris_Sophomore_Season, $Gavin_Harris_Freshman_Season);

/*Charlie Haviland*/

$Charlie_Haviland_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Charlie_Haviland,23.99,$Nats_15,173),
     "100 Freestyle" => new BestTime($Charlie_Haviland,52.54,$Nats_15,130),
     "100 IM" => new BestTime($Charlie_Haviland,63.2,$Nats_15,137),
     "200 IM" => new BestTime($Charlie_Haviland,148.15,$Lowell_15,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Charlie_Haviland,23.75,$Nats_15,79,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Charlie_Haviland,51.98,$Nats_15,0,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Charlie_Haviland,118.34,$Nats_15,145,3),
     "4x50 Medley Relay" => new BestRelayTime($Charlie_Haviland,23.42,$Nats_15,176,4)

));
$Charlie_Haviland_Sophomore_Season = new Season (
array(//"50 Freestyle" => new BestTime($Charlie_Haviland,25.21,$Villanova_15,0),
	  "100 Freestyle" => new BestTime($Charlie_Haviland,56.27,$Harvard_15,21),
	  "50 Butterfly" => new BestTime($Charlie_Haviland,27.76,$RWB_16,6),
	  "50 Breaststroke" => new BestTime($Charlie_Haviland,34.32,$RWB_16,9),
    "100 IM" => new BestTime($Charlie_Haviland,68.52,$Harvard_15,23),
	  "4x50 Freestyle Relay" => new BestRelayTime($Charlie_Haviland,25.21,$Villanova_15,4,1),
    "4x50 Medley Relay" => array(new BestRelayTime($Charlie_Haviland,24.74,$Villanova_15,8,4),
                                  new BestRelayTime($Charlie_Haviland,32.07,$RWB_16,1,1))
));
$Charlie_Haviland_Middler_Season = new Season (array());
$Charlie_Haviland_Junior_Season = new Season (array());
$Charlie_Haviland_Senior_Season = new Season (array());
$Charlie_Haviland_Career = array($Charlie_Haviland_Senior_Season,$Charlie_Haviland_Junior_Season,
                       $Charlie_Haviland_Middler_Season,$Charlie_Haviland_Sophomore_Season, $Charlie_Haviland_Freshman_Season);

/*Brandon Hoang*/
$Brandon_Hoang_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Brandon_Hoang,23.41,$NCCS_13,2),
     "50 Backstroke" => new BestTime($Brandon_Hoang,27.99,$Nats_14,50),
     "100 Backstroke" => new BestTime($Brandon_Hoang,61.41,$Nats_14,72),
     "50 Butterfly" => new BestTime($Brandon_Hoang,26.02,$Princeton_13,5),
     "100 Butterfly" => new BestTime($Brandon_Hoang,56.92,$Nats_14,53),
     "100 IM" => new BestTime($Brandon_Hoang,61.79,$Rutgers_14,10),
     "400 IM" => new BestTime($Brandon_Hoang,292.19,$Nats_14,19),
     "4x50 Freestyle Relay" => new BestRelayTime($Brandon_Hoang,22.46,$Nats_14,60,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Brandon_Hoang,56.55,$Uconn_13,5,3),
     "4x50 Medley Relay" => new BestRelayTime($Brandon_Hoang,28.26,$Princeton_13,4,1),
     "4x100 Medley Relay" => new BestRelayTime($Brandon_Hoang,56.73,$Nats_14,44,3)
));
$Brandon_Hoang_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Brandon_Hoang,24.50,$NCCS_14,14),
     "100 Backstroke" => new BestTime($Brandon_Hoang,63.04,$Harvard_14,8),
     "200 Backstroke" => new BestTime($Brandon_Hoang,148.20,$S_RVB_15,4),
     "50 Butterfly" => new BestTime($Brandon_Hoang,26.07,$Nats_15,113),
     "100 Butterfly" => new BestTime($Brandon_Hoang,58.29,$Nats_15,77),
     "200 Butterfly" => new BestTime($Brandon_Hoang,131.08,$Nats_15,23),
     "100 IM" => new BestTime($Brandon_Hoang,63.28,$Lowell_15,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Brandon_Hoang,24.79,$Harvard_14,6,1),
     "4x50 Medley Relay" => array(new BestRelayTime($Brandon_Hoang,29.46,$S_RVB_15,1,1),
                                    new BestRelayTime($Brandon_Hoang,26.57,$NCCS_14,8,3),
                                    new BestRelayTime($Brandon_Hoang,23.61,$Harvard_14,2,4)),
     "4x100 Medley Relay" => new BestRelayTime($Brandon_Hoang,60.34,$S_RVB_15,2,3)
));
$Brandon_Hoang_Middler_Season = new Season (
array("50 Backstroke" => new BestTime($Brandon_Hoang,29.69,$NCCS_15,5),
	  "50 Butterfly" => new BestTime($Brandon_Hoang,26.51,$NCCS_15,5),
	  "100 Butterfly" => new BestTime($Brandon_Hoang,59.36,$Harvard_15,6),
      "100 IM" => new BestTime($Brandon_Hoang,64.36,$F_RVB_15,5),
	  "4x50 Freestyle Relay" => new BestRelayTime($Brandon_Hoang,24.25,$F_RVB_15,3,2),
	  "4x50 Medley Relay" => array(new BestRelayTime($Brandon_Hoang,29.37,$F_RVB_15,2,1),
	  	   new BestRelayTime($Brandon_Hoang,26.40,$F_RVB_15,3,3)),
	  "4x100 Medley Relay" => new BestRelayTime($Brandon_Hoang,54.71,$RWB_16,2,4),
));
$Brandon_Hoang_Junior_Season = new Season (array());
$Brandon_Hoang_Senior_Season = new Season (array());
$Brandon_Hoang_Career = array($Brandon_Hoang_Senior_Season,$Brandon_Hoang_Junior_Season,
                       $Brandon_Hoang_Middler_Season,$Brandon_Hoang_Sophomore_Season, $Brandon_Hoang_Freshman_Season);


/*Kurt Jaisle*/
$Kurt_Jaisle_Freshman_Season = new Season (
array("100 Freestyle" => new BestTime($Kurt_Jaisle,54.23,$Nats_15,182),
     "200 Freestyle" => new BestTime($Kurt_Jaisle,124.00,$Amherst_14,6),
     "500 Freestyle" => new BestTime($Kurt_Jaisle,348.79,$Lowell_15,8),
     "50 Breaststroke" => new BestTime($Kurt_Jaisle,32.29,$Nats_15,105),
     "100 Breaststroke" => new BestTime($Kurt_Jaisle,71.57,$Nats_15,119),
     "4x50 Freestyle Relay" => new BestRelayTime($Kurt_Jaisle,55.57,$NCCS_14,6,2),
     "4x50 Medley Relay" => new BestRelayTime($Kurt_Jaisle,31.92,$Harvard_14,7,2),
     "4x100 Medley Relay" => new BestRelayTime($Kurt_Jaisle,73.02,$S_RVB_15,1,2)
));
$Kurt_Jaisle_Sophomore_Season = new Season (
array("100 Freestyle" => new BestTime($Kurt_Jaisle,55.68,$Villanova_15,15),
    "200 Freestyle" => new BestTime($Kurt_Jaisle,127.91,$F_RVB_15,8),
    "50 Breaststroke" => new BestTime($Kurt_Jaisle,33.18,$Villanova_15,7),
    "100 Breaststroke" => new BestTime($Kurt_Jaisle,73.87,$Villanova_15,9),
	  "4x100 Freestyle Relay" => new BestRelayTime($Kurt_Jaisle,56.77,$F_RVB_15,2,3),
    "4x200 Freestyle Relay" => new BestRelayTime($Kurt_Jaisle,126.97,$RWB_16,2,2),
	  "4x50 Medley Relay" => new BestRelayTime($Kurt_Jaisle,31.70,$Villanova_15,8,2)
));
$Kurt_Jaisle_Middler_Season = new Season (array());
$Kurt_Jaisle_Junior_Season = new Season (array());
$Kurt_Jaisle_Senior_Season = new Season (array());


$Kurt_Jaisle_Career = array($Kurt_Jaisle_Senior_Season,$Kurt_Jaisle_Junior_Season,
                       $Kurt_Jaisle_Middler_Season,$Kurt_Jaisle_Sophomore_Season, $Kurt_Jaisle_Freshman_Season);


/*Sam Kang*/
$Sam_Kang_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Sam_Kang,22.52,$Nats_15,48),
     "100 Freestyle" => new BestTime($Sam_Kang,50.49,$Nats_15,54),
     "50 Breaststroke" => new BestTime($Sam_Kang,33.88,$S_RVB_15,7),
     "50 Butterfly" => new BestTime($Sam_Kang,25.03,$Nats_15,58),
     "100 Butterfly" => new BestTime($Sam_Kang,55.89,$Nats_15,39),
     "200 Butterfly" => new BestTime($Sam_Kang,162.36,$S_RVB_15,6),
     "100 IM" => new BestTime($Sam_Kang,62.22,$NCCS_14,8),
     "4x50 Freestyle Relay" => new BestRelayTime($Sam_Kang,23.86,$S_RVB_15,2,4),
     "4x50 Medley Relay" => new BestRelayTime($Sam_Kang,25.10,$PSU_15,7,3)
));
$Sam_Kang_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Sam_Kang,25.19,$F_RVB_15,3),
     "100 Freestyle" => new BestTime($Sam_Kang,59.06,$F_RVB_15,10),
     "50 Butterfly" => new BestTime($Sam_Kang,27.30,$F_RVB_15,5),
     "100 IM" => new BestTime($Sam_Kang,62.64,$F_RVB_15,4)
));
$Sam_Kang_Middler_Season = new Season (array());
$Sam_Kang_Junior_Season = new Season (array());
$Sam_Kang_Senior_Season = new Season (array());

$Sam_Kang_Career = array($Sam_Kang_Senior_Season,$Sam_Kang_Junior_Season,
                       $Sam_Kang_Middler_Season,$Sam_Kang_Sophomore_Season, $Sam_Kang_Freshman_Season);

/*Thomas Kenyon*/
$Thomas_Kenyon_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Thomas_Kenyon,24.59,$Villanova_15,14),
   "100 Freestyle" => new BestTime($Thomas_Kenyon,56.61,$F_RVB_15,8),
   "50 Butterfly" => new BestTime($Thomas_Kenyon,27.42,$RWB_16,5),
   "100 IM" => new BestTime($Thomas_Kenyon,66.30,$Harvard_15,20),
	 "4x50 Freestyle Relay" => new BestRelayTime($Thomas_Kenyon,24.78,$Villanova_15,6,2),
	 "4x50 Medley Relay" => new BestRelayTime($Thomas_Kenyon,24.58,$F_RVB_15,2,4)
));
$Thomas_Kenyon_Sophomore_Season = new Season (array());
$Thomas_Kenyon_Middler_Season = new Season (array());
$Thomas_Kenyon_Junior_Season = new Season (array());
$Thomas_Kenyon_Senior_Season = new Season (array());
$Thomas_Kenyon_Career = array($Thomas_Kenyon_Senior_Season,$Thomas_Kenyon_Junior_Season,
                       $Thomas_Kenyon_Middler_Season,$Thomas_Kenyon_Sophomore_Season, $Thomas_Kenyon_Freshman_Season);


/*Matthew Knapik*/
$Matthew_Knapik_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Matthew_Knapik,23.41,$NCCS_11,1),
     "100 Freestyle" => new BestTime($Matthew_Knapik,50.01,$Nats_12,37),
     "200 Freestyle" => new BestTime($Matthew_Knapik,119.21,$Harvard_11,4),
     "500 Freestyle" => new BestTime($Matthew_Knapik,325.87,$F_RVB_12,1),
     "100 Backstroke" => new BestTime($Matthew_Knapik,55.69,$Nats_12,16),
     "100 Breaststroke" =>  new BestTime($Matthew_Knapik,70.25,$F_RVB_12,2),
     "100 Butterfly" => new BestTime($Matthew_Knapik,55.92,$Nats_12,34),
     "200 IM" => new BestTime($Matthew_Knapik,122.39,$Nats_12,9),
     "400 IM" => new BestTime($Matthew_Knapik,263.23,$Nats_12,5),
     "4x50 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,23.41,$Nats_12,15,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,50.01,$Nats_12,11,1),
     "4x50 Medley Relay" => new BestRelayTime($Matthew_Knapik,25.30,$Nats_12,11,3)
));
$Matthew_Knapik_Sophomore_Season = new Season (
array("100 Freestyle" => new BestTime($Matthew_Knapik,51.53,$Princeton_12,4),
     "200 Freestyle" => new BestTime($Matthew_Knapik,113.64,$Princeton_12,3),
     "500 Freestyle" => new BestTime($Matthew_Knapik,319.23,$Rutgers_13,3),
     "50 Backstroke" => new BestTime($Matthew_Knapik,27.80,$Rutgers_13,2),
     "100 Backstroke" => new BestTime($Matthew_Knapik,58.09,$Amherst_12,2),
     "100 Breaststroke" =>  new BestTime($Matthew_Knapik,71.95,$UVM_12,3),
     "100 Butterfly" => new BestTime($Matthew_Knapik,58.62,$Amherst_12,4),
     "200 IM" => new BestTime($Matthew_Knapik,131.83,$UVM_12,1),
     "4x50 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,23.23,$Princeton_12,1,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,51.95,$Swim_Bunny_13,1,1),
     "4x50 Medley Relay" => new BestRelayTime($Matthew_Knapik,27.80,$Rutgers_13,2,1)
));
$Matthew_Knapik_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Matthew_Knapik,22.60,$Nats_14,8),
     "100 Freestyle" => new BestTime($Matthew_Knapik,49.28,$Nats_14,32),
     "200 Freestyle" => new BestTime($Matthew_Knapik,111.84,$Nats_14,0),
     "500 Freestyle" => new BestTime($Matthew_Knapik,294.41,$Nats_14,4),
     "1000 Freestyle" => new BestTime($Matthew_Knapik,620.02,$Nats_14,6),
     "50 Backstroke" => new BestTime($Matthew_Knapik,25.78,$Nats_14,10),
     "100 Backstroke" => new BestTime($Matthew_Knapik,53.89,$Nats_14,4),
     "200 Backstroke" => new BestTime($Matthew_Knapik,116.76,$Nats_14,4),
     "100 Breaststroke" =>  new BestTime($Matthew_Knapik,72.92,$F_RVB_13,5),
     "100 Butterfly" => new BestTime($Matthew_Knapik,57.59,$Princeton_13,5),
     "200 IM" => new BestTime($Matthew_Knapik,130.41,$Uconn_13,1),
     "4x50 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,22.60,$Nats_14,8,1,88.49),
     "4x100 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,49.37,$Nats_14,7,1),
     "4x50 Medley Relay" => array(new BestRelayTime($Matthew_Knapik,25.78,$Nats_14,10,1,99.44),
                                   new BestRelayTime($Matthew_Knapik,23.23,$Uconn_13,2,4)),
     "4x100 Medley Relay" => new BestRelayTime($Matthew_Knapik,53.89,$Nats_14,4,1,213.43)
));
$Matthew_Knapik_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Matthew_Knapik,22.74,$Nats_15,0),
     "100 Freestyle" => new BestTime($Matthew_Knapik,48.68,$Nats_15,0),
     "200 Freestyle" => new BestTime($Matthew_Knapik,106.81,$Nats_15,11),
     "500 Freestyle" => new BestTime($Matthew_Knapik,295.87,$Nats_15,10),
     "1650 Freestyle" => new BestTime($Matthew_Knapik,1124.69,$S_RVB_15,2),
     "50 Backstroke" => new BestTime($Matthew_Knapik,25.57,$Nats_15,0),
     "100 Backstroke" => new BestTime($Matthew_Knapik,54.97,$Nats_15,0),
     "200 Backstroke" => new BestTime($Matthew_Knapik,118.59,$Nats_15,9),
     "200 Breaststroke" => new BestTime($Matthew_Knapik,153.59,$F_RVB_14,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,22.74,$Nats_15,0,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Matthew_Knapik,48.68,$Nats_15,8,1,195.39),
     "4x50 Medley Relay" => new BestRelayTime($Matthew_Knapik,25.57,$Nats_15,17,1),
     "4x100 Medley Relay" => new BestRelayTime($Matthew_Knapik,54.97,$Nats_15,0,1)
));
$Matthew_Knapik_Senior_Season = new Season (
array("100 Freestyle" => new BestTime($Matthew_Knapik,52.05,$Harvard_15,7),
	  "200 Freestyle" => new BestTime($Matthew_Knapik,118.02,$F_RVB_15,4),
    "50 Backstroke" => new BestTime($Matthew_Knapik,28.24,$Harvard_15,6),
    "200 Backstroke" => new BestTime($Matthew_Knapik,130.82,$RWB_16,1),
    "50 Butterfly" => new BestTime($Matthew_Knapik,25.91,$Harvard_15,4),
    "100 Butterfly" => new BestTime($Matthew_Knapik,59.37,$F_RVB_15,4),
    "200 Butterfly" => new BestTime($Matthew_Knapik,136.47,$RWB_16,3),
    "4x100 Medley Relay" => new BestRelayTime($Matthew_Knapik,59.12,$RWB_16,3,1),
    "4x200 Medley Relay" => new BestRelayTime($Matthew_Knapik,115.92,$RWB_16,2,1)
));
$Matthew_Knapik_Career = array($Matthew_Knapik_Senior_Season,$Matthew_Knapik_Junior_Season,
                       $Matthew_Knapik_Middler_Season,$Matthew_Knapik_Sophomore_Season, $Matthew_Knapik_Freshman_Season);

/*Matt Landon*/
$Matt_Landon_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Matt_Landon,26.81,$Nats_13,273),
     "100 Freestyle" => new BestTime($Matt_Landon,58.56,$Nats_13,219),
     "200 Freestyle" => new BestTime($Matt_Landon,129.64,$Uconn_13,18),
     "500 Freestyle" => new BestTime($Matt_Landon,364.32,$Uconn_13,9),
     "1000 Freestyle" => new BestTime($Matt_Landon,764.00,$S_RVB_13,3),
     "50 Breaststroke" => new BestTime($Matt_Landon,35.82,$Nats_13,133),
     "4x50 Freestyle Relay" => new BestRelayTime($Matt_Landon,26.58,$Nats_13,54,2),
     "4x200 Freestyle Relay" => new BestRelayTime($Matt_Landon,129.97,$Nats_13,16,2)
));
$Matt_Landon_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Matt_Landon,26.55,$Nats_14,330),
     "100 Freestyle" => new BestTime($Matt_Landon,54.04,$Nats_14,170),
     "200 Freestyle" => new BestTime($Matt_Landon,125.20,$Nats_14,95),
     "500 Freestyle" => new BestTime($Matt_Landon,340.44,$Nats_14,50),
     "1000 Freestyle" => new BestTime($Matt_Landon,724.25,$Nats_14,31),
     "1650 Freestyle" => new BestTime($Matt_Landon,1321.85,$NCCS_13,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Matt_Landon,26.87,$Rutgers_14,11,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Matt_Landon,61.28,$NCCS_13,4,3),
     "4x200 Freestyle Relay" => new BestRelayTime($Matt_Landon,125.37,$Nats_14,32,4),
     "4x50 Medley Relay" => new BestRelayTime($Matt_Landon,27.49,$NCCS_13,8,4)
));
$Matt_Landon_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Matt_Landon,27.06,$S_RVB_15,5),
     "100 Freestyle" => new BestTime($Matt_Landon,56.54,$Nats_15,231),
     "200 Freestyle" => new BestTime($Matt_Landon,121.44,$Nats_15,91),
     "500 Freestyle" => new BestTime($Matt_Landon,327.80,$Nats_15,67),
     "1000 Freestyle" => new BestTime($Matt_Landon,677.88,$Nats_15,34),
     "1650 Freestyle" => new BestTime($Matt_Landon,1217.25,$S_RVB_15,8),
     "50 Butterfly" => new BestTime($Matt_Landon,31.69,$S_RVB_15,14),
     "50 Breaststroke" => new BestTime($Matt_Landon,34.55,$Nats_15,145),
     "100 IM" => new BestTime($Matt_Landon,68.99,$Lowell_15,8),
     "4x50 Freestyle Relay" => new BestRelayTime($Matt_Landon,26.05,$Harvard_14,6,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Matt_Landon,59.08,$NCCS_14,6,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Matt_Landon,126.57,$S_RVB_15,2,3)
));
$Matt_Landon_Junior_Season = new Season (
array("50 Freestyle" => new BestTime($Matt_Landon,26.11,$Villanova_15,26),
    "100 Freestyle" => new BestTime($Matt_Landon,58.81,$Harvard_15,24),
    "200 Freestyle" => new BestTime($Matt_Landon,123.67,$NCCS_15,7),
    "500 Freestyle" => new BestTime($Matt_Landon,329.77,$Villanova_15,3),
    "1650 Freestyle" => new BestTime($Matt_Landon,1240.03,$RWB_16,2),
	  "4x50 Freestyle Relay" => new BestRelayTime($Matt_Landon,25.82,$Villanova_15,6,3),
	  "4x100 Freestyle Relay" => new BestRelayTime($Matt_Landon,58.66,$F_RVB_15,2,2),
    "4x200 Freestyle Relay" => new BestRelayTime($Matt_Landon,127.83,$RWB_16,2,1)
));
$Matt_Landon_Senior_Season = new Season (array());

$Matt_Landon_Career = array($Matt_Landon_Senior_Season,$Matt_Landon_Junior_Season,
                       $Matt_Landon_Middler_Season,$Matt_Landon_Sophomore_Season, $Matt_Landon_Freshman_Season);


/*Ryan Leys*/
$Ryan_Leys_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Ryan_Leys,27.25,$Nats_14,359),
     "100 Freestyle" => new BestTime($Ryan_Leys,63.26,$Nats_14,295),
     "50 Backstroke" => new BestTime($Ryan_Leys,33.06,$Nats_14,150),
     "4x50 Freestyle Relay" => new BestRelayTime($Ryan_Leys,28.19,$URI_14,5,3)
));
$Ryan_Leys_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Ryan_Leys,25.93,$Nats_15,330),
     "100 Freestyle" => new BestTime($Ryan_Leys,59.95,$Nats_15,295),
     "50 Backstroke" => new BestTime($Ryan_Leys,31.86,$Nats_15,148),
     "50 Butterfly" => new BestTime($Ryan_Leys,28.69,$Nats_15,228),
     "100 Butterfly" => new BestTime($Ryan_Leys,67.83,$Nats_15,0),
     "100 IM" => new BestTime($Ryan_Leys,74.64,$Harvard_14,14),
     "4x50 Freestyle Relay" => new BestRelayTime($Ryan_Leys,27.13,$Harvard_14,7,3),
     "4x50 Medley Relay" => new BestRelayTime($Ryan_Leys,32.99,$PSU_15,26,1)
));
$Ryan_Leys_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Ryan_Leys,27.33,$NCCS_15,14),
    "50 Butterfly" => new BestTime($Ryan_Leys,29.61,$Harvard_15,16),
    "4x50 Freestyle Relay" => new BestRelayTime($Ryan_Leys,27.85,$RWB_16,3,3),
	  "4x50 Medley Relay" => array(new BestRelayTime($Ryan_Leys,26.87,$F_RVB_15,1,4),
	  	   new BestRelayTime($Ryan_Leys,29.85,$NCCS_15,7,3))

));
$Ryan_Leys_Junior_Season = new Season (array());
$Ryan_Leys_Senior_Season = new Season (array());

$Ryan_Leys_Career = array($Ryan_Leys_Senior_Season,$Ryan_Leys_Junior_Season,
                       $Ryan_Leys_Middler_Season,$Ryan_Leys_Sophomore_Season, $Ryan_Leys_Freshman_Season);

/*Lewis Li*/
$Lewis_Li_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Lewis_Li,22.58,$Nats_13,10),
     "100 Freestyle" => new BestTime($Lewis_Li,49.57,$Nats_13,5),
     "200 Freestyle" => new BestTime($Lewis_Li,108.91,$Nats_13,14),
     "500 Freestyle" => new BestTime($Lewis_Li,311.9,$Nats_13,14),
     "50 Backstroke" => new BestTime($Lewis_Li,26.48,$Nats_13,13),
     "100 Backstroke" => new BestTime($Lewis_Li,59.05,$Rutgers_13,4),
     "100 Butterfly" => new BestTime($Lewis_Li,53.78,$Nats_13,13),
     "200 Butterfly" => new BestTime($Lewis_Li,125.61,$Rutgers_13,4),
     "100 IM" => new BestTime($Lewis_Li,57.84,$Princeton_12,3),
     "200 IM" => new BestTime($Lewis_Li,121.97,$Nats_13,7),
     "4x50 Freestyle Relay" => new BestRelayTime($Lewis_Li,22.58,$Nats_13,10,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Lewis_Li,49.57,$Nats_13,5,1),
     "4x50 Medley Relay" => new BestRelayTime($Lewis_Li,26.48,$Nats_13,13,1)
));
$Lewis_Li_Sophomore_Season = new Season (
array(
     "50 Freestyle" => new BestTime($Lewis_Li,23.20,$Rutgers_14,1),
     "200 Freestyle" => new BestTime($Lewis_Li,108.67,$Nats_14,17),
     "100 Backstroke" => new BestTime($Lewis_Li,60.50,$Princeton_13,2),
     "50 Breaststroke" => new BestTime($Lewis_Li,30.61,$F_RVB_13,1),
     "100 Breaststroke" => new BestTime($Lewis_Li,67.76,$F_RVB_13,1),
     "100 Butterfly" => new BestTime($Lewis_Li,54.07,$Nats_14,17),
     "200 Butterfly" => new BestTime($Lewis_Li,120.21,$Nats_14,7),
     "100 IM" => new BestTime($Lewis_Li,55.07,$Nats_14,7),
     "200 IM" => new BestTime($Lewis_Li,122.93,$Nats_14,13),
     "400 IM" => new BestTime($Lewis_Li,293.89,$NCCS_13,2),
     "4x50 Freestyle Relay" => new BestRelayTime($Lewis_Li,23.20,$Rutgers_14,10,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Lewis_Li,50.80,$NCCS_13,3,4),
     "4x50 Medley Relay" => new BestRelayTime($Lewis_Li,24.38,$Nats_14,10,3,99.44),
     "4x100 Medley Relay" => new BestRelayTime($Lewis_Li,52.77,$Nats_14,4,3,213.43)
));
$Lewis_Li_Middler_Season = new Season (
array("200 Freestyle" => new BestTime($Lewis_Li,107.67,$Nats_15,13),
     "100 Backstroke" => new BestTime($Lewis_Li,60.49,$S_RVB_15,2),
     "50 Breaststroke" => new BestTime($Lewis_Li,30.97,$S_RVB_15,3),
     "50 Butterfly" => new BestTime($Lewis_Li,24.54,$Nats_15,33),
     "100 Butterfly" => new BestTime($Lewis_Li,53.68,$Nats_15,15),
     "200 Butterfly" => new BestTime($Lewis_Li,121.21,$Nats_15,12),
     "100 IM" => new BestTime($Lewis_Li,54.97,$Nats_15,10),
     "200 IM" => new BestTime($Lewis_Li,136.95,$F_RVB_14,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Lewis_Li,49.26,$Nats_15,8,2,195.39),
     "4x100 Medley Relay" => new BestRelayTime($Lewis_Li,60.49,$S_RVB_15,3,1)
));
$Lewis_Li_Junior_Season = new Season (
array("200 Freestyle" => new BestTime($Lewis_Li,111.16,$F_RVB_15,2),
      "50 Butterfly" => new BestTime($Lewis_Li,25.68,$F_RVB_15,2),
      "100 Butterfly" => new BestTime($Lewis_Li,56.00,$F_RVB_15,2),
      "200 Butterfly" => new BestTime($Lewis_Li,128.86,$RWB_16,2),
      "100 IM" => new BestTime($Lewis_Li,58.41,$Harvard_15,4),
      "4x200 Freestyle Relay" => new BestRelayTime($Lewis_Li,116.19,$RWB_16,2,4),
      "4x100 Medley Relay" => new BestRelayTime($Lewis_Li,56.06,$RWB_16,1,3)
));
$Lewis_Li_Senior_Season = new Season (array());

$Lewis_Li_Career = array($Lewis_Li_Senior_Season,$Lewis_Li_Junior_Season,
                       $Lewis_Li_Middler_Season,$Lewis_Li_Sophomore_Season, $Lewis_Li_Freshman_Season);


/*Stephen Mais*/
$Stephen_Mais_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Stephen_Mais,26.73,$URI_13,11),
     "100 Freestyle" => new BestTime($Stephen_Mais,58.93,$Rutgers_13,34),
     "500 Freestyle" => new BestTime($Stephen_Mais,349.31,$Swim_Bunny_13,4),
     "50 Breaststroke" => new BestTime($Stephen_Mais,36.21,$S_RVB_13,2),
     "100 Breaststroke" => new BestTime($Stephen_Mais,78.83,$Swim_Bunny_13,14),
     "50 Butterfly" => new BestTime($Stephen_Mais,32.66,$F_RVB_13,5),
     "100 IM" => new BestTime($Stephen_Mais,74.93,$F_RVB_13,3),
     "4x50 Freestyle Relay" => new BestRelayTime($Stephen_Mais,28.16,$F_RVB_13,2,2),
     "4x50 Medley Relay" => new BestRelayTime($Stephen_Mais,27.00,$URI_13,4,3)
));
$Stephen_Mais_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Stephen_Mais,26.93,$NCCS_13,18),
     "500 Freestyle" => new BestTime($Stephen_Mais,363.48,$NCCS_13,6),
     "200 IM" => new BestTime($Stephen_Mais,161.91,$F_RVB_13,5)
));
$Stephen_Mais_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Stephen_Mais,25.19,$Lowell_15,6),
     "100 Freestyle" => new BestTime($Stephen_Mais,52.49,$Nats_15,129),
     "200 Freestyle" => new BestTime($Stephen_Mais,121.81,$Lowell_15,6),
     "500 Freestyle" => new BestTime($Stephen_Mais,324.09,$Nats_15,60),
     "1000 Freestyle" => new BestTime($Stephen_Mais,668.14,$Nats_15,30),
     "50 Breaststroke" => new BestTime($Stephen_Mais,33.19,$Nats_15,0),
     "100 Breaststroke" => new BestTime($Stephen_Mais,70.87,$Nats_15,114),
     "50 Butterfly" => new BestTime($Stephen_Mais,29.40,$S_RVB_15,9),
     "100 Butterfly" => new BestTime($Stephen_Mais,68.20,$S_RVB_15,9),
     "100 IM" => new BestTime($Stephen_Mais,76.53,$Lowell_15,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Stephen_Mais,25.47,$S_RVB_15,2,2),
     "4x50 Medley Relay" => new BestRelayTime($Stephen_Mais,28.46,$Harvard_14,6,3)
));
$Stephen_Mais_Junior_Season = new Season
(array("50 Freestyle" => new BestTime($Stephen_Mais,26.08,$Villanova_15,23),
      "100 Freestyle" => new BestTime($Stephen_Mais,61.37,$F_RVB_15,12),
      "500 Freestyle" => new BestTime($Stephen_Mais,354.32,$F_RVB_15,5),
	  "100 IM" => new BestTime($Stephen_Mais,68.33,$Villanova_15,7),
	  "4x50 Medley Relay" => new BestRelayTime($Stephen_Mais,28.46,$Villanova_15,8,3)
));
$Stephen_Mais_Senior_Season = new Season (array());
$Stephen_Mais_Career = array($Stephen_Mais_Senior_Season,$Stephen_Mais_Junior_Season,
                       $Stephen_Mais_Middler_Season,$Stephen_Mais_Sophomore_Season, $Stephen_Mais_Freshman_Season);

/*Trevor McCrobie*/
$Trevor_McCrobie_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Trevor_McCrobie,24.45,$Rutgers_14,22),
     "100 Freestyle" => new BestTime($Trevor_McCrobie,50.50,$Nats_14,65),
     "200 Freestyle" => new BestTime($Trevor_McCrobie,111.19,$Nats_14,28),
     "500 Freestyle" => new BestTime($Trevor_McCrobie,300.56,$Nats_14,10),
     "1000 Freestyle" => new BestTime($Trevor_McCrobie,629.08,$Nats_14,10),
     "1650 Freestyle" => new BestTime($Trevor_McCrobie,1139.26,$NCCS_13,1),
     "50 Backstroke" => new BestTime($Trevor_McCrobie,29.26,$NCCS_13,2),
     "100 Backstroke" => new BestTime($Trevor_McCrobie,61.69,$Uconn_13,2),
     "200 IM" => new BestTime($Trevor_McCrobie,138.15,$Princeton_13,8),
     "4x50 Freestyle Relay" => new BestRelayTime($Trevor_McCrobie,22.94,$Nats_14,63,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Trevor_McCrobie,54.41,$Uconn_13,5,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Trevor_McCrobie,111.01,$Nats_14,6,3,442.96)
));
$Trevor_McCrobie_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Trevor_McCrobie,24.85,$Harvard_14,7),
     "100 Freestyle" => new BestTime($Trevor_McCrobie,54.98,$Harvard_14,17),
     "200 Freestyle" => new BestTime($Trevor_McCrobie,115.09,$Nats_15,61),
     "500 Freestyle" => new BestTime($Trevor_McCrobie,309.10,$Nats_15,33),
     "1000 Freestyle" => new BestTime($Trevor_McCrobie,660.26,$Nats_15,24),
     "1650 Freestyle" => new BestTime($Trevor_McCrobie,1174.21,$S_RVB_15,3),
     "4x50 Freestyle Relay" => new BestRelayTime($Trevor_McCrobie,24.85,$Harvard_14,7,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Trevor_McCrobie,120.27,$S_RVB_15,2,4)
));
$Trevor_McCrobie_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Trevor_McCrobie,25.22,$NCCS_15,7),
	  "200 Freestyle" => new BestTime($Trevor_McCrobie,121.89,$NCCS_15,6),
    "50 Butterfly" => new BestTime($Trevor_McCrobie,28.51,$F_RVB_15,8),
    "50 Backstroke" => new BestTime($Trevor_McCrobie,29.28,$F_RVB_15,2),
    "100 Backstroke" => new BestTime($Trevor_McCrobie,62.89,$Harvard_15,8),
    "200 Backstroke" => new BestTime($Trevor_McCrobie,133.33,$NCCS_15,3),
	  "4x50 Freestyle Relay" => new BestRelayTime($Trevor_McCrobie,27.05,$F_RVB_15,4,1)
));
$Trevor_McCrobie_Junior_Season = new Season (array());
$Trevor_McCrobie_Senior_Season = new Season (array());

$Trevor_McCrobie_Career = array($Trevor_McCrobie_Senior_Season,$Trevor_McCrobie_Junior_Season,
                       $Trevor_McCrobie_Middler_Season,$Trevor_McCrobie_Sophomore_Season, $Trevor_McCrobie_Freshman_Season);

/*Artem Movchan*/
$Artem_Movchan_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Artem_Movchan,22.52,$RWB_16,1),
    "100 Freestyle" => new BestTime($Artem_Movchan,46.61,$Villanova_15,1),
	  "200 Backstroke" => new BestTime($Artem_Movchan,123.16,$NCCS_15,1),
    "50 Butterfly" => new BestTime($Artem_Movchan,24.22,$RWB_16,1),
    "100 IM" => new BestTime($Artem_Movchan,53.71,$Villanova_15,1),
    "200 IM" => new BestTime($Artem_Movchan,114.25,$Villanova_15,1),
    "4x50 Freestyle Relay" => new BestRelayTime($Artem_Movchan,23.29,$NCCS_15,1,1),
	  "4x100 Freestyle Relay" => new BestRelayTime($Artem_Movchan,48.60,$F_RVB_15,1,3),
    "4x100 Medley Relay" => new BestRelayTime($Artem_Movchan,45.53,$RWB_16,3,4),
));
$Artem_Movchan_Sophomore_Season = new Season (array());
$Artem_Movchan_Middler_Season = new Season (array());
$Artem_Movchan_Junior_Season = new Season (array());
$Artem_Movchan_Senior_Season = new Season (array());

$Artem_Movchan_Career = array($Artem_Movchan_Senior_Season,$Artem_Movchan_Junior_Season,
                       $Artem_Movchan_Middler_Season,$Artem_Movchan_Sophomore_Season, $Artem_Movchan_Freshman_Season);

/*Chris Murphy*/
$Chris_Murphy_Freshman_Season = new Season (
array("200 Freestyle" => new BestTime($Chris_Murphy,120.41,$Nats_15,88),
     "500 Freestyle" => new BestTime($Chris_Murphy,319.09,$Nats_15,54),
     "1650 Freestyle" => new BestTime($Chris_Murphy,1179.92,$S_RVB_15,4),
     "50 Breaststroke" => new BestTime($Chris_Murphy,32.91,$Lowell_15,3),
     "100 Breaststroke" => new BestTime($Chris_Murphy,73.06,$Lowell_15,2),
     "50 Butterfly" => new BestTime($Chris_Murphy,27.33,$Nats_15,0),
     "100 Butterfly" => new BestTime($Chris_Murphy,59.50,$Nats_15,91),
     "200 Butterfly" => new BestTime($Chris_Murphy,145.31,$NCCS_14,6),
     "200 IM" => new BestTime($Chris_Murphy,133.59,$Nats_15,57),
     "400 IM" => new BestTime($Chris_Murphy,288.61,$Nats_15,23),
     "4x100 Freestyle Relay" => new BestRelayTime($Chris_Murphy,57.18,$NCCS_14,4,2)
));
$Chris_Murphy_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Chris_Murphy,24.77,$Harvard_15,16),
	  "200 Freestyle" => new BestTime($Chris_Murphy,117.69,$Villanova_15,3),
	  "50 Butterfly" => new BestTime($Chris_Murphy,28.18,$F_RVB_15,7),
	  "100 Butterfly" => new BestTime($Chris_Murphy,61.21,$NCCS_15,8),
    "50 Backstroke" => new BestTime($Chris_Murphy,31.62,$F_RVB_15,3),
	  "100 Backstroke" => new BestTime($ChrisMurphy,64.13,$Vilanova_15,4),
    "200 Backstroke" => new BestTime($ChrisMurphy,137.89,$RWB_16,3),
    "200 IM" => new BestTime($Chris_Murphy,134.04,$Villanova_15,0),
	  "4x50 Freestyle Relay" => new BestRelayTime($Chris_Murphy,24.91,$Villanova_15,6,1),
	  "4x100 Freestyle Relay" => new BestRelayTime($Chris_Murphy,56.50,$F_RVB_15,1,1),
    "4x200 Freestyle Relay" => new BestRelayTime($Chris_Murphy,120.27,$RWB_16,1,4)
));
$Chris_Murphy_Middler_Season = new Season (array());
$Chris_Murphy_Junior_Season = new Season (array());
$Chris_Murphy_Senior_Season = new Season (array());
$Chris_Murphy_Career = array($Chris_Murphy_Senior_Season,$Chris_Murphy_Junior_Season,
                       $Chris_Murphy_Middler_Season,$Chris_Murphy_Sophomore_Season, $Chris_Murphy_Freshman_Season);

/*Nick Newhart*/
$Nick_Newhart_Freshman_Season = new Season (
array("50 Breaststroke" => new BestTime($Nick_Newhart,29.03,$Nats_12,17),
     "100 Breaststroke" => new BestTime($Nick_Newhart,65.22,$Nats_12,37),
     "200 Breaststroke" => new BestTime($Nick_Newhart,145.30,$Nats_12,19),
     "50 Butterfly" => new BestTime($Nick_Newhart,29.17,$F_RVB_11,9),
     "100 IM" => new BestTime($Nick_Newhart,61.90,$Nats_12,95),
     "200 IM" => new BestTime($Nick_Newhart,134.58,$Nats_12,46)
));
$Nick_Newhart_Sophomore_Season = new Season (
array("50 Breaststroke" => new BestTime($Nick_Newhart,29.92,$Princeton_12,4),
     "100 Breaststroke" => new BestTime($Nick_Newhart,67.22,$Princeton_12,5),
     "50 Butterfly" => new BestTime($Nick_Newhart,29.50,$Amherst_12,12),
     "100 IM" => new BestTime($Nick_Newhart,65.29,$Princeton_12,28),
     "200 IM" => new BestTime($Nick_Newhart,143.29,$UVM_12,5),
     "4x50 Medley Relay" => new BestRelayTime($Nick_Newhart,29.26,$Princeton_12,9,2)
));
$Nick_Newhart_Middler_Season = new Season (
array("50 Breaststroke" => new BestTime($Nick_Newhart,29.10,$Nats_14,35),
     "100 Breaststroke" => new BestTime($Nick_Newhart,64.40,$Nats_14,28),
     "200 Breaststroke" => new BestTime($Nick_Newhart,143.06,$Nats_14,27),
     "100 IM" => new BestTime($Nick_Newhart,61.18,$Nats_14,92),
     "200 IM" => new BestTime($Nick_Newhart,132.78,$Nats_14,52),
     "4x50 Freestyle Relay" => new BestRelayTime($Nick_Newhart,23.32,$Nats_14,63,2),
     "4x50 Medley Relay" => new BestRelayTime($Nick_Newhart,28.34,$Nats_14,57,2),
     "4x100 Medley Relay" => new BestRelayTime($Nick_Newhart,61.92,$Nats_14,44,2)
));
$Nick_Newhart_Junior_Season = new Season (
array("50 Breaststroke" => new BestTime($Nick_Newhart,29.04,$Nats_15,33),
     "100 Breaststroke" => new BestTime($Nick_Newhart,63.89,$Nats_15,41),
     "200 Breaststroke" => new BestTime($Nick_Newhart,148.03,$Nats_15,36),
     "50 Butterfly" => new BestTime($Nick_Newhart,27.19,$Nats_15,169),
     "100 IM" => new BestTime($Nick_Newhart,61.07,$Nats_15,97),
     "4x50 Medley Relay" => new BestRelayTime($Nick_Newhart,29.02,$Harvard_14,4,2)
));
$Nick_Newhart_Senior_Season = new Season (
array("50 Freestyle" => new BestTime($Nick_Newhart,25.77,$Villanova_15,22),
      "50 Breaststroke" => new BestTime($Nick_Newhart,29.99,$Villanova_15,1),
      "100 Breaststroke" => new BestTime($Nick_Newhart,67.09,$NCCS_15,1),
      "200 Breaststroke" => new BestTime($Nick_Newhart,154.20,$RWB_16,2),
      "100 IM" => new BestTime($Nick_Newhart,65.03,$Harvard_15,16),
	    "4x50 Freestyle Relay" => new BestRelayTime($Nick_Newhart,24.98,$Villanova_15,4,3),
	    "4x50 Medley Relay" => new BestRelayTime($Nick_Newhart,29.39,$RWB_16,1,2),
      "4x100 Medley Relay" => new BestRelayTime($Nick_Newhart,67.70,$RWB_16,2,2)
));

$Nick_Newhart_Career = array($Nick_Newhart_Senior_Season,$Nick_Newhart_Junior_Season,
                       $Nick_Newhart_Middler_Season,$Nick_Newhart_Sophomore_Season, $Nick_Newhart_Freshman_Season);

/*Matt Perez*/
$Matt_Perez_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Matt_Perez,25.54,$S_RVB_15,3),
     "100 Freestyle" => new BestTime($Matt_Perez,54.86,$Nats_15,200),
     "200 Freestyle" => new BestTime($Matt_Perez,117.78,$Nats_15,77),
     "200 Backstroke" => new BestTime($Matt_Perez,140.66,$S_RVB_15,2),
     "100 Butterfly" => new BestTime($Matt_Perez,61.97,$Nats_15,118),
     "200 IM" => new BestTime($Matt_Perez,133.24,$Nats_15,55),
     "4x200 Freestyle Relay" => new BestRelayTime($Matt_Perez,121.99,$S_RVB_15,1,3)
));
$Matt_Perez_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Matt_Perez,25.32,$RWB_16,9),
      "100 Freestyle" => new BestTime($Matt_Perez,55.65,$F_RVB_15,6),
      "50 Butterfly" => new BestTime($Matt_Perez,27.21,$RWB_16,4),
      "50 Backstroke" => new BestTime($Matt_Perez,31.71,$RWB_16,7),
      "100 Backstroke" => new BestTime($Matt_Perez,62.47,$Harvard_15,7),
      "100 IM" => new BestTime($Matt_Perez,63.05,$NCCS_15,5),
      "4x50 Freestyle Relay" => new BestRelayTime($Matt_Perez,24.75,$NCCS_15,5,4),
      "4x50 Medley Relay" => new BestRelayTime($Matt_Perez,32.77,$RWB_16,3,3)
));
$Matt_Perez_Middler_Season = new Season (array());
$Matt_Perez_Junior_Season = new Season (array());
$Matt_Perez_Senior_Season = new Season (array());
$Matt_Perez_Career = array($Matt_Perez_Senior_Season,$Matt_Perez_Junior_Season,
                       $Matt_Perez_Middler_Season,$Matt_Perez_Sophomore_Season, $Matt_Perez_Freshman_Season);


/*Eric Shi*/
$Eric_Shi_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Eric_Shi,23.97,$Nats_13,103),
     "100 Freestyle" => new BestTime($Eric_Shi,53.07,$Nats_13,103),
     "200 Freestyle" => new BestTime($Eric_Shi,118.28,$Nats_13,16),
     "500 Freestyle" => new BestTime($Eric_Shi,352.86,$F_RVB_12,2),
     "50 Backstroke" => new BestTime($Eric_Shi,32.78,$URI_13,6),
     "100 Backstroke" => new BestTime($Eric_Shi,71.56,$UVM_12,10),
     "50 Breaststroke" => new BestTime($Eric_Shi,31.86,$Swim_Bunny_13,1),
     "100 Breaststroke" => new BestTime($Eric_Shi,73.06,$Amherst_12,12),
     "200 Breaststroke" => new BestTime($Eric_Shi,150.88,$Nats_13,32),
     "50 Butterfly" => new BestTime($Eric_Shi,26.83,$S_RVB_13,2),
     "100 Butterfly" => new BestTime($Eric_Shi,62.08,$Nats_13,79),
     "100 IM" => new BestTime($Eric_Shi,63.79,$F_RVB_12,5),
     "200 IM" => new BestTime($Eric_Shi,144.20,$Rutgers_13,11),
     "4x50 Freestyle Relay" => new BestRelayTime($Eric_Shi,24.23,$Rutgers_13,11,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Eric_Shi,52.56,$Nats_13,41,2),
     "4x200 Freestyle Relay" => new BestRelayTime($Eric_Shi,118.28    ,$Nats_13,16,1),
     "4x50 Medley Relay" => array(new BestRelayTime($Eric_Shi,30.60,$Nats_13,50,2),
                                    new BestRelayTime($Eric_Shi,24.04,$URI_13,1,4)),
     "4x100 Medley Relay" => new BestRelayTime($Eric_Shi,52.51,$Nats_13,39,4)
));
$Eric_Shi_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Eric_Shi,23.18,$Nats_14,89),
     "100 Freestyle" => new BestTime($Eric_Shi,51.29,$Nats_14,89),
     "200 Freestyle" => new BestTime($Eric_Shi,116.78,$Nats_14,32),
     "50 Breaststroke" => new BestTime($Eric_Shi,30.12,$Nats_14,59),
     "100 Breaststroke" => new BestTime($Eric_Shi,65.92,$Nats_14,55),
     "200 Breaststroke" => new BestTime($Eric_Shi,145.52,$Nats_14,36),
     "50 Butterfly" => new BestTime($Eric_Shi,26.58,$F_RVB_13,6),
     "100 Butterfly" => new BestTime($Eric_Shi,62.00,$Uconn_13,9),
     "100 IM" => new BestTime($Eric_Shi,65.96,$Uconn_13,60),
     "200 IM" => new BestTime($Eric_Shi,141.76,$Nats_14,9),
     "4x50 Freestyle Relay" => new BestRelayTime($Eric_Shi,23.14,$Nats_14,60,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Eric_Shi,50.74,$Nats_14,7,2),
     "4x200 Freestyle Relay" => new BestRelayTime($Eric_Shi,116.78,$Nats_14,32,1),
     "4x50 Medley Relay" => new BestRelayTime($Eric_Shi,29.37,$Uconn_13,2,2),
     "4x100 Medley Relay" => array(new BestRelayTime($Eric_Shi,68.30,$NCCS_13,3,2),
                                     new BestRelayTime($Eric_Shi,50.52,$Nats_14,44,4))
));
$Eric_Shi_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Eric_Shi,22.03,$Nats_15,24),
     "100 Freestyle" => new BestTime($Eric_Shi,48.25,$Nats_15,18),
     "200 Freestyle" => new BestTime($Eric_Shi,119.97,$Harvard_14,7),
     "50 Backstroke" => new BestTime($Eric_Shi,31.81,$Lowell_15,6),
     "50 Breaststroke" => new BestTime($Eric_Shi,29.22,$Nats_15,38),
     "100 Breaststroke" => new BestTime($Eric_Shi,63.04,$Nats_15,28),
     "200 Breaststroke" => new BestTime($Eric_Shi,141.45,$Nats_15,21),
     "50 Butterfly" => new BestTime($Eric_Shi,25.46,$S_RVB_15,1),
     "100 Butterfly" => new BestTime($Eric_Shi,59.62,$Lowell_15,5),
     "200 Butterfly" => new BestTime($Eric_Shi,153.50,$S_RVB_15,5),
     "200 IM" => new BestTime($Eric_Shi,144.80,$F_RVB_14,3),
     "4x50 Freestyle Relay" => new BestRelayTime($Eric_Shi,22.81,$NCCS_14,1,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Eric_Shi,48.86,$Nats_15,8,4,195.39),
     "4x50 Medley Relay" => new BestRelayTime($Eric_Shi,22.01,$S_RVB_15,2,4),
     "4x100 Medley Relay" => new BestRelayTime($Eric_Shi,50.80,$S_RVB_15,1,4)
));
$Eric_Shi_Junior_Season = new Season (
array("50 Freestyle" => new BestTime($Eric_Shi,23.31,$Harvard_15,7),
	  "100 Freestyle" => new BestTime($Eric_Shi,51.55,$Harvard_15,5),
	  "200 Freestyle" => new BestTime($Eric_Shi,117.65,$F_RVB_15,3),
	  "50 Butterfly" => new BestTime($Eric_Shi,25.10,$Harvard_15,2),
    "100 Butterfly" => new BestTime($Eric_Shi,58.25,$F_RVB_15,3),
    "50 Breaststroke" => new BestTime($Eric_Shi,30.22,$RWB_16,3),
    "100 Breaststroke" => new BestTime($Eric_Shi,69.26,$F_RVB_15,3),
    "200 Breaststroke" => new BestTime($Eric_Shi,137.44,$RWB_16,1),
    "100 IM" => new BestTime($Eric_Shi,59.57,$NCCS_15,2),
	  "4x50 Freestyle Relay" => new BestRelayTime($Eric_Shi,23.86,$F_RVB_15,1,1),
	  "4x100 Freestyle Relay" => new BestRelayTime($Eric_Shi,51.91,$F_RVB_15,2,4),
    "4x200 Freestyle Relay" => new BestRelayTime($Eric_Shi,117.51,$RWB_16,2,3),
	  "4x50 Medley Relay" => array(new BestRelayTime($Eric_Shi,22.58,$Harvard_15,2,4),
	  	   new BestRelayTime($Eric_Shi,24.21,$NCCS_15,2,3)),
    "4x100 Medley Relay" => new BestRelayTime($Eric_Shi,51.49,$RWB_16,1,4)
));
$Eric_Shi_Senior_Season = new Season (array());
$Eric_Shi_Career = array($Eric_Shi_Senior_Season,$Eric_Shi_Junior_Season,
                       $Eric_Shi_Middler_Season,$Eric_Shi_Sophomore_Season, $Eric_Shi_Freshman_Season);

/*Max Schineller*/
$Max_Schineller_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Max_Schineller,25.74,$Nats_14,289),
     "100 Freestyle" => new BestTime($Max_Schineller,58.18,$Nats_14,250),
     "50 Breaststroke" => new BestTime($Max_Schineller,36.01,$Princeton_13,15),
     "100 Breaststroke" => new BestTime($Max_Schineller,77.52,$Nats_14,136),
     "4x50 Freestyle Relay" => new BestRelayTime($Max_Schineller,25.81,$NCCS_13,6,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Max_Schineller,60.80,$NCCS_13,4,2)
));
$Max_Schineller_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Max_Schineller,25.44,$Nats_15,297),
     "100 Freestyle" => new BestTime($Max_Schineller,57.51,$Nats_15,252),
     "50 Breaststroke" => new BestTime($Max_Schineller,34.94,$Nats_15,155),
     "100 Breaststroke" => new BestTime($Max_Schineller,76.83,$Nats_15,149),
     "4x50 Freestyle Relay" => new BestRelayTime($Max_Schineller,27.69,$S_RVB_15,3,3),
     "4x50 Medley Relay" => new BestRelayTime($Max_Schineller,26.77,$Harvard_14,6,4)
));
$Max_Schineller_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Max_Schineller,27.08,$F_RVB_15,6),
      "100 Freestyle" => new BestTime($Max_Schineller,61.44,$Harvard_15,26),
      "50 Breaststroke" => new BestTime($Max_Schineller,36.75,$F_RVB_15,7),
      "100 Breaststroke" => new BestTime($Max_Schineller,78.39,$NCCS_15,6),
      "4x50 Freestyle Relay" => new BestRelayTime($Max_Schineller,26.89,$Villanova_15,6,4)
));
$Max_Schineller_Junior_Season = new Season (array());
$Max_Schineller_Senior_Season = new Season (array());
$Max_Schineller_Career = array($Max_Schineller_Senior_Season,$Max_Schineller_Junior_Season,
                       $Max_Schineller_Middler_Season,$Max_Schineller_Sophomore_Season, $Max_Schineller_Freshman_Season);

/*David Thornton*/
$David_Thornton_Freshman_Season = new Season (
array("200 Freestyle" => new BestTime($David_Thornton,109.61,$PSU_15,2),
     "500 Freestyle" => new BestTime($David_Thornton,288.64,$Nats_15,4),
     "1000 Freestyle" => new BestTime($David_Thornton,596.44,$Nats_15,2),
     "1650 Freestyle" => new BestTime($David_Thornton,1041.94,$S_RVB_15,1),
     "100 Breaststroke" =>  new BestTime($David_Thornton,62.94,$Amherst_14,1),
     "200 Breaststroke" => new BestTime($David_Thornton,137.91,$NCCS_14,1),
     "100 IM" => new BestTime($David_Thornton,55.02,$Nats_15,17),
     "200 IM" => new BestTime($David_Thornton,118.28,$Nats_15,6),
     "400 IM" => new BestTime($David_Thornton,247.84,$Nats_15,1),
     "4x50 Freestyle Relay" => new BestRelayTime($David_Thornton,23.37,$Harvard_14,15,2),
     "4x100 Freestyle Relay" => new BestRelayTime($David_Thornton,49.95,$NCCS_14,1,2),
     "4x50 Medley Relay" => new BestRelayTime($David_Thornton,28.76,$NCCS_14,2,2)
));
$David_Thornton_Sophomore_Season = new Season (
array("200 Freestyle" => new BestTime($David_Thornton,108.80,$Villanova_15,1),
    "500 Freestyle" => new BestTime($David_Thornton,296.85,$Villanova_15,1),
    "1650 Freestyle" => new BestTime($David_Thornton,1044.16,$RWB_16,1),
    "50 Breaststroke" => new BestTime($David_Thornton,28.66,$RWB_16,1),
	  "100 Breaststroke" => new BestTime($David_Thornton,62.28,$Villanova_15,1),
    "200 Butterfly" => new BestTime($David_Thornton,119.90,$RWB_16,1),
    "200 IM" => new BestTime($David_Thornton,122.62,$Harvard_15,2),
	  "4x50 Freestyle Relay" => new BestRelayTime($David_Thornton,22.58,$Villanova_15,2,2),
	  "4x100 Freestyle Relay" => new BestRelayTime($David_Thornton,51.68,$F_RVB_15,2,1),
	  "4x50 Medley Relay" => new BestRelayTime($David_Thornton,23.00,$NCCS_15,2,4)
));
$David_Thornton_Middler_Season = new Season (array());
$David_Thornton_Junior_Season = new Season (array());
$David_Thornton_Senior_Season = new Season (array());
$David_Thornton_Career = array($David_Thornton_Senior_Season,$David_Thornton_Junior_Season,
                       $David_Thornton_Middler_Season,$David_Thornton_Sophomore_Season, $David_Thornton_Freshman_Season);

/*Jamie Xie*/
$Jamie_Xie_Freshman_Season = new Season (
array("100 Freestyle" => new BestTime($Jamie_Xie,50.59,$NCCS_14,1),
     "200 Freestyle" => new BestTime($Jamie_Xie,110.84,$Nats_15,37),
     "100 Backstroke" => new BestTime($Jamie_Xie,58.59,$Amherst_14,3),
     "100 Breaststroke" => new BestTime($Jamie_Xie,76.68,$Amherst_14,6),
     "50 Butterfly" => new BestTime($Jamie_Xie,24.80,$Nats_15,47),
     "100 Butterfly" => new BestTime($Jamie_Xie,55.06,$Nats_15,29),
     "100 IM" => new BestTime($Jamie_Xie,57.76,$F_RVB_14,1),
     "4x50 Freestyle Relay" => new BestRelayTime($Jamie_Xie,22.61,$Harvard_14,1,3)
));
$Jamie_Xie_Sophomore_Season = new Season (array());
$Jamie_Xie_Middler_Season = new Season (array());
$Jamie_Xie_Junior_Season = new Season (array());
$Jamie_Xie_Senior_Season = new Season (array());
$Jamie_Xie_Career = array($Jamie_Xie_Senior_Season,$Jamie_Xie_Junior_Season,
                       $Jamie_Xie_Middler_Season,$Jamie_Xie_Sophomore_Season, $Jamie_Xie_Freshman_Season);

/*
//    WOMEN    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/*Casey Abel*/
$Casey_Abel_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Casey_Abel,26.44,$Nats_15,50),
     "100 Freestyle" => new BestTime($Casey_Abel,57.97,$Nats_15,44),
     "50 Butterfly" => new BestTime($Casey_Abel,27.19,$Nats_15,8),
     "100 Butterfly" => new BestTime($Casey_Abel,60.37,$Nats_15,6),
     "200 Butterfly" => new BestTime($Casey_Abel,131.32,$Nats_15,2),
     "100 IM" => new BestTime($Casey_Abel,69.34,$PSU_15,7),
     "4x50 Freestyle Relay" => new BestRelayTime($Casey_Abel,25.85,$Nats_15,3,2,101.47),
     "4x50 Medley Relay" => new BestRelayTime($Casey_Abel,26.42,$Nats_15,10,3,116.15),
     "4x100 Medley Relay" => new BestRelayTime($Casey_Abel,58.96,$Nats_15,5,3,251.84)
));
$Casey_Abel_Sophomore_Season = new Season
(array("50 Freestyle" => new BestTime($Casey_Abel,27.86,$F_RVB_15,5),
      "50 Butterfly" => new BestTime($Casey_Abel,27.98,$Harvard_15,1),
      "100 Butterfly" => new BestTime($Casey_Abel,62.27,$Harvard_15,1),
	  "200 Butterfly" => new BestTime($Casey_Abel,148.09,$Villanova_15,0),
	  "4x50 Freestyle Relay" => new BestRelayTime($Casey_Abel,26.54,$NCCS_15,1,2),
	  "4x50 Medley Relay" => new BestRelayTime($Casey_Abel,27.86,$Villanova_15,4,3)
));
$Casey_Abel_Middler_Season = new Season (array());
$Casey_Abel_Junior_Season = new Season (array());
$Casey_Abel_Senior_Season = new Season (array());

$Casey_Abel_Career = array($Casey_Abel_Senior_Season,$Casey_Abel_Junior_Season,
                       $Casey_Abel_Middler_Season,$Casey_Abel_Sophomore_Season, $Casey_Abel_Freshman_Season);

/*Katie Aldrich*/
$Katie_Aldrich_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Katie_Aldrich,26.30,$Nats_14,7),
     "100 Freestyle" => new BestTime($Katie_Aldrich,55.75,$Nats_14,10),
     "200 Freestyle" => new BestTime($Katie_Aldrich,124.29,$Nats_14,4),
     "50 Backstroke" => new BestTime($Katie_Aldrich,28.92,$Nats_14,4),
     "100 Backstroke" => new BestTime($Katie_Aldrich,61.98,$Nats_14,8),
     "200 Backstroke" => new BestTime($Katie_Aldrich,138.15,$Nats_14,9),
     "100 Breaststroke" => new BestTime($Katie_Aldrich,83.22,$NCCS_13,3),
     "100 IM" => new BestTime($Katie_Aldrich,64.22,$Nats_14,10),
     "4x50 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,26.30,$Nats_14,7,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,56.24,$Nats_14,5,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,124.29,$Nats_14,4,1),
     "4x50 Medley Relay" => new BestRelayTime($Katie_Aldrich,29.42,$Nats_14,13,1),
     "4x100 Medley Relay" => new BestRelayTime($Katie_Aldrich,64.63,$Nats_14,10,1)
));
$Katie_Aldrich_Junior_Season = new Season (
array("50 Freestyle" => new BestTime($Katie_Aldrich,27.86,$PSU_15,0),
     "100 Freestyle" => new BestTime($Katie_Aldrich,60.00,$Amherst_14,5),
     "200 Freestyle" => new BestTime($Katie_Aldrich,128.10,$Lowell_15,1),
     "50 Backstroke" => new BestTime($Katie_Aldrich,30.75,$PSU_15,2),
     "100 Backstroke" => new BestTime($Katie_Aldrich,65.54,$PSU_15,2),
     "200 Backstroke" => new BestTime($Katie_Aldrich,142.85,$S_RVB_15,1),
     "100 Breaststroke" => new BestTime($Katie_Aldrich,84.85,$S_RVB_15,5),
     "50 Butterfly" => new BestTime($Katie_Aldrich,31.29,$F_RVB_14,2),
     "100 IM" => new BestTime($Katie_Aldrich,66.81,$PSU_15,2),
     "200 IM" => new BestTime($Katie_Aldrich,146.50,$Lowell_15,1),
     "4x50 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,27.86,$PSU_15,1,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,55.75,$Nats_15,3,2,221.02),
     "4x200 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,124.98,$Nats_15,2,2,490.66),
     "4x50 Medley Relay" => new BestRelayTime($Katie_Aldrich,30.75,$Nats_15,10,1,116.15),
     "4x100 Medley Relay" => new BestRelayTime($Katie_Aldrich,68.43,$Nats_15,5,1,251.84)
));
$Katie_Aldrich_Senior_Season = new Season (
array("100 Freestyle" => new BestTime($Katie_Aldrich,67.52,$NCCS_15,6),
	  "50 Backstroke" => new BestTime($Katie_Aldrich,32.91,$Villanova_15,5),
      "100 Backstroke" => new BestTime($Katie_Aldrich,67.79,$Harvard_15,1),
      "200 Backstroke" => new BestTime($Katie_Aldrich,147.71,$NCCS_15,1),
      "50 Breaststroke" => new BestTime($Katie_Aldrich,38.45,$F_RVB_15,1),
	  "100 Breaststroke" => new BestTime($Katie_Aldrich,84.00,$Harvard_15,7),
	  "100 IM" => new BestTime($Katie_Aldrich,70.75,$Harvard_15,9),
	  "4x50 Freestyle Relay" => new BestRelayTime($Katie_Aldrich,28.97,$Villanova_15,8,4),
	  "4x50 Medley Relay" => new BestRelayTime($Katie_Aldrich,31.24,$Harvard_15,2,1)
));
$Katie_Aldrich_Career = array($Katie_Aldrich_Senior_Season,$Katie_Aldrich_Junior_Season,$Katie_Aldrich_Middler_Season);

/*Carolyn Banak*/
$Carolyn_Banak_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Carolyn_Banak,29.14,$Nats_14,194),
     "100 Freestyle" => new BestTime($Carolyn_Banak,63.70,$Nats_14,140),
     "50 Backstroke" => new BestTime($Carolyn_Banak,35.07,$Nats_14,121),
     "100 Backstroke" => new BestTime($Carolyn_Banak,75.97,$Nats_14,94),
     "50 Butterfly" => new BestTime($Carolyn_Banak,31.61,$Nats_14,106),
     "4x50 Freestyle Relay" => new BestRelayTime($Carolyn_Banak,29.82,$NCCS_13,8,4),
     "4x50 Medley Relay" => new BestRelayTime($Carolyn_Banak,38.58,$NCCS_13,6,1)
));
$Carolyn_Banak_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Carolyn_Banak,30.28,$Lowell_15,6),
     "100 Freestyle" => new BestTime($Carolyn_Banak,67.06,$Harvard_14,12),
     "50 Backstroke" => new BestTime($Carolyn_Banak,36.69,$NCCS_14,7),
     "100 Backstroke" => new BestTime($Carolyn_Banak,77.88,$Harvard_14,9),
     "50 Butterfly" => new BestTime($Carolyn_Banak,31.98,$Harvard_14,6),
     "100 IM" => new BestTime($Carolyn_Banak,144.01,$Nats_15,258),
     "4x50 Freestyle Relay" => new BestRelayTime($Carolyn_Banak,29.53,$Harvard_14,12,4),
     "4x50 Medley Relay" => array(new BestRelayTime($Carolyn_Banak,36.69,$NCCS_14,7,1),
                                    new BestRelayTime($Carolyn_Banak,32.23,$Harvard_14,12,3))
));
$Carolyn_Banak_Middler_Season = new Season
(array("50 Freestyle" => new BestTime($Carolyn_Banak,31.33,$NCCS_15,7),
	   "100 Freestyle" => new BestTime($Carolyn_Banak,65.80,$Harvard_15,19),
       "50 Butterfly" => new BestTime($Carolyn_Banak,34.24,$Harvard_15,15),
       "100 IM" => new BestTime($Carolyn_Banak,80.25,$NCCS_15,5),
	   "4x50 Freestyle Relay" => new BestRelayTime($Carolyn_Banak,29.84,$Harvard_15,9,4)
));
$Carolyn_Banak_Junior_Season = new Season (array());
$Carolyn_Banak_Senior_Season = new Season (array());

$Carolyn_Banak_Career = array($Carolyn_Banak_Senior_Season,$Carolyn_Banak_Junior_Season,
                       $Carolyn_Banak_Middler_Season,$Carolyn_Banak_Sophomore_Season, $Carolyn_Banak_Freshman_Season);


/*Emily Barlow*/
$Emily_Barlow_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Emily_Barlow,29.36,$Lowell_15,4),
     "100 Freestyle" => new BestTime($Emily_Barlow,63.59,$Nats_15,151),
     "200 Freestyle" => new BestTime($Emily_Barlow,139.31,$Nats_15,75),
     "50 Breaststroke" => new BestTime($Emily_Barlow,38.11,$Nats_15,109),
     "100 Breaststroke" => new BestTime($Emily_Barlow,82.68,$Nats_15,96),
     "4x50 Freestyle Relay" => new BestRelayTime($Emily_Barlow,31.50,$S_RVB_15,4,2),
     "4x200 Freestyle Relay" => new BestRelayTime($Emily_Barlow,150.44,$S_RVB_15,2,3),
     "4x100 Medley Relay" => new BestRelayTime($Emily_Barlow,87.75,$S_RVB_15,1,2)
));
$Emily_Barlow_Sophomore_Season = new Season (
array("200 Freestyle" => new BestTime($Emily_Barlow,146.91,$NCCS_15,5),
      "50 Breaststroke" => new BestTime($Emily_Barlow,39.96,$Harvard_15,12),
	  "100 Breaststroke" => new BestTime($Emily_Barlow,86.81,$Harvard_15,10),
	  "4x50 Freestyle Relay" => new BestRelayTime($Emily_Barlow,30.13,$Harvard_15,6,3),
	  "4x50 Medley Relay" => new BestRelayTime($Emily_Barlow,39.64,$NCCS_15,3,2)
));
$Emily_Barlow_Middler_Season = new Season (array());
$Emily_Barlow_Junior_Season = new Season (array());
$Emily_Barlow_Senior_Season = new Season (array());

$Emily_Barlow_Career = array($Emily_Barlow_Senior_Season,$Emily_Barlow_Junior_Season,
                       $Emily_Barlow_Middler_Season,$Emily_Barlow_Sophomore_Season, $Emily_Barlow_Freshman_Season);


/*Halle Berger*/
$Halle_Berger_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Halle_Berger,32.92,$Nats_15,391),
     "100 Freestyle" => new BestTime($Halle_Berger,72.41,$Nats_15,274),
     "50 Breaststroke" => new BestTime($Halle_Berger,41.00,$NCCS_14,16),
     "100 Breaststroke" => new BestTime($Halle_Berger,92.22,$Amherst_14,7),
     "100 IM" => new BestTime($Halle_Berger,85.74,$NCCS_14,23),
     "4x50 Freestyle Relay" => new BestRelayTime($Halle_Berger,35.39,$S_RVB_15,4,1),
     "4x50 Medley Relay" => array(new BestRelayTime($Halle_Berger,44.19,$PSU_15,21,2),
                                    new BestRelayTime($Halle_Berger,42.99,$NCCS_14,8,3))
));
$Halle_Berger_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Halle_Berger,33.13,$Villanova_15,42),
      "50 Breaststroke" => new BestTime($Halle_Berger,44.05,$Harvard_15,17),
      "100 Breaststroke" => new BestTime($Halle_Berger,92.97,$Villanova_15,8),
	  "100 IM" => new BestTime($Halle_Berger,86.16,$Villanova_15,20),
	  "4x50 Freestyle Relay" => new BestRelayTime($Halle_Berger,33.93,$NCCS_15,6,3),
	  "4x100 Freestyle Relay" => new BestRelayTime($Halle_Berger,80.64,$F_RVB_15,2,2),
	  "4x50 Medley Relay" => array(new BestRelayTime($Halle_Berger,43.75,$F_RVB_15,3,3),
	 	  new BestRelayTime($Halle_Berger,45.81,$NCCS_15,4,2))
));
$Halle_Berger_Middler_Season = new Season (array());
$Halle_Berger_Junior_Season = new Season (array());
$Halle_Berger_Senior_Season = new Season (array());

$Halle_Berger_Career = array($Halle_Berger_Senior_Season,$Halle_Berger_Junior_Season,
                       $Halle_Berger_Middler_Season,$Halle_Berger_Sophomore_Season, $Halle_Berger_Freshman_Season);

/*Maria Bermudez*/
$Maria_Bermudez_Freshman_Season = new Season (
array("100 Freestyle" => new BestTime($Maria_Bermudez,74.50,$Lowell_15,4),
     "50 Backstroke" => new BestTime($Maria_Bermudez,33.16,$NCCS_14,6),
     "100 Backstroke" => new BestTime($Maria_Bermudez,72.46,$NCCS_14,5),
     "200 Backstroke" => new BestTime($Maria_Bermudez,155.17,$Nats_15,47),
     "50 Breaststroke" => new BestTime($Maria_Bermudez,39.42,$NCCS_14,12),
     "100 Breaststroke" => new BestTime($Maria_Bermudez,81.70,$Nats_15,86),
     "100 IM" => new BestTime($Maria_Bermudez,76.08,$Harvard_14,15),
     "4x50 Medley Relay" => array(new BestRelayTime($Maria_Bermudez,34.09,$Harvard_14,4,1),
                                    new BestRelayTime($Maria_Bermudez,31.55,$S_RVB_15,2,3))
));
$Maria_Bermudez_Sophomore_Season = new Season (array());
$Maria_Bermudez_Middler_Season = new Season (array());
$Maria_Bermudez_Junior_Season = new Season (array());
$Maria_Bermudez_Senior_Season = new Season (array());

$Maria_Bermudez_Career = array($Maria_Bermudez_Senior_Season,$Maria_Bermudez_Junior_Season,
                       $Maria_Bermudez_Middler_Season,$Maria_Bermudez_Sophomore_Season, $Maria_Bermudez_Freshman_Season);


/*Allison Bloom*/
$Allison_Bloom_Freshman_Season = new Season (
array("50 Breaststroke" => new BestTime($Allison_Bloom,36.80,$Harvard_15,6),
      "100 Breaststroke" => new BestTime($Allison_Bloom,80.77,$Harvard_15,4),
      "100 IM" => new BestTime($Allison_Bloom,77.22,$Harvard_15,23),
	  "4x50 Freestyle Relay" => new BestRelayTime($Allison_Bloom,31.43,$F_RVB_15,5,3),
	  "4x50 Medley Relay" => new BestRelayTime($Allison_Bloom,35.47,$Harvard_15,2,2)
));
$Allison_Bloom_Sophomore_Season = new Season (array());
$Allison_Bloom_Middler_Season = new Season (array());
$Allison_Bloom_Junior_Season = new Season (array());
$Allison_Bloom_Senior_Season = new Season (array());

$Allison_Bloom_Career = array($Allison_Bloom_Senior_Season,$Allison_Bloom_Junior_Season,
                       $Allison_Bloom_Middler_Season,$Allison_Bloom_Sophomore_Season, $Allison_Bloom_Freshman_Season);

/*Eleanor Broadbent*/
$Eleanor_Broadbent_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Eleanor_Broadbent,28.26,$F_RVB_12,2),
      "50 Butterfly" => new BestTime($Eleanor_Broadbent,30.47,$Amherst_12,4),
      "50 Backstroke" => new BestTime($Eleanor_Broadbent,31.41,$Princeton_12,4),
      "100 Backstroke" => new BestTime($Eleanor_Broadbent,68.71,$Amherst_12,4)
));
$Eleanor_Broadbent_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Eleanor_Broadbent,33.66,$F_RVB_13,9),
     "50 Backstroke" => new BestTime($Eleanor_Broadbent,32.87,$F_RVB_13,3)
));
$Eleanor_Broadbent_Middler_Season = new Season (
array());
$Eleanor_Broadbent_Career = array($Eleanor_Broadbent_Middler_Season,$Eleanor_Broadbent_Sophomore_Season,$Eleanor_Broadbent_Freshman_Season);

/*Eileen Butler*/
$Eileen_Butler_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Eileen_Butler,26.10,$Nats_14,21),
     "50 Backstroke" => new BestTime($Eileen_Butler,33.06,$Princeton_13,6),
     "50 Breaststroke" => new BestTime($Eileen_Butler,34.25,$Nats_14,21),
     "100 Breaststroke" => new BestTime($Eileen_Butler,75.33,$Nats_14,28),
     "200 Breaststroke" => new BestTime($Eileen_Butler,163.97,$Nats_14,18),
     "50 Butterfly" => new BestTime($Eileen_Butler,28.67,$Nats_14,24),
     "100 Butterfly" => new BestTime($Eileen_Butler,70.69,$Harvard_13,7),
     "100 IM" => new BestTime($Eileen_Butler,72.99,$Harvard_13,15),
     "200 IM" => new BestTime($Eileen_Butler,146.24,$F_RVB_13,2),
     "4x50 Freestyle Relay" => new BestRelayTime($Eileen_Butler,25.61,$Nats_14,7,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Eileen_Butler,56.79,$Nats_14,5,3),
     "4x50 Medley Relay" => array(new BestRelayTime($Eileen_Butler,33.06,$Princeton_13,6,1),
                                   new BestRelayTime($Eileen_Butler,33.82,$Nats_14,13,2)),
     "4x100 Medley Relay" => new BestRelayTime($Eileen_Butler,74.66,$Nats_14,10,2)
));
$Eileen_Butler_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Eileen_Butler,27.75,$F_RVB_14,3),
     "50 Breaststroke" => new BestTime($Eileen_Butler,36.22,$Harvard_14,8),
     "100 Breaststroke" => new BestTime($Eileen_Butler,79.65,$Harvard_14,10),
     "200 Breaststroke" => new BestTime($Eileen_Butler,181.00,$S_RVB_15,3),
     "50 Butterfly" => new BestTime($Eileen_Butler,31.78,$S_RVB_15,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Eileen_Butler,27.56,$PSU_15,13,3),
     "4x50 Medley Relay" => new BestRelayTime($Eileen_Butler,34.47,$Nats_15,10,2,116.15),
     "4x100 Medley Relay" => new BestRelayTime($Eileen_Butler,76.40,$Nats_15,5,2,251.84)

));
$Eileen_Butler_Middler_Season = new Season (array());
$Eileen_Butler_Junior_Season = new Season (array());
$Eileen_Butler_Senior_Season = new Season (array());

$Eileen_Butler_Career = array($Eileen_Butler_Senior_Season,$Eileen_Butler_Junior_Season,
                       $Eileen_Butler_Middler_Season,$Eileen_Butler_Sophomore_Season, $Eileen_Butler_Freshman_Season);

/*Nancy Chen*/
$Nancy_Chen_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Nancy_Chen,29.27,$Rutgers_14,23),
     "100 Freestyle" => new BestTime($Nancy_Chen,63.89,$Nats_14,145),
     "200 Freestyle" => new BestTime($Nancy_Chen,138.98,$Princeton_13,8),
     "500 Freestyle" => new BestTime($Nancy_Chen,379.13,$Uconn_13,6),
     "1000 Freestyle" => new BestTime($Nancy_Chen,797.51,$NCCS_13,3),
     "100 Backstroke" => new BestTime($Nancy_Chen,84.09,$Uconn_13,7),
     "50 Breaststroke" => new BestTime($Nancy_Chen,38.41,$Harvard_13,8),
     "100 Breaststroke" => new BestTime($Nancy_Chen,82.59,$Harvard_13,9),
     "200 Breaststroke" => new BestTime($Nancy_Chen,181.15,$Uconn_13,1),
     "200 IM" => new BestTime($Nancy_Chen,169.23,$NCCS_13,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Nancy_Chen,28.11,$NCCS_13,4,4),
     "4x100 Freestyle Relay" => new BestRelayTime($Nancy_Chen,63.66,$NCCS_13,3,4),
     "4x50 Medley Relay" => new BestRelayTime($Nancy_Chen,38.73,$Uconn_13,6,2),
));
$Nancy_Chen_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Nancy_Chen,29.16,$Amherst_14,13),
     "100 Freestyle" => new BestTime($Nancy_Chen,64.93,$Amherst_14,6),
     "500 Freestyle" => new BestTime($Nancy_Chen,412.07,$F_RVB_14,5),
     "50 Backstroke" => new BestTime($Nancy_Chen,40.44,$S_RVB_15,3),
     "50 Breaststroke" => new BestTime($Nancy_Chen,39.95,$Nats_15,138),
     "100 Breaststroke" => new BestTime($Nancy_Chen,86.80,$Nats_15,126),
     "100 IM" => new BestTime($Nancy_Chen,78.08,$NCCS_14,16),
     "4x50 Freestyle Relay" => new BestRelayTime($Nancy_Chen,31.39,$S_RVB_15,2,1),
     "4x50 Medley Relay" => array(new BestRelayTime($Nancy_Chen,41.12,$S_RVB_15,1,2),
                             new BestRelayTime($Nancy_Chen,39.41,$Harvard_14,12,3))
));
$Nancy_Chen_Middler_Season = new Season (
array("50 Freestyle" => new BestTime($Nancy_Chen,31.19,$Vilanova_15,30),
      "50 Breaststroke" => new BestTime($Nancy_Chen,41.62,$F_RVB_15,3),
      "100 IM" => new BestTime($Nancy_Chen,85.66,$NCCS_15,8),
	  "4x50 Freestyle Relay" => new BestRelayTime($Nancy_Chen,30.89,$F_RVB_15,4,3),
	  "4x50 Medley Relay" => array(new BestRelayTime($Nancy_Chen,41.11,$Vilanova_15,11,2),
	 	   new BestRelayTime($Nancy_Chen,34.56,$NCCS_15,4,4))
));
$Nancy_Chen_Junior_Season = new Season (array());
$Nancy_Chen_Senior_Season = new Season (array());

$Nancy_Chen_Career = array($Nancy_Chen_Senior_Season,$Nancy_Chen_Junior_Season,
                       $Nancy_Chen_Middler_Season,$Nancy_Chen_Sophomore_Season, $Nancy_Chen_Freshman_Season);


/*Claire Depew*/
$Claire_Depew_Senior_Season = new Season (
array("100 Freestyle" => new BestTime($Claire_Depew,64.87,$Harvard_15,17),
     "200 Freestyle" => new BestTime($Claire_Depew,149.99,$F_RVB_15,6),
	 "500 Freestyle" => new BestTime($Claire_Depew,383.27,$Harvard_15,6),
     "100 Backstroke" => new BestTime($Claire_Depew,140.25,$F_RVB_15,5),
	 "4x50 Medley Relay" => new BestRelayTime($Claire_Depew,29.89,$F_RVB_15,3,4)
));
$Claire_Depew_Career = array($Claire_Depew_Senior_Season);

/*Hanalei Fong*/
$Hanalei_Fong_Freshman_Season = new Season (
array("50 Backstroke" => new BestTime($Hanalei_Fong,33.38,$Harvard_15,4),
      "100 Backstroke" => new BestTime($Hanalei_Fong,75.66,$F_RVB_15,2),
      "50 Breaststroke" => new BestTime($Hanalei_Fong,38.43,$Harvard_15,8),
      "100 Breaststroke" => new BestTime($Hanalei_Fong,84.10,$F_RVB_15,3),
      "50 Butterfly" => new BestTime($Hanalei_Fong,32.55,$NCCS_15,3),
      "100 IM" => new BestTime($Hanalei_Fong,72.36,$Harvard_15,15),
      "4x50 Freestyle Relay" => new BestRelayTime($Hanalei_Fong,27.93,$NCCS_15,1,3),
	  "4x50 Medley Relay" => array(new BestRelayTime($Hanalei_Fong,31.64,$NCCS_15,2,3),
	  	   new BestRelayTime($Hanalei_Fong, 27.64, $Harvard_15,10,4))
));
$Hanalei_Fong_Sophomore_Season = new Season (array());
$Hanalei_Fong_Middler_Season = new Season (array());
$Hanalei_Fong_Junior_Season = new Season (array());
$Hanalei_Fong_Senior_Season = new Season (array());

$Hanalei_Fong_Career = array($Hanalei_Fong_Senior_Season,$Hanalei_Fong_Junior_Season,
                       $Hanalei_Fong_Middler_Season,$Hanalei_Fong_Sophomore_Season, $Hanalei_Fong_Freshman_Season);


/*Bailey Fritzinger*/
$Bailey_Fritzinger_Freshman_Season = new Season (
array("50 Freestyle" => new BestTime($Bailey_Fritzinger,28.88,$Nats_15,204),
     "200 Freestyle" => new BestTime($Bailey_Fritzinger,141.32,$Nats_15,85),
     "50 Backstroke" => new BestTime($Bailey_Fritzinger,35.64,$Nats_15,149),
     "200 Backstroke" => new BestTime($Bailey_Fritzinger,173.90,$S_RVB_15,5),
     "100 IM" => new BestTime($Bailey_Fritzinger,75.24,$Nats_15,184),
     "4x50 Freestyle Relay" => new BestRelayTime($Bailey_Fritzinger,28.94,$NCCS_14,8,2),
     "4x50 Medley Relay" => new BestRelayTime($Bailey_Fritzinger,28.57,$Harvard_14,12,4)
));
$Bailey_Fritzinger_Sophomore_Season = new Season (
array("50 Freestyle" => new BestTime($Bailey_Fritzinger,29.53,$NCCS_15,6),
      "200 Freestyle" => new BestTime($Bailey_Fritzinger,144.61,$NCCS_15,3),
      "50 Backstroke" => new BestTime($Bailey_Fritzinger,36.41,$NCCS_15,4),
	  "100 IM" => new BestTime($Bailey_Fritzinger,77.76,$Harvard_15,24),
	  "4x50 Free Relay" => new BestRelayTime($Bailey_Fritzinger,29.87,$Harvard_15,6,1)
));
$Bailey_Fritzinger_Middler_Season = new Season (array());
$Bailey_Fritzinger_Junior_Season = new Season (array());
$Bailey_Fritzinger_Senior_Season = new Season (array());

$Bailey_Fritzinger_Career = array($Bailey_Fritzinger_Senior_Season,$Bailey_Fritzinger_Junior_Season,
                       $Bailey_Fritzinger_Middler_Season,$Bailey_Fritzinger_Sophomore_Season, $Bailey_Fritzinger_Freshman_Season);

$Stephanie_Gee_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Stephanie_Gee,28.10,$Rutgers_13,6),
     "100 Freestyle" => new BestTime($Stephanie_Gee,57.43,$Nats_13,18),
     "200 Freestyle" => new BestTime($Stephanie_Gee,122.77,$Nats_13,9),
     "500 Freestyle" => new BestTime($Stephanie_Gee,325.29,$Nats_13,3),
     "200 Backstroke" => new BestTime($Stephanie_Gee,143.79,$Nats_13,15),
     "50 Butterfly" => new BestTime($Stephanie_Gee,30.23,$NCCS_12,4),
     "100 IM" => new BestTime($Stephanie_Gee,69.14,$Swim_Bunny_13,3),
     "200 IM" => new BestTime($Stephanie_Gee,140.71,$Nats_13,13),
     "4x50 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,27.73,$Princeton_12,5,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,59.25,$Swim_Bunny_13,1,1),
     "4x50 Medley Relay" => new BestRelayTime($Stephanie_Gee,29.54,$S_RVB_13,1,3)

));

$Stephanie_Gee_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Stephanie_Gee,26.94,$Rutgers_14,3),
     "100 Freestyle" => new BestTime($Stephanie_Gee,57.15,$Princeton_13,2),
     "200 Freestyle" => new BestTime($Stephanie_Gee,121.86,$Nats_14,6),
     "500 Freestyle" => new BestTime($Stephanie_Gee,325.25,$Nats_14,5),
     "1000 Freestyle" => new BestTime($Stephanie_Gee,668.93,$Nats_14,3),
     "100 Butterfly" => new BestTime($Stephanie_Gee,62.67,$Nats_14,10),
     "100 IM" => new BestTime($Stephanie_Gee,66.49,$Princeton_13,3),
     "200 IM" => new BestTime($Stephanie_Gee,150.43,$UVM_14,1),
     "400 IM" => new BestTime($Stephanie_Gee,295.32,$Nats_14,5),
     "4x50 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,26.21,$Nats_14,7,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,56.66,$Nats_14,5,2),
     "4x50 Medley Relay" => new BestRelayTime($Stephanie_Gee,26.43,$Rutgers_14,2,4)

));

$Stephanie_Gee_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Stephanie_Gee,25.43,$Nats_15,7),
     "100 Freestyle" => new BestTime($Stephanie_Gee,59.73,$Harvard_14,3),
     "200 Freestyle" => new BestTime($Stephanie_Gee,120.52,$Nats_15,15),
     "500 Freestyle" => new BestTime($Stephanie_Gee,320.86,$Nats_15,8),
     "1000 Freestyle" => new BestTime($Stephanie_Gee,662.67,$Nats_15,11),
     "1650 Freestyle" => new BestTime($Stephanie_Gee,1192.42,$S_RVB_15,7),
     "200 Backstroke" => new BestTime($Stephanie_Gee,154.01,$S_RVB_15,3),
     "50 Butterfly" => new BestTime($Stephanie_Gee,28.96,$Nats_15,40),
     "100 Butterfly" => new BestTime($Stephanie_Gee,66.64,$F_RVB_14,1),
     "100 IM" => new BestTime($Stephanie_Gee,65.76,$Nats_15,20),
     "4x50 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,25.43,$Nats_15,3,1,101.47),
     "4x100 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,55.39,$Nats_15,3,1,221.02),
     "4x200 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,120.75,$Nats_15,2,1,490.66)

));

$Stephanie_Gee_Senior_Season = new Season (array
	("50 Freestyle" => new BestTime($Stephanie_Gee,27.07,$Villanova_15,5),
	"100 Freestyle" => new BestTime($Stephanie_Gee,60.11,$Harvard_15,8),
	"500 Freestyle" => new BestTime($Stephanie_Gee,343.63,$Villanova_15,2),
	"100 Backstroke" => new BestTime(Stephanie_Gee, 72.80,$Villanova_15,8),
	"50 Butterfly" => new BestTime($Stephanie_Gee,30.52,$Harvard_15,8),
	"4x50 Freestyle Relay" => new BestRelayTime($Stephanie_Gee,27.01,$Villanova_15,2,3),
	"4x50 Medley Relay" => array(new BestRelayTime($Stephanie_Gee,29.29,$Villanova_15,5,3),
	                               new BestRelayTime($Stephanie_Gee,26.88,$Harvard_15,9,4))

));


$Stephanie_Gee_Career = array($Stephanie_Gee_Senior_Season,$Stephanie_Gee_Junior_Season,
                       $Stephanie_Gee_Middler_Season,$Stephanie_Gee_Sophomore_Season, $Stephanie_Gee_Freshman_Season);


/*Julia Hannigan*/

$Julia_Hannigan_Freshman_Season = new Season (

array("200 Freestyle" => new BestTime($Julia_Hannigan,138.72,$Nats_12,43),
     "500 Freestyle" => new BestTime($Julia_Hannigan,370.38,$Nats_12,32),
     "50 Backstroke" => new BestTime($Julia_Hannigan,36.36,$Nats_12,112),
     "50 Butterfly" => new BestTime($Julia_Hannigan,33.76,$Nats_12,151)
));

$Julia_Hannigan_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Julia_Hannigan,32.72,$S_RVB_13,0),
     "200 Freestyle" => new BestTime($Julia_Hannigan,144.33,$Swim_Bunny_13,8),
     "500 Freestyle" => new BestTime($Julia_Hannigan,391.70,$NCCS_13,6),
     "50 Backstroke" => new BestTime($Julia_Hannigan,36.69,$S_RVB_13,0),
     "50 Butterfly" => new BestTime($Julia_Hannigan,34.10,$Swim_Bunny_13,10),
     "4x50 Freestyle Relay" => new BestRelayTime($Julia_Hannigan,32.72,$S_RVB_13,2,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Julia_Hannigan,67.11,$Rutgers_13,2,2),
     "4x50 Medley Relay" => new BestRelayTime($Julia_Hannigan,36.69,$S_RVB_13,2,1),

));

$Julia_Hannigan_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Julia_Hannigan,29.7,$Uconn_13,0),
     "100 Freestyle" => new BestTime($Julia_Hannigan,65.10,$Uconn_13,0),
     "200 Freestyle" => new BestTime($Julia_Hannigan,137.90,$Nats_14,69),
     "500 Freestyle" => new BestTime($Julia_Hannigan,365.63,$Nats_14,38),
     "1000 Freestyle" => new BestTime($Julia_Hannigan,748.27,$Nats_14,27),
     "50 Backstroke" => new BestTime($Julia_Hannigan,35.78,$UVM_14,6),
     "100 Backstroke" => new BestTime($Julia_Hannigan,77.02,$NCCS_13,0),
     "50 Butterfly" => new BestTime($Julia_Hannigan,33.51,$NCCS_13,15),
     "4x50 Freestyle Relay" => new BestRelayTime($Julia_Hannigan,29.66,$Rutgers_14,14,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Julia_Hannigan,65.10,$Uconn_13,6,1),
     "4x50 Medley Relay" => new BestRelayTime($Julia_Hannigan,35.96,$Uconn_13,6,1),
     "4x100 Medley Relay" => new BestRelayTime($Julia_Hannigan,77.02,$NCCS_13,2,1)

));

$Julia_Hannigan_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Julia_Hannigan,31.13,$S_RVB_15,3),
     "200 Freestyle" => new BestTime($Julia_Hannigan,135.89,$Nats_15,60),
     "500 Freestyle" => new BestTime($Julia_Hannigan,373.12,$Nats_15,55),
     "1000 Freestyle" => new BestTime($Julia_Hannigan,771.11,$Nats_15,29),
     "50 Backstroke" => new BestTime($Julia_Hannigan,35.34,$Nats_15,141),
     "4x100 Freestyle Relay" => new BestRelayTime($Julia_Hannigan,65.52,$NCCS_14,5,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Julia_Hannigan,144.62,$S_RVB_15,2,4),

));

$Julia_Hannigan_Senior_Season = new Season (

array("200 Freestyle" => new BestTime($Julia_Hannigan,143.72,$NCCS_15,6),
      "50 Backstroke" => new BestTime($Julia_Hannigan,37.24,$Villanova_15,18),
	  "4x50 Freestyle Relay" => array(new BestRelayTime($Julia_Hannigan,31.46,$F_RVB_15,6,1),
	                                    new BestRelayTime($Julia_Hannigan,30.82,$Villanova_15,14,4))
));


$Julia_Hannigan_Career = array($Julia_Hannigan_Senior_Season,$Julia_Hannigan_Junior_Season,
                       $Julia_Hannigan_Middler_Season,$Julia_Hannigan_Sophomore_Season, $Julia_Hannigan_Freshman_Season);


/*Alexis Laundry*/

$Alexis_Laundry_Freshman_Season = new Season (

array("100 Freestyle" => new BestTime($Alexis_Laundry, 66.67, $Villanova_15,11),
	 "200 Freestyle" => new BestTime($Alexis_Laundry,141.15,$NCCS_15,3),
     "50 Backstroke" => new BestTime($Alexis_Laundry,33.81,$NCCS_15,1),
	 "100 Backstroke" => new BestTime($Alexis_Laundry,72.78,$Villanova_15,7),
	 "4x50 Freestyle Relay" => new BestRelayTime($Alexis_Laundry,29.28,$F_RVB_15,2,3),
	 "4x100 Freestyle Relay" => new BestRelayTime($Alexis_Laundry,68.28,$F_RVB_15,2,4),
	 "4x50 Medley Relay" => new BestRelayTime($Alexis_Laundry,28.89,$NCCS_15,3,4)

));

$Alexis_Laundry_Sophomore_Season = new Season (array());

$Alexis_Laundry_Middler_Season = new Season (array());

$Alexis_Laundry_Junior_Season = new Season (array());

$Alexis_Laundry_Senior_Season = new Season (array());


$Alexis_Laundry_Career = array($Alexis_Laundry_Senior_Season,$Alexis_Laundry_Junior_Season,
                       $Alexis_Laundry_Middler_Season,$Alexis_Laundry_Sophomore_Season, $Alexis_Laundry_Freshman_Season);


/*Morgan Lenney*/

$Morgan_Lenney_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Morgan_Lenney,27.89,$NCCS_14,5),
     "100 Freestyle" => new BestTime($Morgan_Lenney,62.07,$PSU_15,7),
     "50 Backstroke" => new BestTime($Morgan_Lenney,31.93,$Nats_15,63),
     "100 Backstroke" => new BestTime($Morgan_Lenney,68.95,$Nats_15,71),
     "200 Backstroke" => new BestTime($Morgan_Lenney,145.32,$Nats_15,24),
     "100 IM" => new BestTime($Morgan_Lenney,68.46,$Nats_15,63),
     "200 IM" => new BestTime($Morgan_Lenney,151.07,$Nats_15,39),
     "4x50 Freestyle Relay" => new BestRelayTime($Morgan_Lenney,27.79,$S_RVB_15,3,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Morgan_Lenney,141.50,$S_RVB_15,2,2),
     "4x50 Medley Relay" => new BestRelayTime($Morgan_Lenney,27.80,$Harvard_14,4,4)

));

$Morgan_Lenney_Sophomore_Season = new Season

(array("50 Freestyle" => new BestTime($Morgan_Lenney,28.35,$Harvard_15,9),
	  "100 Freestyle" => new BestTime($Morgan_Lenney,61.69,$Villanova_15,6),
	  "50 Butterfly" => new BestTime($Morgan_Lenney,32.08,$F_RVB_15,3),
      "50 Backstroke" => new BestTime($Morgan_Lenney,33.43,$Villanova_15,0),
	  "100 Backstroke" => new BestTime($Morgan_Lenney,68.64,$Villanova_15,3),
	  "200 Backstroke" => new BestTime($Morgan_Lenney,150.20,$NCCS_15,2),
      "100 IM" => new BestTime($Morgan_Lenney,70.16,$Villanova_15,4),
	  "4x50 Freestyle Relay" => new BestRelayTime($Morgan_Lenney,27.97,$Villanova_15,2,6),
	  "4x100 Freestyle Relay" => new BestRelayTime($Morgan_Lenney,61.45,$NCCS_15,1,2),
	  "4x50 Medley Relay" => new BestRelayTime($Morgan_Lenney,33.25,$NCCS_15,2,1)

));

$Morgan_Lenney_Middler_Season = new Season (array());

$Morgan_Lenney_Junior_Season = new Season (array());

$Morgan_Lenney_Senior_Season = new Season (array());


$Morgan_Lenney_Career = array($Morgan_Lenney_Senior_Season,$Morgan_Lenney_Junior_Season,
                       $Morgan_Lenney_Middler_Season,$Morgan_Lenney_Sophomore_Season, $Morgan_Lenney_Freshman_Season);


/*Tulia Lieb*/

$Tulia_Lieb_Freshman_Season = new Season (array());

$Tulia_Lieb_Sophomore_Season = new Season (array());

$Tulia_Lieb_Middler_Season = new Season (array());

$Tulia_Lieb_Junior_Season = new Season (array());

$Tulia_Lieb_Senior_Season = new Season (array());


$Tulia_Lieb_Career = array($Tulia_Lieb_Senior_Season,$Tulia_Lieb_Junior_Season,
                       $Tulia_Lieb_Middler_Season,$Tulia_Lieb_Sophomore_Season, $Tulia_Lieb_Freshman_Season);


/*Corinne Lizzio*/

$Corinne_Lizzio_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Corinne_Lizzio,29.43,$Harvard_13,18),
     "50 Breaststroke" => new BestTime($Corinne_Lizzio,40.21,$Uconn_13,10),
     "100 Breaststroke" => new BestTime($Corinne_Lizzio,85.32,$NCCS_13,7),
     "50 Butterfly" => new BestTime($Corinne_Lizzio,32.23,$F_RVB_13,2),
     "100 Butterfly" => new BestTime($Corinne_Lizzio,74.68,$Princeton_13,8),
     "200 Butterfly" => new BestTime($Corinne_Lizzio,179.24,$Uconn_13,1),
     "100 IM" => new BestTime($Corinne_Lizzio,77.26,$Harvard_13,23),
     "4x50 Freestyle Relay" => new BestRelayTime($Corinne_Lizzio,29.77,$Uconn_13,6,4),
     "4x50 Medley Relay" => new BestRelayTime($Corinne_Lizzio,33.36,$F_RVB_13,6,3),

));

$Corinne_Lizzio_Sophomore_Season = new Season

(array("50 Freestyle" => new BestTime($Corinne_Lizzio,29.75,$Amherst_14,15),
     "100 Freestyle" => new BestTime($Corinne_Lizzio,68.05,$NCCS_14,0),
     "50 Backstroke" => new BestTime($Corinne_Lizzio,39.14,$S_RVB_15,0),
     "50 Breaststroke" => new BestTime($Corinne_Lizzio,40.32,$Harvard_14,12),
     "100 Breaststroke" => new BestTime($Corinne_Lizzio,90.65,$Nats_15,134),
     "200 Breaststroke" => new BestTime($Corinne_Lizzio,200.00,$S_RVB_15,5),
     "50 Butterfly" => new BestTime($Corinne_Lizzio,31.06,$Amherst_14,4),
     "100 Butterfly" => new BestTime($Corinne_Lizzio,76.84,$Nats_15,89),
     "100 IM" => new BestTime($Corinne_Lizzio,75.88,$PSU_15,28),
     "4x50 Freestyle Relay" => new BestRelayTime($Corinne_Lizzio,30.60,$S_RVB_15,2,2),
     "4x100 Freestyle Relay" => new BestRelayTime($Corinne_Lizzio,68.05,$NCCS_14,5,1),
     "4x50 Medley Relay" => array(new BestRelayTime($Corinne_Lizzio,39.14,$S_RVB_15,1,1),
                             new BestRelayTime($Corinne_Lizzio,32.36,$NCCS_14,8,3))

));

$Corinne_Lizzio_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Corinne_Lizzio,30.67,$F_RVB_15,6),
     "50 Butterfly" => new BestTime($Corinne_Lizzio,31.90,$Villanova_15,6),
	 "100 Butterfly" => new BestTime($Corinne_Lizzio,78.24,$Villanova_15,3),
	 "50 Breaststroke" => new BestTime($Corinne_Lizzio,41.57,$Harvard_15,15),
     "100 IM" => new BestTime($Corinne_Lizzio,75.88,$NCCS_15,6),
	 "200 IM" => new BestTime($Corinne_Lizzio,168.42,$NCCS_15,2),
	 "4x50 Freestyle Relay" => new BestRelayTime($Corinne_Lizzio,28.98,$Villanova_15,8,2),
	 "4x50 Medley Relay" => array(new BestRelayTime($Corinne_Lizzio,38.47,$F_RVB_15,4,1),
							new BestRelayTime($Corinne_Lizzio,32.20,$NCCS_15,3,3))

));

$Corinne_Lizzio_Junior_Season = new Season (array());

$Corinne_Lizzio_Senior_Season = new Season (array());


$Corinne_Lizzio_Career = array($Corinne_Lizzio_Senior_Season,$Corinne_Lizzio_Junior_Season,
                       $Corinne_Lizzio_Middler_Season,$Corinne_Lizzio_Sophomore_Season, $Corinne_Lizzio_Freshman_Season);


/*Katerina Nozhenko*/

$Katerina_Nozhenko_Freshman_Season = new Season (

array("50 Butterfly" => new BestTime($Katerina_Nozhenko,36.19,$NCCS_15,6),
      "100 Butterfly" => new BestTime($Katerina_Nozhenko,85.22,$Harvard_15,8),
	 "100 IM" => new BestTime($Katerina_Nozhenko,81.38,$NCCS_15,7),
	 "4x50 Medley Relay" => new BestRelayTime($Katerina_Nozhenko,35.55,$F_RVB_15,4,3)

));

$Katerina_Nozhenko_Sophomore_Season = new Season (array());

$Katerina_Nozhenko_Middler_Season = new Season (array());

$Katerina_Nozhenko_Junior_Season = new Season (array());

$Katerina_Nozhenko_Senior_Season = new Season (array());


$Katerina_Nozhenko_Career = array($Katerina_Nozhenko_Senior_Season,$Katerina_Nozhenko_Junior_Season,
                       $Katerina_Nozhenko_Middler_Season,$Katerina_Nozhenko_Sophomore_Season, $Katerina_Nozhenko_Freshman_Season);


/*Maya Philbrick*/

$Maya_Philbrick_Freshman_Season = new Season (

array("500 Freestyle" => new BestTime($Maya_Philbrick,379.95,$PSU_15,6),
     "1000 Freestyle" => new BestTime($Maya_Philbrick,804.67,$S_RVB_15,5),
     "100 Breaststroke" => new BestTime($Maya_Philbrick,79.78,$Nats_15,71),
     "200 Breaststroke" => new BestTime($Maya_Philbrick,168.79,$Nats_15,30),
     "100 IM" => new BestTime($Maya_Philbrick,71.92,$Nats_15,127),
     "200 IM" => new BestTime($Maya_Philbrick,155.25,$Nats_15,51),
     "4x100 Freestyle Relay" => new BestRelayTime($Maya_Philbrick,68.81,$NCCS_14,5,2),
     "4x200 Freestyle Relay" => new BestRelayTime($Maya_Philbrick,144.39,$S_RVB_15,1,2)

));

$Maya_Philbrick_Sophomore_Season = new Season (

array("500 Freestyle" => new BestTime($Maya_Philbrick,374.98,$Villanova_15,7),
	 "100 Backstroke" => new BestTime($Maya_Philbrick,76.94,$Villanova_15,13),
	 "50 Breaststroke" => new BestTime($Maya_Philbrick,36.61,$Villanova_15,6),
	 "100 Breaststroke" => new BestTime($Maya_Philbrick,83.98,$F_RVB_15,2),
	 "200 Breaststroke" => new BestTime($Maya_Philbrick,173.70,$NCCS_15,1),
     "100 IM" => new BestTime($Maya_Philbrick,76.91,$F_RVB_15,6),
	 "200 IM" => new BestTime($Maya_Philbrick,159.32,$Harvard_15,10),
	 "4x100 Freestyle Relay" => new BestRelayTime($Maya_Philbrick,69.95,$F_RVB_15,1,2),
	 "4x50 Medley Relay" => new BestRelayTime($Maya_Philbrick,35.58,$Villanova_15,5,2)

));

$Maya_Philbrick_Middler_Season = new Season (array());

$Maya_Philbrick_Junior_Season = new Season (array());

$Maya_Philbrick_Senior_Season = new Season (array());


$Maya_Philbrick_Career = array($Maya_Philbrick_Senior_Season,$Maya_Philbrick_Junior_Season,
                       $Maya_Philbrick_Middler_Season,$Maya_Philbrick_Sophomore_Season, $Maya_Philbrick_Freshman_Season);


/*Samantha Pinkes*/

$Samantha_Pinkes_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Samantha_Pinkes,25.71,$Nats_15,15),
     "100 Freestyle" => new BestTime($Samantha_Pinkes,56.32,$Nats_15,20),
     "200 Freestyle" => new BestTime($Samantha_Pinkes,128.61,$Nats_15,36),
     "4x50 Freestyle Relay" => new BestRelayTime($Samantha_Pinkes,25.24,$Nats_15,3,3,101.47),
     "4x100 Freestyle Relay" => new BestRelayTime($Samantha_Pinkes,55.48,$Nats_15,3,3,221.02),
     "4x200 Freestyle Relay" => new BestRelayTime($Samantha_Pinkes,122.69,$Nats_15,2,3,490.66),
     "4x50 Medley Relay" => new BestRelayTime($Samantha_Pinkes,25.76,$Nats_15,10,4,116.15)

));

$Samantha_Pinkes_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Samantha_Pinkes,26.56,$Villanova_15,2),
     "100 Freestyle" => new BestTime($Samantha_Pinkes,58.86,$Villanova_15,3),
	 "4x50 Freestyle Relay" => new BestRelayTime($Samantha_Pinkes,26.61,$Villanova_15,2,1),
	 "4x100 Freestyle Relay" => new BestRelayTime($Samantha_Pinkes,61.24,$NCCS_15,1,3),
	 "4x50 Medley Relay" => new BestRelayTime($Samantha_Pinkes,26.21,$Villanova_15,5,4)


));

$Samantha_Pinkes_Middler_Season = new Season (array());

$Samantha_Pinkes_Junior_Season = new Season (array());

$Samantha_Pinkes_Senior_Season = new Season (array());


$Samantha_Pinkes_Career = array($Samantha_Pinkes_Senior_Season,$Samantha_Pinkes_Junior_Season,
                       $Samantha_Pinkes_Middler_Season,$Samantha_Pinkes_Sophomore_Season, $Samantha_Pinkes_Freshman_Season);


/*Abby Plummer*/

$Abby_Plummer_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Abby_Plummer,30.99,$Nats_14,284),
     "100 Freestyle" => new BestTime($Abby_Plummer,66.92,$Nats_14,197),
     "50 Backstroke" => new BestTime($Abby_Plummer,33.92,$Rutgers_14,15),
     "100 IM" => new BestTime($Abby_Plummer,80.53,$Nats_14,188),
     "4x50 Freestyle Relay" => new BestRelayTime($Abby_Plummer,32.21,$Rutgers_14,14,1),
     "4x50 Medley Relay" => new BestRelayTime($Abby_Plummer,33.92,$Rutgers_14,15,1)

));

$Abby_Plummer_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Abby_Plummer,31.33,$F_RVB_14,11),
     "100 Freestyle" => new BestTime($Abby_Plummer,69.19,$Nats_15,244),
     "50 Backstroke" => new BestTime($Abby_Plummer,42.78,$Harvard_14,12),
     "100 IM" => new BestTime($Abby_Plummer,82.75,$Nats_15,20),
     "4x50 Medley Relay" => new BestRelayTime($Abby_Plummer,42.78,$Nats_15,12,1)

));

$Abby_Plummer_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Abby_Plummer,32.73,$F_RVB_15,10),
     "100 Freestyle" => new BestTime($Abby_Plummer,71.80,$Harvard_15,25),
     "100 IM" => new BestTime($Abby_Plummer,82.68,$F_RVB_15,8),
	 "4x50 Freestyle Relay" => new BestRelayTime($Abby_Plummer,33.89,$Harvard_15,9,1),
	 "4x50 Medley Relay" => new BestRelayTime($Abby_Plummer,32.27,$F_RVB_15,4,4)

));

$Abby_Plummer_Junior_Season = new Season (array());

$Abby_Plummer_Senior_Season = new Season (array());


$Abby_Plummer_Career = array($Abby_Plummer_Senior_Season,$Abby_Plummer_Junior_Season,
                       $Abby_Plummer_Middler_Season,$Abby_Plummer_Sophomore_Season, $Abby_Plummer_Freshman_Season);

/*Veditha Regulapati*/

$Veditha_Regulapati_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Veditha_Regulapati,28.74,$Villanova_15,11),
     "50 Backstroke" => new BestTime($Veditha_Regulapati,34.61,$Villanova_15,10),
	 "100 Backstroke" => new BestTime($Veditha_Regulapati,74.18,$NCCS_15,2),
	 "4x50 Freestyle Relay" => new BestRelayTime($Veditha_Regulapati,30.23,$NCCS_15,3,5),
     "4x50 Medley Relay" => array(
	 			new BestRelayTime($Veditha_Regulapati,34.81, $Villanova_15,11,1),
				new BestRelayTime($Veditha_Regulapati,39.58,$F_RVB_15,2,2)),

));

$Veditha_Regulapati_Sophomore_Season = new Season (array());

$Veditha_Regulapati_Middler_Season = new Season (array());

$Veditha_Regulapati_Junior_Season = new Season (array());

$Veditha_Regulapati_Senior_Season = new Season (array());


$Veditha_Regulapati_Career = array($Veditha_Regulapati_Senior_Season,$Veditha_Regulapati_Junior_Season,
						$Veditha_Regulapati_Middler_Season,$Veditha_Regulapati_Sophomore_Season,
						$Veditha_Regulapati_Freshman_Season);


/*Alice Renaud*/

$Alice_Renaud_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Alice_Renaud,25.46,$Nats_15,8),
     "100 Freestyle" => new BestTime($Alice_Renaud,55.28,$Nats_15,13,array(4,5,2015)),
     "200 Freestyle" => new BestTime($Alice_Renaud,121.73,$Nats_15,9),
     "100 Backstroke" => new BestTime($Alice_Renaud,68.44,$S_RVB_15,2),
     "100 Breaststroke" => new BestTime($Alice_Renaud,80.57,$Lowell_15,1),
     "50 Butterfly" => new BestTime($Alice_Renaud,28.74,$Amherst_14,2),
     "100 IM" => new BestTime($Alice_Renaud,66.40,$Nats_15,29),
     "200 IM" => new BestTime($Alice_Renaud,144.28,$Harvard_14,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Alice_Renaud,24.95,$Nats_15,3,4,101.47),
     "4x100 Freestyle Relay" => new BestRelayTime($Alice_Renaud,53.97,$Nats_15,3,4,221.02),
     "4x200 Freestyle Relay" => new BestRelayTime($Alice_Renaud,120.13,$Nats_15,2,4,490.66),
     "4x50 Medley Relay" => new BestRelayTime($Alice_Renaud,25.06,$NCCS_14,2,4),
     "4x100 Medley Relay" => new BestRelayTime($Alice_Renaud,54.30,$Nats_15,5,4,251.84)

));

$Alice_Renaud_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Alice_Renaud,26.71,$Harvard_15,2),
     "100 Freestyle" => new BestTime($Alice_Renaud,58.42,$Villanova_15,2),
     "200 Freestyle" => new BestTime($Alice_Renaud,127.33,$Villanova_15,1),
	 "100 IM" => new BestTime($Alice_Renaud,69.97,$Villanova_15,3),
	 "4x50 Freestyle Relay" => new BestRelayTime($Alice_Renaud,26.06,$Villanova_15,2,4),
	 "4x100 Freestyle Relay" => new BestRelayTime($Alice_Renaud,60.49,$NCCS_15,1,4),
	 "4x50 Medley Relay" => new BestRelayTime($Alice_Renaud,26.10,$Harvard_15,2,4)


));

$Alice_Renaud_Middler_Season = new Season (array());

$Alice_Renaud_Junior_Season = new Season (array());

$Alice_Renaud_Senior_Season = new Season (array());


$Alice_Renaud_Career = array($Alice_Renaud_Senior_Season,$Alice_Renaud_Junior_Season,
                       $Alice_Renaud_Middler_Season,$Alice_Renaud_Sophomore_Season, $Alice_Renaud_Freshman_Season);


/*Grace Ronca*/

$Grace_Ronca_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Grace_Ronca,29.24,$NCCS_15,5),
     "100 Freestyle" => new BestTime($Grace_Ronca,63.27,$NCCS_15,4),
     "200 Freestyle" => new BestTime($Grace_Ronca,135.68,$Villanova_15,3),
     "500 Freestyle" => new BestTime($Grace_Ronca,373.51,$Villanova_15,6),
	 "4x50 Freestyle Relay" => new BestRelayTime($Grace_Ronca,29.41,$F_RVB_15,1,2),
	 "4x100 Freestyle Relay" => new BestRelayTime($Grace_Ronca,64.70,$NCCS_15,1,1),
	 "4x50 Medley Relay" => new BestRelayTime($Grace_Ronca,28.63,$Villanova_15,11,4)

));

$Grace_Ronca_Sophomore_Season = new Season (array());

$Grace_Ronca_Middler_Season = new Season (array());

$Grace_Ronca_Junior_Season = new Season (array());

$Grace_Ronca_Senior_Season = new Season (array());


$Grace_Ronca_Career = array($Grace_Ronca_Senior_Season,$Grace_Ronca_Junior_Season,
                       $Grace_Ronca_Middler_Season,$Grace_Ronca_Sophomore_Season, $Grace_Ronca_Freshman_Season);


/*Mara Silka*/

$Mara_Silka_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Mara_Silka,27.78,$Princeton_12,5),
     "100 Freestyle" => new BestTime($Mara_Silka,60.11,$Swim_Bunny_12,4),
     "200 Freestyle" => new BestTime($Mara_Silka,132.53,$F_RVB_12,1),
     "500 Freestyle" => new BestTime($Mara_Silka,349.69,$Princeton_12,8),
     "1000 Freestyle" => new BestTime($Mara_Silka,706.21,$Swim_Bunny_12,1),
     "1650 Freestyle" => new BestTime($Mara_Silka,1179.90,$Swim_Bunny_12,1),
     "50 Backstroke" => new BestTime($Mara_Silka,35.93,$S_RVB_13,1),
     "100 Butterfly" => new BestTime($Mara_Silka,69.23,$Swim_Bunny_12,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Mara_Silka,27.78,$Princeton_12,5,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Mara_Silka,62.65,$Swim_Bunny_12,1,3),
     "4x50 Medley Relay" => array(new BestRelayTime($Mara_Silka,35.93,$S_RVB_13,1,1),
                                   new BestRelayTime($Mara_Silka,27.78,$Swim_Bunny_12,4,4))

));

$Mara_Silka_Junior_Season = new Season (

array("50 Freestyle" => new BestTime($Mara_Silka,29.76,$NCCS_13,13),
     "100 Freestyle" => new BestTime($Mara_Silka,58.88,$Nats_14,44),
     "200 Freestyle" => new BestTime($Mara_Silka,127.59,$Nats_14,21),
     "500 Freestyle" => new BestTime($Mara_Silka,340.07,$Nats_14,13),
     "1000 Freestyle" => new BestTime($Mara_Silka,697.58,$Nats_14,8),
     "1650 Freestyle" => new BestTime($Mara_Silka,1241.72,$NCCS_13,1),
     "50 Butterfly" => new BestTime($Mara_Silka,32.55,$UVM_14,6),
     "100 Butterfly" => new BestTime($Mara_Silka,70.01,$F_RVB_13,2),
     "4x50 Freestyle Relay" => new BestRelayTime($Mara_Silka,27.40,$Princeton_13,2,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Mara_Silka,62.00,$Uconn_13,3,4),
     "4x200 Freestyle Relay" => new BestRelayTime($Mara_Silka,130.09,$Nats_14,4,2),
     "4x50 Medley Relay" => new BestRelayTime($Mara_Silka,27.22,$Uconn_13,3,4)

));

$Mara_Silka_Senior_Season = new Season (

array("50 Freestyle" => new BestTime($Mara_Silka,29.21,$S_RVB_15,4),
     "100 Freestyle" => new BestTime($Mara_Silka,65.19,$Lowell_15,3),
     "500 Freestyle" => new BestTime($Mara_Silka,369.56,$Lowell_15,1),
     "50 Butterfly" => new BestTime($Mara_Silka,31.66,$S_RVB_15,3),
     "100 Butterfly" => new BestTime($Mara_Silka,69.41,$Lowell_15,2),
     "100 IM" => new BestTime($Mara_Silka,75.44,$Lowell_15,5),
     "400 IM" => new BestTime($Mara_Silka,332.00,$S_RVB_15,1),
     "4x200 Freestyle Relay" => new BestRelayTime($Mara_Silka,136.80,$S_RVB_15,1,3)

));


$Mara_Silka_Career = array($Mara_Silka_Senior_Season,$Mara_Silka_Junior_Season,$Mara_Silka_Middler_Season);


/*Katya Stonkevitch*/

$Katya_Stonkevitch_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Katya_Stonkevitch,29.12,$Princeton_13,15),
     "100 Freestyle" => new BestTime($Katya_Stonkevitch,66.04,$Harvard_13,12),
     "200 Freestyle" => new BestTime($Katya_Stonkevitch,148.82,$Nats_14,108),
     "50 Butterfly" => new BestTime($Katya_Stonkevitch,31.20,$Princeton_14,15),
     "50 Backstroke" => new BestTime($Katya_Stonkevitch,34.22,$Uconn_13,0),
     "100 IM" => new BestTime($Katya_Stonkevitch,72.91,$Princeton_13,15),
     "400 IM" => new BestTime($Katya_Stonkevitch,353.40,$NCCS_13,3),
     "4x50 Freestyle Relay" => new BestRelayTime($Katya_Stonkevitch,29.13,$Princeton_13,15,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Katya_Stonkevitch,66.65,$Uconn_13,3,2),
     "4x50 Medley Relay" => new BestRelayTime($Katya_Stonkevitch,34.22,$Uconn_13,3,1)

));

$Katya_Stonkevitch_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Katya_Stonkevitch,30.19,$S_RVB_15,9),
     "50 Butterfly" => new BestTime($Katya_Stonkevitch,29.41,$PSU_15,5),
     "4x50 Freestyle Relay" => new BestRelayTime($Katya_Stonkevitch,30.83,$S_RVB_15,4,1),

));

$Katya_Stonkevitch_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Katya_Stonkevitch,29.20,$NCCS_15,4),
     "100 Freestyle" => new BestTime($Katya_Stonkevitch,65.60,$NCCS_15,5),
     "100 IM" => new BestTime($Katya_Stonkevitch,78.60,$Villanova_15,14),
	 "4x50 Freestyle Relay" => new BestRelayTime($Katya_Stonkevitch,29.28,$F_RVB_15,3,3),
	 "4x100 Freestyle Relay" => new BestRelayTime($Katya_Stonkevitch,71.11,$F_RVB_15,2,1),
	 "4x50 Medley Relay" => new BestRelayTime($Katya_Stonkevitch,34.94,$NCCS_15,1,3)

));

$Katya_Stonkevitch_Junior_Season = new Season (array());

$Katya_Stonkevitch_Senior_Season = new Season (array());


$Katya_Stonkevitch_Career = array($Katya_Stonkevitch_Senior_Season,$Katya_Stonkevitch_Junior_Season,
                       $Katya_Stonkevitch_Middler_Season,$Katya_Stonkevitch_Sophomore_Season, $Katya_Stonkevitch_Freshman_Season);


/*Basia Tou*/

$Basia_Tou_Freshman_Season = new Season (

array("200 Freestyle" => new BestTime($Basia_Tou,146.1,$NCCS_13,8),
     "500 Freestyle" => new BestTime($Basia_Tou,383.31,$UVM_14,6),
     "100 Breaststroke" => new BestTime($Basia_Tou,80.71,$Nats_14,60),
     "50 Butterfly" => new BestTime($Basia_Tou,29.50,$Nats_14,36),
     "100 Butterfly" => new BestTime($Basia_Tou,67.40,$Nats_14,33),
     "200 Butterfly" => new BestTime($Basia_Tou,164.73,$NCCS_14,2),
     "100 IM" => new BestTime($Basia_Tou,70.84,$Princeton_13,9),
     "200 IM" => new BestTime($Basia_Tou,157.58,$Uconn_13,3),
     "4x100 Freestyle Relay" => new BestRelayTime($Basia_Tou,65.11,$Uconn_13,3,2),
     "4x50 Medley Relay" => array(new BestRelayTime($Basia_Tou,29.76,$Princeton_13,1,3),
                                   new BestRelayTime($Basia_Tou,28.50,$Rutgers_14,12,4)),
     "4x100 Medley Relay" => new BestRelayTime($Basia_Tou,67.43,$Nats_14,10,2,2000)

));

$Basia_Tou_Sophomore_Season = new Season (

array("100 Freestyle" => new BestTime($Basia_Tou,65.23,$NCCS_14,9),
     "50 Backstroke" => new BestTime($Basia_Tou,36.12,$S_RVB_15,2),
     "50 Breaststroke" => new BestTime($Basia_Tou,37.37,$PSU_15,16),
     "100 Breaststroke" => new BestTime($Basia_Tou,78.67,$Nats_15,60),
     "200 Breaststroke" => new BestTime($Basia_Tou,182.71,$S_RVB_15,7),
     "50 Butterfly" => new BestTime($Basia_Tou,28.90,$Nats_15,41),
     "100 Butterfly" => new BestTime($Basia_Tou,66.88,$Nats_15,41),
     "200 Butterfly" => new BestTime($Basia_Tou,151.67,$Nats_15,19),
     "100 IM" => new BestTime($Basia_Tou,69.74,$Nats_15,86),
     "200 IM" => new BestTime($Basia_Tou,157.00,$Amherst_14,4),
     "4x50 Freestyle Relay" => new BestRelayTime($Basia_Tou,29.42,$PSU_15,7,2),
     "4x50 Medley Relay" => new BestRelayTime($Basia_Tou,29.56,$PSU_15,21,3)

));

$Basia_Tou_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Basia_Tou,28.91,$Villanova_15,17),
     "500 Freestyle" => new BestTime($Basia_Tou,373.20,$NCCS_15,1),
     "50 Breaststroke" => new BestTime($Basia_Tou,36.66,$Harvard_15,5),
	 "200 Breaststroke" => new BestTime($Basia_Tou,177.96,$NCCS_15,2),
     "50 Butterfly" => new BestTime($Basia_Tou,30.70,$Harvard_15,9),
     "100 IM" => new BestTime($Basia_Tou,71.74,$Harvard_15,14),
	 "4x50 Freestyle Relay" => new BestRelayTime($Basia_Tou,30.04,$F_RVB_15,4,2),
	 "4x50 Medley Relay" => array(new BestRelayTime($Basia_Tou,36.29,$NCCS_15,4,1),
	 						new BestRelayTime($Basia_Tou,36.24,$Harvard_15,9,2))

));

$Basia_Tou_Junior_Season = new Season (array());

$Basia_Tou_Senior_Season = new Season (array());


$Basia_Tou_Career = array($Basia_Tou_Senior_Season,$Basia_Tou_Junior_Season,
                       $Basia_Tou_Middler_Season,$Basia_Tou_Sophomore_Season, $Basia_Tou_Freshman_Season);


/*Shelbe Van Winkle*/

$Shelbe_Van_Winkle_Freshman_Season = new Season (

array("50 Freestyle" => new BestTime($Shelbe_Van_Winkle,28.34,$Nats_14,137),
     "100 Freestyle" => new BestTime($Shelbe_Van_Winkle,62.76,$Nats_14,124),
     "50 Backstroke" => new BestTime($Shelbe_Van_Winkle,34.29,$Nats_14,104),
     "100 Backstroke" => new BestTime($Shelbe_Van_Winkle,72.56,$Nats_14,74),
     "50 Breaststroke" => new BestTime($Shelbe_Van_Winkle,41.25,$UVM_14,7),
     "100 IM" => new BestTime($Shelbe_Van_Winkle,72.64,$Nats_14,99),
     "4x50 Freestyle Relay" => new BestRelayTime($Shelbe_Van_Winkle,28.22,$Rutgers_14,14,4),
     "4x50 Medley Relay" => new BestRelayTime($Shelbe_Van_Winkle,30.65,$Rutgers_14,15,4),

));

$Shelbe_Van_Winkle_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Shelbe_Van_Winkle,28.04,$Amherst_14,10),
     "100 Freestyle" => new BestTime($Shelbe_Van_Winkle,61.70,$NCCS_14,5),
     "50 Backstroke" => new BestTime($Shelbe_Van_Winkle,34.56,$Harvard_14,9),
     "100 IM" => new BestTime($Shelbe_Van_Winkle,70.91,$NCCS_14,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Shelbe_Van_Winkle,28.41,$Harvard_14,5,3),

));

$Shelbe_Van_Winkle_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Shelbe_Van_Winkle,28.31,$NCCS_15,3),
     "100 Freestyle" => new BestTime($Shelbe_Van_Winkle,62.79,$Harvard_15,13),
	 "200 Freestyle" => new BestTime($Shelbe_Van_Winkle,139.21,$Villanova_15,7),
     "100 IM" => new BestTime($Shelbe_Van_Winkle,72.87,$Harvard_15,17),
	 "4x50 Freestyle Relay" => new BestRelayTime($Shelbe_Van_Winkle,28.18,$Villanova_15,6,4),
	 "4x50 Medley Relay" => array(new BestRelayTime($Shelbe_Van_Winkle,27.48,$F_RVB_15,2,4),
	 						new BestRelayTime($Shelbe_Van_Winkle,33.83,$Harvard_15,10,1))

));

$Shelbe_Van_Winkle_Junior_Season = new Season (array());

$Shelbe_Van_Winkle_Senior_Season = new Season (array());


$Shelbe_Van_Winkle_Career = array($Shelbe_Van_Winkle_Senior_Season,$Shelbe_Van_Winkle_Junior_Season,
                       $Shelbe_Van_Winkle_Middler_Season,$Shelbe_Van_Winkle_Sophomore_Season, $Shelbe_Van_Winkle_Freshman_Season);

/*Carolina Vargas*/

$Carolina_Vargas_Freshman_Season = new Season (
array("50 Backstroke" => new BestTime($Carolina_Vargas,31.70,$Nats_13,0)
));

$Carolina_Vargas_Career = array($Carolina_Vargas_Freshman_Season);


/*Selena Wallace*/

$Selena_Wallace_Sophomore_Season = new Season (

array("50 Freestyle" => new BestTime($Selena_Wallace,31.73,$Princeton_13,0),
     "100 Freestyle" => new BestTime($Selena_Wallace,69.33,$Rutgers_14,25),
     "200 Freestyle" => new BestTime($Selena_Wallace,145.32,$Uconn_13,5),
     "500 Freestyle" => new BestTime($Selena_Wallace,400.37,$Princeton_13,12),
     "1000 Freestyle" => new BestTime($Selena_Wallace,839.18,$NCCS_13,6),
     "50 Breaststroke" => new BestTime($Selena_Wallace,42.93,$F_RVB_13,5),
     "100 Breaststroke" => new BestTime($Selena_Wallace,92.69,$NCCS_13,15),
     "100 IM" => new BestTime($Selena_Wallace,80.58,$Uconn_13,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Selena_Wallace,31.73,$Princeton_13,10,1),
     "4x100 Freestyle Relay" => new BestRelayTime($Selena_Wallace,68.52,$NCCS_13,6,2),

));

$Selena_Wallace_Middler_Season = new Season (

array("50 Freestyle" => new BestTime($Selena_Wallace,33.50,$Harvard_14,0),
     "200 Freestyle" => new BestTime($Selena_Wallace,156.79,$F_RVB_14,4),
     "500 Freestyle" => new BestTime($Selena_Wallace,418.76,$F_RVB_14,6),
     "4x50 Freestyle Relay" => new BestRelayTime($Selena_Wallace,33.50,$Harvard_14,12,1),

));

$Selena_Wallace_Junior_Season = new Season (array());

$Selena_Wallace_Senior_Season = new Season (array());


$Selena_Wallace_Career = array($Selena_Wallace_Senior_Season,$Selena_Wallace_Junior_Season,
                       $Selena_Wallace_Middler_Season,$Selena_Wallace_Sophomore_Season);
?>
