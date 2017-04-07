<?
/* Roster */


//Tells the computer what kind of things it should know about each swimmer (called a "class").
class Swimmer {
	public $first_name = 'ERROR';
	public $last_name = 'ERROR';
	public $year = 'ERROR';
	public $year_joined = 'Freshman';
	public $stroke = 'ERROR';
	public $high_school = 'ERROR';
	public $hometown = 'ERROR';
	public $feet_tall = -42;
	public $inches_tall = -42;
	public $bio = 'ERROR';
	public $career = null;
	public $eboard = '';
	public $year_graduated = 0;
	public $gender = "Error";


	function __construct($first_name, $last_name, $year, $stroke, $high_school, $hometown, $feet_tall, $inches_tall, $bio, $year_joined,$gender,$year_graduated) {
		if (is_string($first_name)) {
			$this->first_name = $first_name;
		}

		if (is_string($last_name)) {
			$this->last_name = $last_name;
		}

		if (is_string($year) && in_array($year,array('Freshman','Sophomore','Middler','Junior','Senior',
													 'Graduate','Alumni'))) {
			$this->year = $year;
		}
		if (is_string($stroke)) {
			$this->stroke = $stroke;
		}
		if (is_string($high_school)) {
			$this->high_school = $high_school;
		}
		if (is_string($hometown)) {
			$this->hometown = $hometown;
		}
		if (is_int($feet_tall) && is_int($inches_tall) && $feet_tall > 0 && $inches_tall >= 0 && $inches_tall < 13) {
			$this->feet_tall = $feet_tall;
			$this->inches_tall = $inches_tall;
		}
		if (is_string($bio)) {
			$this->bio = $bio;
		}
		if (is_string($year_joined) && in_array($year_joined,array('Freshman','Sophomore','Middler','Junior','Senior',
													 'Graduate','Alumni'))) {
			$this->year_joined = $year_joined;
		}
		if (is_int($year_graduated)) {
			$this->year_graduated = $year_graduated;
		}
		if (is_string($gender)) {
			$this->gender = $gender;
		}
	}
}

//This can be copy-pasted to add new swimmers to the database more easily. Serves no other purpose
$New_Swimmer_Template = new Swimmer('First','Last','Year','Stroke','HS','Hometown',0,0,
						 'Bio',
						 'Freshman');


//	Alumni	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////	old alums whos info we dont need to track at all other than old best times //

$Camille_Schiff = new Swimmer('Camille','Schiff','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Kaitlyn_Fagundes = new Swimmer('Kaitlyn','Fagundes','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Austin_Mateo = new Swimmer('Austin','Mateo','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Eryn_Nakashima = new Swimmer('Eryn','Nakashima','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Carolina_Vargas = new Swimmer('Carolina','Vargas','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Kimberly_Forester = new Swimmer('Kimberly','Forester','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Katherine_Alexander = new Swimmer('Katherine','Alexander','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Catherine_Fong = new Swimmer('Catherine','Fong','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Alison_Baggen = new Swimmer('Alison','Baggen','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Elizabeth_Brown = new Swimmer('Elizabeth','Brown','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Ana_Echavarria = new Swimmer('Ana','Echavarria','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Lauren_Emery = new Swimmer('Lauren','Emery','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Stephanie_Giancola = new Swimmer('Stephanie','Giancola','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Melanie_Norton = new Swimmer('Melanie','Norton','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Alexandra_Schroeder = new Swimmer('Alexandra','Schroeder','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Erika_Nothnagel = new Swimmer('Erika','Nothnagel','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Jaqueline_Skinner = new Swimmer('Jaqueline','Skinner','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Gina_Reid = new Swimmer('Gina','Reid','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Nina_Fattore = new Swimmer('Nina','Fattore','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Elizabeth_Brown = new Swimmer('Elizabeth','Brown','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Danielle_Parise = new Swimmer('Danielle','Parise','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Audrey_Miller = new Swimmer('Audrey','Miller','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Sarah_Tannenbaum = new Swimmer('Sarah','Tannenbaum','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$Olivia_Mabrey = new Swimmer('Olivia','Mabrey','Alumni','Stroke','HS','Hometown',0,0,'Bio','Freshman');
$April_Donahue = new Swimmer('April','Donahue','Alumni','Breaststroke','High School','Hometown',6,0,'Bio','Freshman');
$Joseph_Rogan = new Swimmer('Joseph','Rogan','Alumni','Butterfly','High School','Hometown',6,0,'Bio','Freshman');
$Jason_Wu = new Swimmer('Jason','Wu','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Jerry_Yu = new Swimmer('Jerry','Yu','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Parker_Traugot = new Swimmer('Parker','Traugot','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Daniel_Ricardelli = new Swimmer('Daniel','Ricardelli','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Nicholas_Matook = new Swimmer('Nicholas','Matook','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');$Kristian_Kemppainen = new Swimmer('Kristian','Kemppainen','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Jonathan_Ingraham = new Swimmer('Jonathan','Ingraham','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$David_Ellis = new Swimmer('David','Ellis','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Verron_Darville = new Swimmer('Verron','Darville','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Robert_Danemiller = new Swimmer('Robert','Danemiller','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Mark_Bacigalupo = new Swimmer('Mark','Bacigalupo','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Maya_Gilchrist = new Swimmer('Maya','Gilchrist','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Emily_Johnson = new Swimmer('Emily','Johnson','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Taylor_Obey = new Swimmer('Taylor','Obey','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Caitlin_Winters = new Swimmer('Caitlin','Winters','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Katy_Budra = new Swimmer('Katy','Budra','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Emma_Boutcher = new Swimmer('Emma','Boutcher','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Anna_Smith = new Swimmer('Anna','Smith','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Brittany_Bohannon = new Swimmer('Brittany','Bohannon','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');
$Alyssa_Mokay = new Swimmer('Alyssa','Mokay','Alumni','Stroke','High School','Hometown',0,0,'Bio','Freshman');

// everyone else
$Kevin_Lua = new Swimmer('Kevin','Lua','Alumni','Freestyle/Breaststroke','Xavier School','Manilla, Philippines',5,10,
						'As one of NUSC\'s all-time greatest breaststrokers, Kevin made a name for himself by becoming a
						national finalist in 2012, 2013, and 2014. During his time he set numerous club records and set
						an excellent example of what dedication and hard work can earn a swimmer. Prior to coming to
						Northeastern, Kevin swam competitively in Manila for his club and high school teams. Kevin was
						a key contributor to the team\'s success during his career, and his contributions will always be
						valued by his coaches and teammates.',
						'Junior',2014);

$Trevor_Ryan = new Swimmer('Trevor','Ryan','Alumni','Backstroke/IM','San Ramon Valley High School','Danville, CA',5,11,
						 '',
						 'Middler',2013);

$Gad_Baron = new Swimmer('Gad','Baron','Alumni','Freestyle/Butterfly','Winston Churchill High School','Potomac, MD',5,11,
						 'Gadi was on the Men\'s E-Board for 3 of the 4 years he was a part of the club. He swam on numerous
						 relays at the 2014 ECC National Championship. Gadi swam for UMBC\'s Men\'s Swimming and Diving program,
						 Retriever Aquatic Club at UMBC, and Rockville Montgomery Swim Club before transferring to Northeastern.',
						 'Middler',2014);

$Gregory_Breitler = new Swimmer('Gregory','Breitler','Alumni','Breaststroke','Lycee International de Ferney - Voltaire','Geneva, Switzerland',6,2,
						 'Greg joined NUSC in January 2012 and was a top breaststroker throughout his career with the Huskies. Before coming to
						 America, Greg swam for Ferey-Gec Natation. His contributions and leadership amongst the team\'s breaststroke squad have
						 never gone unnoticed, and his success with NUSC can be attributed to that and his positive attitude at every practice.',
						 'Senior',2014);

$Renato_Calatroni = new Swimmer('Renato','Calatroni','Sophomore','Freestyle/Butterfly','Seton Hall Prep','Florham Park, NJ',6,5,
								'A New Jersey native, Renato made the trip up north to attend Northeastern University in the fall of 2014. He wasted no
								time showing his technical abilities in butterfly and freestyle and has been improving every practice. Renato\'s swimming
								abilities can be traced back to his time on Elite Swim Club and as captain of his high school team at Seton Hall Prep.
								Renato was able to swim at the First Team All-Conference every year of high school. We\'re excited to have Renato on the
								team and can\'t wait to see him continue to grow as a swimmer.',
								'Freshman');

$Mara_Silka = new Swimmer('Mara','Silka','Alumni','Freestyle/Butterfly','Palisades Charter High School','Los Angeles, CA',5,4,
								'Mara is a freestyle and butterfly specialist who has become one of the leading swimmers for the
								Huskies. Outside of NUSC, Mara continued her aquatic career as a member of the NU Water Polo Club.
								Since joining the team her freshman year, Mara showed immense promise, which was highlighted by
								setting club records in the 1000 and 1650 freestyles. She also contributed to the Huskies\' record
								setting 800 freestyle relay at the 2014 ECC Nationals.',
								'Junior',2015);

/*Men's Team*/
//Creates a swimmer object for each male swimmer and passes the information about the swimmer to the computer.
$Joey_Abbott_Schiff = new Swimmer('Joey','Abbott-Schiff','Sophomore','Freestyle/Breastsrtoke','Oakcrest High School','Mays Landing, NJ',5,11,
								  'Joey\'s competitive experience stems from the water, whether he be swimming in it or rowing across it.
								  Before starting at Northeastern, Joey participated in his high school\'s (Oakcrest) crew and swim teams,
								  as well as for the Mays Landing Mantas. Originally from Mays Landing, NJ, Joey\'s home club team is currently
								  the South Jersey Mariners, which is a composite of his two former teams. As a breaststroke specialist, Joey
								  trains with Nationals in mind, and hopes to continue improving as a member of NUSC. His extensive background
								  in swimming and crew will certainly translate to the tools he needs to continue getting better.',
								  'Freshman','male');

$Connor_Barnes = new Swimmer('Connor','Barnes','Sophomore','Backstroke/Freestyle','Singapore American School','Singapore, Singapore',5,10,
							 'Connor began his swimming career at NUSC in the fall of 2014 where he immediately showcased his talent as a sprinter.
							 Connor swam for his high school team, Singapore American School, where he excelled in sprint backstroke and freestyle.
							 As well as swimming, Connor played baseball for six years. NUSC looks forward to seeing what Connor can do for the team
							 in the years to come.',
							 'Freshman','male');

$Chris_Bartlett = new Swimmer('Chris','Bartlett','Junior','Freestyle/Butterfly','Concord Senior High School','Concord, NH',5,10,
							  'Chris joined the team in January, 2013. Before this time, Chris swam as a member of the Concord YMCA Sailfish,
							  and for his high school\'s varsity team in Concord, NH. It was with the latter team that Chris collected a total of
							  nine top five finishes in his State Championship meet en route to setting the New Hampshire High School record in the
							  4x100 Freestyle Relay.</p><p>As a Butterfly and freestyle specialist, Chris has remained competitive and successful as
							  a member of NUSC. He is always an asset to the team during practice and at meets. Following his first semester at
							  Northeastern, Chris was voted to a position on E-Board. Today he is fulfilling the role of Vice President for the Men\'s
							  club. Chris is studying finance at NU and is excited to continue giving back to the team in the coming years.',
							  'Freshman','male');

$Tyler_Birn = new Swimmer('Tyler','Birn','Freshman','IM','Redbank Regional High School','Redbank, NJ',6,1,
								'In 2015, Tyler moved from New Jersey to Boston and quickly became a member of the NU Swim Club. He came with his sights
								set on continued improvement, specifically in his specialty, the IM. Moving to Boston also meant Tyler left behind both
								his high school and club teams, Red Bank Regional and Monmouth Barracudas, respectively. As his career continues with
								NUSC, so does Tyler’s potential for improvement.',
								'Freshman','male');

$Hang_Chen = new Swimmer('Hang','Chen','Graduate','Backstroke/IM','Zhenijang No. 1 High School','Nanjing, Jiangsu, China',5,10,
						 'Hang is a long time swimmer, beginning his career in Nanjing, Jiangsu where he competed for his city team as well as his
						 province team and college team.  After competing in China, Hang took a brief hiatus before returning to the sport.  Hang
						 reignited his passion for swimming when he decided to join NUSC and start competing again.  Hang is known for his ability
						 in backstroke and hopes to help the Huskies round out their depth in the backstroke events.  Hang continues to work hard in
						 practice and set his sights on further improving and establishing himself as one of the all time best backstrokers at Northeastern.',
						 'Senior','male');

$WenQin_Chen = new Swimmer('WenQin','Chen','Graduate','Butterfly','东昌 High School','Shanghai, China',5,6,
								'Since joining the team in the Fall of 2015, WenQin has already left his mark on it. He moved here from China after
								having swum on the Fudan University swim team as well as the University of Shanghai city team. With his wealth of
								experience, he excels in the pool in butterfly and sprint freestyle. WenQin has already broken into the team’s
								top 10 record times in the 50, 100 and 200 Butterfly, where he is placed as 1st or 2nd in every one. With talent
								and dedication this swimmer will accomplish a lot over his years at NUSC.',
								'Graduate','male');

$Brian_Desnoyers = new Swimmer('Brian','Desnoyers','Middler','Freestyle/IM','Arlington High School','Poughquag, NY',6,0,
								'After swimming for Arlington High School, where he was a varsity captain of his swim team, and for the JCC Snappers,
								where he earned multiple awards including High Point and Outstanding Swimmer, Brian knows what it takes to be a team
								leader and to achieve his goals. As a distance freestyle and I.M. specialist, Brian joins a field of Huskies that work
								together and continue improving every meet. When he wasn\'t in the pool during his high school career, Brian was a port
								rower on his school\'s crew team. With a wealth of swimming experience and strength, Brian will certainly continue to
								improve as the team heads towards Nationals',
								'Freshman','male');

$Nate_Desrochers = new Swimmer('Nate','Desrochers','Senior','Freestyle/Backstroke','Bishop Stang High School','Rochester, MA',5,11,
								'Nate has been a part of NUSC since his freshman year in 2011, and each year he has returned holding himself to higher
								standards and chasing larger goals. As a 3 season athlete in high school, Nate knows what it takes to be part of a team,
								and to work towards both individual and team goals. Outside the pool Nate played 4 years of soccer at Bishop Stang High
								School as a goalie and he also served as captain his senior year. In the spring Nate played 2nd base and left field for
								his school\'s baseball team. During his high school swimming career, Nate specialized in sprint freestyle, which lead him
								to become the Southern Conference champion in the 50 freestyle in 2011. As a member of the NU Swim Club, Nate has shown
								this speed on multiple occasions. Most notably, Nate swum relay splits as fast as 21.90 at ECC Nationals. Nate continues
								to hone his speed as he prepares for another fast season and to add to his already impressive sprinting resume.',
								'Freshman','male');

$Liam_Doyle = new Swimmer('Liam','Doyle','Sophomore','Freestyle/Breaststroke','Holliston High School','Holliston, MA',5,11,
						  'Liam joins us after graduating from Holliston High School in Holliston, Mass. Liam comes with the type of dedication we hope
						  for all of our swimmers, he is constantly at practice and is always giving 100%. His time at practice has paid off in the pool
						  during meets, Liam has taken first place at many meets in his 200 Freestyle and is continuing to show up how versatile of a
						  swimmer he is. We\'re thrilled that Liam has decided to join NUSC and we can\'t wait to see what else he will accomplish.',
						  'Freshman','male');

$Imran_Elmaarouf = new Swimmer('Imran','Elmaarouf','Freshman','Breaststroke','American Community School of Abu Dhabi','Edison, NJ',6,0,
								'Hailing originally from Edison, New Jersey, Imran comes to us having swum most recently for a number of teams in Abu
								Dhabi where he attended high school. In his time there he also played soccer competetively for all four years and even
								swam for the Armed Forces of Morocco. He has shown himself to be a very strong Back and Breaststroker, and his positive
								attitude and team spirit will no doubt prove nice complements to his speed in the water.',
								'Freshman','male');

$Ryan_Fleischer = new Swimmer('Ryan','Fleischer','Freshman','Breaststroke','Bethlehem Central High School','Delmar, NY',5,7,
								'Ryan has been a part of his high school’s varsity team as well as the Delmar Dolphins Swim Club. Coming from Delmar,
								NY where he attended Bethlehem Central High School, Ryan enjoys competing in the breaststroke and butterfly. He has
								set some great goals for himself, and NUSC can’t wait to see how his times improve over the course of the season. ',
								'Freshman','male');

$Martin_Fortuny = new Swimmer('Martin','Fortuny','Middler','Freestyle/Backstroke','Instituto Cumbres De Caracas','Caracas, Venezula',5,9,
							  'Since joining the team, Martin has shown that his strength lies in backstroke and he has continuously worked to improve
							  his times in his best events. Prior to joining NUSC, Martin swam in his hometown of Caracas, Venezuela.',
							  'Freshman','male');


$Brett_Galus = new Swimmer('Brett','Galus','Middler','Freestyle/IM','Pomperaug High School','Southbury, CT',6,0,
							'Brett\'s swimming career has been full of accomplishments and continued improvement. Before he joined the Huskies, Brett swam
							for Pomperaug High School, PAC Swim Club, and Southbury Sharks Park and Rec. Team. As a high school student, Brett was a 4
							year varsity athlete, earned All-State honors his junior year, and captained his team as a senior. Brett also participated
							in Track & Field (2 years) where he was a distance runner, as well as soccer (4 years) where he played mid-field.</p>
							<p>Thus far, Brett has proven himself as one of the top distance swimmers on the team. He has cracked the NUSC Top 10 times in
							multiple events, including the 200 and 500 freestyle and 100 butterfly. Brett\'s commitment and performance at practice suggest
							that he has many great swims still ahead of him.',
							'Freshman','male');

$Brennan_Garber = new Swimmer('Brennan','Garber','Sophomore','Breaststroke/IM','Springfield Township High School','Wyndmoor, PA',6,0,
							  'Frequently referred to as NUSC\'s spirit animal, Brennan has made a tremendous impact on the team both
							  inside and outside of the pool. He cashed in on a season of hard work at 2015 ECC Nationals by setting a number
							  of career best times, and was also the team\'s biggest fan in attendance; intimidating the competition by
							  sporting a red "fat suit". We are incredibly excited to see what Brennan can accomplish in the years to come.',
							  'Freshman','male');

$Kevin_Gell = new Swimmer('Kevin','Gell','Senior','Freestyle','Branford High School','Branford, CT',5,11,
						  'Kevin joined the team as a freshman in the Fall of 2011, and has held a place on the Men\'s E-Board since April 2013. In 2014,
						  Kevin became president of the men\'s team. He is from Branford, CT and is studying Mechanical Engineering at Northeastern. Kevin
						  hopes to help lead the team to greater successes as it continues to grow throughout the season. With more than 10 years of
						  experience, Kevin brings valuable leadership and training knowledge to the team. In fact, he went above and beyond during the
						  2012-2013 season to help write and run practices and taper for the team as we prepared for 2013 ECC Nationals.</p><p>
						  Kevin excels in freestyle events, and has focused on the mid-distance events during his career with the Huskies. He has been a
						  national finalist in 500 Freestyle, and helped to set club records in multiple relays while he has been a part of NUSC.</p><p>
						  Before swimming with NU, Kevin competed with his USA/YMCA club team, Soundview YMCA Stingrays (formerly Branford Rec. Stingrays),
						  and his high school, Branford High School. During this time, Kevin has earned All-State honors, become a State Champion in the 200
						  freestyle relay, placed 5th in the same event at the CT State Open meet, and qualified for the YMCA National Championships in the
						  50 meter freestyle. Outside of the pool, Kevin is also an accomplished Cross Country and Track & Field runner. He is excited to be
						  back with the Huskies for another fun and eventful season.',
						  'Freshman','male');

$Brady_Greene = new Swimmer('Brady','Greene','Sophomore','Backstroke/IM','Smithfield High School','Smithfield, RI',6,3,
							'Brady joined NUSC in the fall of 2014 and we couldn\'t be more excited to have him on our team. Brady has proven to not only be a
							great swimmer, but a real team player. Aside from swimming, Brady is a member of his Hall Council, Globemed, the Northeastern
							University American Chemical Society, and American Scores Volunteer. Before coming to Boston Brady swam for his high school all
							four years as well as the Smithfield YMCA for 13 years. Brady specializes in backstroke and IM and is getting faster every day.',
							'Freshman','male');

$Yawei_Hao = new Swimmer('Yawei','Hao','Graduate','Freestyle/IM','No. 5 School','Chengdu, China',5,7,
						 'Yawei joined the team as a graduate student in 2013. As he grew up, he competed and trained extensively in China on multiple teams,
						 including his Primary, High School, Middle School, and College teams. With experience in nearly every stroke and event, Yawei has been
						 posting impressive times since competing with the Huskies. As he continues to close in on his previous best times, we enjoy having Yawei
						 travel and compete with NUSC, and are glad he has joined us for what will surely be an exciting season.',
						 'Junior','male');

$Gavin_Harris = new Swimmer('Gavin','Harris','Sophomore','Freestyle','City Honors School','Buffalo, NY',6,0,
							'Gavin joins the team with a determined mind and a competitive spirit. A distance freestyle and breaststroke specialist, Gavin has
							become an integral part of this team since joining in 2014. Gavin joins us from Buffalo, NY where he swam for his high school varsity
							team as well as STAR swimming. We\'re very excited to have Gavin on our team and can\'t wait to see what else he will accomplish.',
							'Freshman','male');

$Charlie_Haviland = new Swimmer('Charlie','Haviland','Sophomore','Freestyle/IM','Fairfield Ludlowe High School','Fairfield, CT',6,2,
								'Charlie joins us after graduating Fairfield Ludlowe High School in 2014. He began his swimming
								career his freshman year of high school on both his school team as well as his local YMCA club team.
								Charlie has consistently demonstrated his swimming abilities in his Freestyle and Backstroke as well
								as his dedication to the team. His training last season paid off as he broke his personal records in
								every event he swam at nationals, and we are excited to see what he will be able to do this coming season.',
								'Freshman','male');

$Brandon_Hoang = new Swimmer('Brandon','Hoang','Middler','Freestyle/IM','Arlington High School','Poughkeepsie, NY',5,8,
								'Brandon joined NUSC in 2013, and accepted the role of SID on the Men\'s E-Board in April of 2014. Brandon has already proven to
								be a valuable asset in butterfly, backstroke, and sprint freestyle events. He has set multiple personal best times as a member
								of the Huskies, and will surely be a valuable member of our team as long as he is a part of it. His work ethic and natural talent
								are certainly welcomed by the entire team and, with an extensive swimming career in the years leading up to enrolling at
								Northeastern, this type of dedication has certainly been honed to help make Brandon a great competitor. In fact, as a member of
								his high school team, Arlington High, Brandon was able to qualify for New York State and Sectional Championships. These
								accomplishments also earned him captainship of his school\'s varsity program for 2 years. This type of leaderships helps exemplify
								Brandon as a team leader and dedicated swimmer that fits in perfecting on NUSC.',
								'Freshman','male');

$Kurt_Jaisle = new Swimmer('Kurt','Jaisle','Sophomore','Freestyle/Breaststroke','Glastonbury High School','Glastonbury, CT',5,10,
								'Kurt comes to NUSC from Glastonbury, CT and hopes to carry over his skills from a well-known high school program. Kurt is a distance
								freestyler and breastroker. He continues to put forth the effort every day at practice and hopes that his hard work can pay off in
								the meets to come. Outside of swimming, Kurt is a member of Engineers without Borders, NUHOC, and Enabling Engineering. NUSC looks
								forward to having Kurt as a member of its team and hopes that he can flourish in his new environment.',
								'Freshman','male');

$Sam_Kang = new Swimmer('Sam','Kang','Graduate','Freestyle/Buttefly','Northgate High School','Atlanta, GA',5,11,
								'Sam came to NUSC as a graduate student, previously attending Georgia State University. Sam has a history of competing at the ECC
								with Georgia and hopes that his experience can help him succeed on a new team. Sam swims butterfly as well as sprint freestyle.
								Outside of swimming Sam is a fan of volleyball and played for KUSA for 3 years. Sam\'s ability will surely help NUSC in the years to come.',
								'Graduate','male');

$Thomas_Kenyon = new Swimmer('Thomas','Kenyon','Freshman','Freestyle','Spruce Creek High School','Ormond Beach, FL',6,0,
								'Thomas joined NUSC within weeks of coming to Northeastern, and immediately showed that he was not only a great asset in
								the water, but fit in perfectly with our team culture. Back home in Ormond, FL, Tommy swam for his high school team
								in addition to playing tennis as a state finalist. It comes as no surpries that he is involved in a number of
								organizations here at NU, but we hope he continues contributing greatly to the NUSC community.',
							    'Freshman','male');

$Matthew_Knapik = new Swimmer('Matthew','Knapik','Senior','Freestyle/Backstroke','Fairfield Preparatory School','Fairfield, CT',6,2,
								'Matt is a veteran and leader on NUSC. As a member of the Men\'s E-Board since 2014, Matt hopes to help
								direct the team towards continued success in the water. He comes to the team with a storied swimming
								career, including being part of multiple conference winning teams with his high school, Fairfield Prep,
								and a two time YMCA National competitor with his USA team, the Westport Water Rats. Matt is an integral
								part of almost all of NUSC\'s relays, and leads the team in the backstroke and distance freestyle events,
								and is also proud to have recently been named the team\'s (second) sexiest ginger. With a large number
								of best times that can put him in contention at ECC Nationals, and the determination to get there, Matt
								will surely have another accomplished season with NUSC.',
								'Freshman','male');

$Matt_Landon = new Swimmer('Matt','Landon','Junior','Freestyle','Hamden Hall Country Day School','Guilford, CT',6,7,
								'Matt\'s presence on the pool deck has been appreciated since he joined the team in the spring of 2013. As a distance freestyle
								specialist, Matt is committed to working hard in order find success in some of the most grueling sets and races that anyone on
								the team participates in. Matt is no stranger to this type of work, as he has been a member of 3 other teams in his career
								leading up to Northeastern. As a swimmer for his High School, Hamden Hall,, USA team, CCAT, and local YMCA team, Matt has worked
								and achieved best times on a consistent basis over many years. With this habit of success, Matt looks to continue to improve,
								as well as meet the time standards that have been set for the distance races at the ECC National Meet. While in high school,
								Matt also participated in his school\'s choir. We look forward to seeing Matt continue to improve in his favorite events this
								season (and maybe kick a little more!) as we begin another great season!',
								'Freshman','male');

$Ryan_Leys = new Swimmer('Ryan','Leys','Senior','Freestyle/Backstroke','Middletown High School','Middletown, RI',6,3,
								'After an extended break from the sport, we are excited to be the team Ryan has chosen to make his come back! He decided to join
								the team in January 2014, and has fit in perfectly ever since. Prior to NUSC, Ryan had competed for the YMCA Newport Wahoos and
								Middletown High School. As a backstroke specialist, Ryan will surely make an impact through the rest of the season. As a source
								of comedic relief on the team, he has already proven to be an excellent addition to NUSC.',
								'Middler','male');

$Lewis_Li = new Swimmer('Lewis','Li','Senior','Butterfly/IM','Diocesan Boys School','Kowloon, Hong Kong',3,11,
								'Lewis came to Northeastern after a long career full of personal successes with the Hong Kong Regional
								Swimming Squad. With impressive personal bests in LCM, we were excited when Lewis decided to become a
								member of our club in 2012. He has been a silent leader during his time on the team; Lewis is someone
								who works hard every day and reaps the benefits when it comes time to race. As a butterfly and I.M.
								specialist, Lewis has committed a lot of his time to perfecting his technique and drastically improving
								his fitness. Lewis has been a finalist in numerous individual and relay events at ECC Nationals. He has
								set multiple club records as an individual and as part of NUSC\'s relays.</p><p>Before coming to
								Northeastern, Lewis extended his training beyond the pool in the form of Cross Country running and Triathlon
								competitions. This type of endurance racing is what Lewis hopes to get back to in the current season. As he
								continues to work hard to improve his kick strength and overall fitness in each of the four stroke disciplines,
								we look forward to seeing incredible swims from Lewis this season. His unwavering commitment to training,
								improving, and racing is admired and respected across the entire team. We are proud to have Lewis return this
								year, and look forward to seeing the times he will surprise us with next. He has also trademarked the phrase
								"Commeeee onnnnn" whenever he does not want to swim, which is quite often.',
								'Sophomore','male');

$Stephen_Mais = new Swimmer('Stephen','Mais','Junior','Freestyle/Breaststroke','Newtown High School','Newtown, CT',6,4,
								'A Connecticut native, Stephen began his career at Northeastern University in the fall of 2012. He wasted no
								time showing his leadership skills both in and out of the pool and has been establishing himself as a rising
								team leader. Stephen\'s swimming abilities can be traced back to his time on Newtown High School\'s swim team.
								As well as competing for the team, Stephen also takes exceptional team photos. We\'re excited to have Stephen
								back on the team and can\'t wait to see him continue to grow as a swimmer and a leader.',
								'Freshman','male');

$Trevor_McCrobie = new Swimmer('Trevor','McCrobie','Middler','Freestyle','Pittsford Mendon High School','Pittsford, NY',6,0,
								'Trevor has shown incredible talent and promise in the distance freestyle events. He came to NUSC with a wealth
								of competitive experience, and impressive best times. Trevor has been working hard to ensure that his next
								season will include a series of exciting and successful races for him. Before he joined the Huskies, Trevor had
								competed in both the New York State Meet with his high school, Pitsford Mendon, and the Speedo Championships
								with the PACK Swim Club. This type of competitive experience has shown itself on multiple occasions as Trevor
								has swam with a determination to win. NUSC is happy to have Trevor among our other members as he constantly
								challenges everyone to improve while also does everything he can to help the team and himself succeed.',
								'Freshman','male');

$Artem_Movchan = new Swimmer('Artem','Movchan','Freshman','IM','ZSS No. 7','Zaporizhzhya, Ukraine',6,2,
								'Coming all the way from Ukraine, Artem shows an incredible passion for swimming, a sport which he excelled in
								back home. He has one of our best attendance records at proctice, and to say that his hard work pays off in
								competition would be an understatement. We are excited to see Artem grow as a part of NUSC in the years to come.',
								'Freshman','male');

$Chris_Murphy = new Swimmer('Chris','Murphy','Sophomore','Freestyle/IM','East Greenwhich High School','East Greenwhich, RI',5,8,
								'Chris Murphy took a small step from his Rhode Island hometown and ended up at Northeastern and NUSC. Chris
								is a distance freestyler and IMer who swam for his local YMCA team, Kent County YMCA, as well as his high
								school, East Greenwich High School. Now that Chris is on the Huskies, he looks to gain personal bests in his
								individual events and aid the Huskies in their meets. Chris looks to be a valuable team asset that the Huskies
								are looking to cash in on.',
								'Freshman','male');

$Nick_Newhart = new Swimmer('Nick','Newhart','Senior','Breaststroke','Athena High School','Rochester, NY',5,11,
								'Nick is a native of Rochester, NY who has been around the pool for many years prior to joining the club
								team at Northeastern in 2011. Before college, Nick competed for the Aquinas and Northwest YMCA Stingrays
								swim clubs, where he was a YMCA Long Course National Qualifier. As a high school swimmer, Nick received
								All-Monroe honors and the Section 5 Sportsmanship Award. He also captained the team during his senior year
								at Greece Athena High School. Aside from swimming, Nick is very active on campus. He is a member of IEEE,
								IEEE HKN (Treasurer), the Entrepreneurs club, Catholic Students Association, NUHOC, Northeastern Downhillers,
								and the Wireless Club. As a breaststroke and IM specialist, Nick hopes to continue to improve his technique,
								and hone his speed as he prepares to vie for a spot in finals at the ECC National Championship. As one of
								the older members of the team, Nick is a role model and key contributor; he proved this by being elected to
								the position of Treasurer of the Men\'s E-Board in 2014. He has already made great improvements to the team
								with his work on E-Board and presence in the pool.',
								'Freshman','male');

$Darragh_Ogorman = new Swimmer('Darragh','Ogorman','Sophomore','Backstroke/IM','Millburn High School','Short Hills, NJ',6,2,
								'From Milburn High School in New Jersey, Darragh joined the swim club as a sophomore at Northeastern and has
								integrated into the team seamlessly. With his past experience of swimming on his high school team and for
								Scarlet Aquatics, he has brought a lot to the pool. He specializes in backstroke and IM, and is always
								enthusiastic about his races. Outside of the pool, Darragh is also an active member of the water polo team.',
								'Sophomore','male');

$Matt_Perez = new Swimmer('Matt','Perez','Sophomore','Freestyle/IM','Pearl River High School','Pearl River, NY',5,7,
								'After spening a semester studying abroard in Austrailia, Matt joined the team in the spring of 2015.
								He immediately made an impact as a key contributor in mid- to long-distance freestyle events, as well
								as the 200 IM and Backstroke. He draws on experience from his previous teams (New York Sharks Aquatics
								and Montclair Cougars) as we horks to better his times and continue contributing to NU Swim Club.',
								'Freshman','male');

$Matt_Riina = new Swimmer('Matt','Riina','Middler','Breaststroke','Trumbull High School','Trumbull, CT',6,0,
								'As a distance freestyle and breaststroke specialist, Matt joined the team in 2013 and has practiced
								with immense focus within these disciplines. He has shown great improvement with the Huskies and
								solidified himself as a member of the core group of swimmers on our team. As Matt looks towards the
								end of the season, he will surely meet his goals of dropping time and improving the shape that he is
								in. As a native of Trumbull, CT, Matt has experience in the pool with his former USA team, the
								Shelton-Monroe Rapids. Outside of swimming, Matthew has also spent time as a part of his school\'s
								marching band (four years) and practicing martial arts (12 years). Such activities have certainly
								sharpened Matthews\'s focus and determination, which are some of the greatest assets a swimmer can have.',
								'Freshman','male');

$Eric_Shi = new Swimmer('Eric','Shi','Junior','Freestyle','Algonquin Regional High School','Southborough, MA',6,2,
								'Eric constantly has his sights set on further success. After a very successful campaign thus far,
								he has goals in mind that will surely take incredibly focus and determination throughout the season
								to reach. Eric has already shown incredible promise during practice and at meets. He is constantly
								bettering his times from previous seasons, and has secured himself as one of the top breaststrokers
								on the team and among club teams across New England. Continuing to build on these achievements, Eric\'s
								outlooks as a Husky include becoming a Nationals finalist, and even taking a shot at the medal podium
								at ECC Nationals. Even with his work ethic and dedication to the sport, Eric also manages to bring the
								team together with his sense of humor and fun-loving, positive attitude.</p><p>
								Before coming to NU, Eric competed in high school and USA swimming. While at Algonquin Regional High
								School, he earned the Coaches Award, and was a part of the school record setting 4x50 and 4x100
								Freestyle relays. His successes in the pool didn\'t end there though. Eric also was an accomplished
								USA swimmer with his club team, Evolution Aquatics. Here, he travelled to a variety of meets, including
								the New England Open, Bay State Games (where he was a finalist), and the Fort Lauderdale International
								Hall of Fame. With such a storied swimming career, Eric will continue to be a valued member of the
								Huskies\' swim team.',
								'Freshman','male');

$Max_Schineller = new Swimmer('Max','Schineller','Senior','Freestyle/Breaststroke','Kinnelon High School','Kinnelon, NJ',6,0,
								'Max joins NUSC in the Fall of 2013 after having been in the water for more than a decade. During
								most of this time, he has swam for his club team in New Jersey, the Fayson Gators. More recently,
								he also represented his high school, Kinnelon High, where he earned his varsity letter for 3
								consecutive years. As a freestyle and breaststroke specialist, Max hopes to continue to drop time,
								with his sights set on improving his 100 freestyle and breaststroke times. Since joining the team,
								Max has also become the unofficial dry-land DJ for NUSC. As Max continues to get back in shape,
								and improve his fitness, we are excited for the depth he can bring to our team!',
								'Junior','male');

$David_Thornton = new Swimmer('David','Thornton','Sophomore','Freestyle/IM','Broadneck High School','Arnold, MD',5,9,
								'Since joining the team in 2014, David has made an immediate impact on the team\'s improvement.
								His diligence and skill in each practice serve as excellent examples for his teammates. Dave is an
								IM and breaststroke specialist, although his experience in the sport can allow him to be successful
								in almost any event. This success can be credited to David\'s time competing with his high school team,
								Broadneck High School, as well as the Naval Academy Aquatic Club. Outside of the pool, David served as
								treasurer of his high school\'s Habitat for Humanity club. As he continues to excel in the sport, David
								will surely find even more success as a member of the NU Swim Club.',
								'Freshman','male');

$Jamie_Xie = new Swimmer('Jamie','Xie','Sophomore','Freestyle/Butterfly','Bergen County Technical High School','Ridgefield, NJ',5,7,
								'Jamie has a history of leadership that has shown during his time on the team. He attended Bergen County
								Technical High School in Ridgefield, NJ until 2014 where he was an active member of his student council
								and local volunteer organizations. Jamie demonstrates his technical abilities in his freestyle and
								butterfly events and continues to make a name for himself on this team every meet.',
								'Freshman','male');



/*Women's Team*/
//Creates a swimmer object for each female swimmer and passes the information about the swimmer to the computer.
$Casey_Abel = new Swimmer('Casey','Abel','Sophomore','Freestyle/Butterfly','Staten Island Technical High School','Staten Island, NY',5,8,
								'Casey has added depth to the butterfly and sprint freestyle events ever since she joined NUSC in the Fall
								of 2014. She has remained a focused and hardworking member of the team and hopes her efforts will translate
								to greater successes in her main events: the 100 and 200 butterfly.</p><p>Before she came to Northeastern,
								Casey was an integral member of her high school\'s varsity team, Mckee/Staten Island Tech, and her USA team,
								Richmond Aquatic Club. Casey is no stranger to success and aims to prove that as she continues her career
								with the Huskies.',
								'Freshman','female');

$Katie_Aldrich = new Swimmer('Katie','Aldrich','Senior','Freestyle/Backstroke','Central High School','Manchester, NH',5,10,
								'Katie joined NUSC as a Middler, and was quick to become a team leader for the Huskies. As a
								backstroke and freestyle specialist, Katie has set club records in the 50, 100, and 200 backstroke,
								100 freestyle, 100 IM, and multiple relays. Her performance at the 2014 ECC National Championship
								meet earned her the title of MVP for the 2013-2014 season.',
								'Middler','female');

$Carolyn_Banak = new Swimmer('Carolyn','Banak','Middler','Freestyle/Backstroke','Holliston High School','Holliston, MA',5,7,
								'Carolyn is a sprint freestyle and backstroke specialist who joined NUSC after completing an impressive high
								school career both in and out of the pool. Aside from swimming, Carolyn played defense and mid-field for her
								high school (4 years) and club soccer teams (3 years). She was also a 4 year member of concert band, and a 2
								year member of National Honor Society. Carolyn swam for Holliston high school, where she was a Massachusetts
								sectional qualifier her freshman, junior, and senior year as well as a state qualifier as a senior. NUSC is
								excited to have Carolyn on the team; the depth she brings to our lineup will surely help NUSC continue to grow.',
								'Freshman','female');

$Emily_Barlow = new Swimmer('Emily','Barlow','Sophomore','Breaststroke','Mount Anthony Union High School','Bennington, VT',5,2,
								'Emily came to NUSC with a storied background in multiple sports. During her high school career, she was a
								swimmer as well as a distance runner on the track and cross country team. She also completed for a loacl club
								team (Bennington Marauders Swim Club), which undoubtedly contributed to her success in the water. While at
								Northeastern, Emily has also become a part of the ROTC program, and hopes that participating in that as well
								as with NUSC will yeild greater results in both her endeavors.',
								'Freshman','female');

$Halle_Berger = new Swimmer('Halle','Berger','Sophomore','Freestyle/Breaststroke','New Bedford High School','Achusnet, MA',5,3,
								'Halle is a breaststroke specialist who hails from Acushnet, MA. Her technique and dedication have been crucial
								contributions to the team ever since she joined in 2014. By drawing on a wealth of competitive experience as a
								4 year member of her high school\'s, New Bedford Lady Whalers, varsity swim team and 2 years on their lacrosse
								team, Halle will surely succeed as a member of the NU Swim Club. As a senior in high school, Halle was captain
								of her swim team; these leadership experiences have already shown through as Halle leads by example every time
								she gets in the pool.',
								'Freshman','female');

$Maria_Bermudez = new Swimmer('Maria','Bermudez','Sophomore','Backstroke/Breaststroke','American School Foundation of Puebla','Puebla, Mexico',5,2,
								'Maria began her swimming career in her hometown of Puebla, Mexico with the Acuatica Nelson Vargas and Ravens
								of Carleton swim clubs. Throughout her high school career, Maria was very successful both in and out of the
								water. When she wasn\'t swimming, Maria participated in Model United Nations (2013-2014), where she was the
								Undersecretary General for the General Assembly. In 2014, she was also the treasurer of her high school\'s
								Honor Society, and an advisor for Lead Cap, the school\'s entrepreneurship club. As a collegiate club swimmer,
								Maria hopes to continue chasing best times (especially in the backstroke and breaststroke disciplines), as
								well as enjoy the team atmosphere of NUSC.',
								'Freshman','female');

$Allison_Bloom = new Swimmer('Allison','Bloom','Freshman','Breaststoke','Barrington High School','Barrington, RI',5,6,
								'Allison’s upbeat and positive energy adds a lot of fun to the pool. Coming into the team as a freshman from
								Barrington High School, Allison enjoys the breaststroke and IM. She was the captain of her team senior year of
								high school and her leadership skills will certainly bring her closer to her goals at Northeastern. Other
								activities Allison has been involved in are the  Boys and Girls Club of Barrington and her local YMCA. As a
								member of the Huskies, she hopes to continue improving her times and having fun in the process.',
								'Freshman','female');

$Eleanor_Broadbent = new Swimmer('Eleanor','Broadbent','Senior','Backstroke','Ward Melville High School','Oxford, England',5,7,
								'In 2015, Eleanor returned to NUSC after a 2 year hiatus from the sport. Originally from Oxford, England, she has
								had plenty of experience as a member of the Ward Melville High School swim team and the North Shore swim club. In
								2015, Eleanor also joined the Pho Chi Honor Society. In her final season with NUSC, Eleanor looks to reestablish
								herself as one of the team’s marquee backstroke specialists.',
								'Middler','female');

$Eileen_Butler = new Swimmer('Eileen','Butler','Middler','Freestyle/Breaststroke','Phoenixville Area High School','Phoenixville, PA',5,5,
								'Eileen joined NUSC as a freshman, and quickly proved her ability as a breaststroke and sprint freestyle
								specialist. She has been a key contributor for the Huskies, and we are excited to see what her next success
								with NUSC will be.</p><p>Before enrolling at Northeastern, Eileen competed for two years as a Cross Country runner,
								as well as for three different swim teams. These teams included the Phoenixville Area YMCA, the Upper Main Line
								YMCA, and Phoenixville Area High School. During this time, Eileen was able to qualify for and compete in the
								PIAA District and State (AA Division) meets, as well as the YMCA District and State meets',
								'Freshman','female');

$Nancy_Chen = new Swimmer('Nancy','Chen','Middler','Freestyle/Breaststroke','Adolfo Camarillo High School','Camarillo, CA',5,3,
								'Nancy is a freestyle and breaststroke specialist. She swam for her high school, Adolfo Camarillo, as well as a USA
								club team, the Pleasant Valley Swim Club. While a member of these teams, Nancy earned a lane in multiple League
								Championships Finals (2010-2013), and was a Ventura County Championship and CIF SS finalist from 2011-2013.</p>
								<p>These experiences and honors earned Nancy her team\'s Most Dedicated Swimmer award in 2012 as well as Captainship and
								Coaches Award in 2013.Nancy is the Treasurer of the Women\'s E-Board for NUSC. She is studying Marketing at
								Northeastern and has been an active leader on the team since joining in 2013.',
								'Freshman','female');

$Claire_Depew = new Swimmer('Claire','Depew','Senior','Freestyle','Marblehead High School','Marblehead, MA',5,6,
								'Claire comes to NUSC having alreasdy spent the past four years on the Women\'s Club Water Polo Team here at
								Northeastern. Before coming to NU, Claire swam both on her high school team in her hometown of Marblehead, Mass, and also
								on her local YMCA team. She has shown lots of promise in both sprint and distance freestyle and we are excited to watch
								her grow as a swimmer.',
								'Senior','female');

$Hanalei_Fong = new Swimmer('Hanalei','Fong','Freshman','IM','Walt Whitman High School','Bethesda, MD',5,4,
								'Hanalei joined NUSC at the start of her freshman year and very quickly showed a passion for swimming and our team, in
								addition to her leadership abilities. Hanalei comes to us from Walt Whitman High School in Bethesda, MD where she swam
								for club and high school teams, and was also a setter on the volleyball team. Hanalei\'s energy on deck is contageous
								and her speed in the pool is sure to prove a valuable asset to NUSC in the years to come.',
								'Freshman','female');

$Bailey_Fritzinger = new Swimmer('Bailey','Fritzinger','Middler','Freestyle','Colorado Academy','Denver, CO',5,6,
								'Bailey decided to become a part of the Northeastern University Swim Club in 2014 during her second year at
								Northeastern. We are thrilled that after a year off she decided to choose NUSC as the team to make her comeback
								on. Before making the trip to the east coast Bailey, a Denver, Colorado native, swam for the Colorado Academy
								Swim Team as a Freestyle specialist. Since joining the team Bailey has had some great swims and made a lasting
								impression on her other teammates for her sense of humor and kindness.',
								'Sophomore','female');

$Stephanie_Gee = new Swimmer('Stephanie','Gee','Senior','Freestyle/IM','American High School','Fremont, CA',5,5,
								'Since joining NUSC in 2011, Stephanie has established herself as one of the clubs most
								accomplished swimmers. Stephanie has extensive experience in the sport with her two California
								based club teams, the Pleasanton Seahawks and Mission San Jose Aquatics. As a distance freestyler
								and butterfly specialist, Stephanie has emerged as a team leader during her career with the Huskies.
								In fact, Stephanie has earned podium finishes at the ECC National Championship meet, and has set
								numerous team records throughout each season.</p><p>As a Junior, Steph stepped into the role of
								SID on the Women\'s E-Board. She is excited to play a greater role in leading the team to continued
								success in the coming seasons.',
								'Freshman','female');

$Julia_Hannigan = new Swimmer('Julia','Hannigan','Senior','Freestyle','Lauralton Hall','Trumbull, CT',5,11,
								'As president of the women\'s team, Julia has proven herself to be strong leader and a great presence on the
								team. Julia is a Health Sciences major from Trumbull, CT who can always be found working hard, both in and out
								of the water. With a distance freestyle background, Julia is constantly working to better her times in the 200,
								500, and 1000 freestyle.',
								'Freshman','female');

$Alexis_Laundry = new Swimmer('Alexis','Laundry','Freshman','Freestyle','Norwich High School','Norwich, NY',5,10,
								'Lexi is a distance freestyler who hails from Norwich, New York.  Over her career, she has remained involved as
								a member of four other teams before NUSC! The experience that she has gathered as a high school, YMCA, USA, and
								summer league swimmer will prove to be invaluable as she makes a name for herself on the collegiate club circuit.',
								'Freshman','female');

$Morgan_Lenney = new Swimmer('Morgan','Lenney','Sophomore','Freestyle/Backstroke','Niskayuna High School','Niskayuna, NY',5,5,
								'Morgan has had a very impressive swimming history so far, starting with her local YMCA club team when she was
								only 10 years old, Morgan has swam for numerous teams, including six years with the Albany Starfish Swim Club
								and five with her high school varsity team. Since joining NUSC in 2014 Morgan has shown her impressive abilities
								as a backstroker by bringing her all to every practice and meet.',
								'Freshman','female');

$Tullia_Lieb = new Swimmer('Tullia','Lieb','Junior','Breaststroke','Gunn High School','Palo Alto, CA',5,8,
								'Tullia found NUSC as a junior at Northeastern. Originally from Palo Alto, CA, Tullia has benefitted from
								guidance from her coaches and teammates at Gunn High School and on the PASA swim club.  As a breaststroke and
								sprint freestyle specialist, Tullia has become part of a strong and dedicated contingent of NUSC’s current swimmers.',
								'Junior','female');


$Corinne_Lizzio = new Swimmer('Corinne','Lizzio','Middler','Butterfly','Massapequa High School','Massapequa Park, NY',5,3,
								'As a Massapequa, New York native, Corinne is no stranger to swimming. As a member of LIAC, Bethpage Swim Club,
								and her high school team, Corinne has an extensive history with the sport. Corinne is well on her way to reaching
								her goals of getting back to her best times from High School. While Corinne\'s butterfly is very impressive, she
								is also well known amongst her teammates for her kind heart and constant cheering and supporting of others.',
								'Freshman','female');

$Katerina_Nozhenko = new Swimmer('Katerina','Nozhenko','Sophomore','Butterfly','High Tech High School','Bayonne, NJ',5,1,
								'As a sophomore Kat found herself as one of the team’s core butterfliers and as a very active member of the Northeastern
								community. Outside of the pool, she is a member of the ballroom dance club and NUEMS and is an ambassador for both NUin
								Alumni and the Bouve College. As she continues to build off of her experiences from her high school and club teams in
								Bayonne, NJ, Kat will surely reach her goals both in and out of the water.',
								'Sophomore','female');

$Maya_Philbrick = new Swimmer('Maya','Philbrick','Sophomore','Breaststroke/IM','Greely High School','North Yarmouth, ME',5,2,
								'Maya joined the Northeastern University Swim Club as a freshman in 2014 and has been making waves ever
								since. Back in North Yarmouth, Maine, Maya swam for the Greely Middle School Swim Team, the Greely High School
								Swim Team, and the Seacoast Swim Club. Her long history with the sport has paid off and helped make her a vital
								member of NUSC. As an IM and Breaststroke specialist Maya has had some fantastic swims so far and we can\'t wait
								to see what else she can do.',
								'Freshman','female');

$Samantha_Pinkes = new Swimmer('Samantha','Pinkes','Sophomore','Freestyle','Kingswood Oxford School','West Hartford, CT	',5,8,
								'',
								'Freshman','female');

$Abby_Plummer = new Swimmer('Abby','Plummer','Middler','Freestyle/Backstroke','Glastonbury High School','Glastonbury, CT',5,6,
								'Abby is a natural athlete who joined NUSC after competing with her local summer league swim club. Aside
								from swimming, Abby has also rowed crew for four years and played basketball for ten. As a backstroke and
								freestyle specialist, Abby hopes to improve her times and technique this season.',
								'Freshman','female');

$Veditha_Regulapati = new Swimmer('Veditha','Regulapati','Freshman','Backstokre','Hamden High/Indus International','Hamden, CT',5,7,
								'Veditha’s attitude at practice is always encouraging to those around her. As a member of the strong backstroke
								squad on NUSC, she has plenty of people compete with. Originally from Hamden, CT, Veditha has swum for Hamden
								High School as well as the local YMCA team. Her career continues with NUSC as she works to better her lifetime
								best times in her best events.',
								'Freshman','female');

$Alice_Renaud = new Swimmer('Alice','Renaud','Sophomore','Freestyle','Davis Senior High School','Davis, CA',5,10,
								'',
								'Freshman','female');

$Grace_Ronca = new Swimmer('Grace','Ronca','Freshman','Freestyle','Wissahickon High School','Blue Bell, PA',5,3,
								'After swimming for Wissahickon High School, as well as being on their water polo team for four years, Grace joined
								NUSC in her first year at Northeastern. Coming into the pool with a lot of enthusiasm and drive, she is truly a
								teammate who knows how to reach her goals. Grace’s favorite events are distance freestyle and butterfly, but you can
								catch her in the pool competing in just about any stroke. A great addition to the team, Grace will bring a lot of
								spirit in her years here.',
								'Freshman','female');

$Shannon_Song = new Swimmer('Shannon','Song','Sophomore','Breaststroke','Woodgrove High School','Purcellville, VA',5,10,
								'After joining the team as a freshman, it was clear that Shannon would have an immediate impact on the Huskies\'
								breaststroke events. Certainly, her rich competitive background had prepared her for the fun yet competitive
								atmostphere of club swimming on the college level. Before joining NUSC, Shannon swam for her high school varsity
								team (Woodgrove High School), as well as year round with her local club team (SNOW Swimming) and in a summer
								league (Franklin Park Stingrays). As a member of the Huskies, Shannon hopes to continue improving her times
								and having fun in the process. Huskies breaststroke events. Certainly, her rich competitive background had
								prepared her for the fun yet competitive atmostphere of club swimming on the college level. As a member of
								the Huskies, Shannon hopes to continue improving her times and having fun in the process.',
								'Sophomore','female');

$Katya_Stonkevitch = new Swimmer('Katya','Stonkevitch','Middler','Freestyle/IM','Medfield High School','Medfield, MA',5,10,
								'Katya swam for multiple club teams over her multi-year career. These teams include the Wellesley Swimming
								Association, Medfield Marlins, Medfield Swim & Dive Team, and now, the NU Swim Club. Before coming to
								Northeastern, Katya\'s hard work and dedication to the sport earned her the honor of being a 2012 Tri-Valley
								League All-Star. As in the past, Katya\'s dedication and commitment to the NUSC has constantly been noticed and
								appreciated by all of her teammates.',
								'Freshman','female');

$Basia_Tou = new Swimmer('Basia','Tou','Middler','Butterfly/IM','Clarence High School','Clarence, NY',5,3,
								'Basia joined the team in 2013 and immediately began making a name for herself as one of our top
								butterfly and freestyle specialists. While swimming is a clear strength for Basia, it is not the only
								sport she has been successful in. From 2006-2008, Basia was a setter on her Volleyball team. She has
								also competed as a gymnast from 2012-2013. Lastly, Basia has played a very storied career on the soccer
								field. From 2003-2010, she played nearly every position aside from goalie.</p><p>While these sports
								have been important to Basia, she has also found a home in the water. Before coming to NUSC Basia
								competed with Clarena Swim Club and the Clarena High School Swim Team. It was with the prior team
								that Basia saw herself qualify for and compete in both the ECIC A and New York Sectional Championship
								meets. As a freshman in high school, Basia earned the Outstanding Freshman Award for her efforts with
								her team. NUSC is excited to see Basia continue to work hard and stand out as a member of our team.</p>
								<p>Basia became Secretary of the Women\'s team in 2014 and has done an excellent job as a member of the
								Executive Board. She looks forward to helping the team continue to improve as this year\'s Vice President.',
								'Freshman','female');

$Shelbe_Van_Winkle = new Swimmer('Shelbe','Van Winkle','Middler','Freestyle','Mount Mansfield Union High School','Underhill, VT',5,9,
								'Shelbe specializes in freestyle and backstroke events. Before joining the club, Shelbe also competed with
								Green Mountain Aquatics and Edge. Out of the pool, Shelbe has played field hockey for seven years (defense),
								softball for 9 years (infield), and has been skiing for 14 years. Her athleticism and dedication will surely
								translate to great improvements in her swimming throughout this season.',
								'Freshman','female');

$Selena_Wallace = new Swimmer('Selena','Wallace','Junior','Freestyle/IM','St. Andrews School','Minot, ME',5,1,
								'Selena is a transfer student who joined NUSC in 2013. As she continues to chase best times in her specialty
								events (distance freestyle and I.M.), Selena also brings a positive attitude to practice and to meets. Before
								joining NUSC, Selena competed with her USA club team, Riptide Aquatics, and her high school team at St.
								Andrew\'s School. During this time, Selena was awarded rookie of the year (2009), the Genereaux Service Award
								(2012), Most Improved Swimmer (2011), and Captainship of her high school team (2012). All of these experiences
								will surely aid Selena as she continues her career with the NU Swim Club.',
								'Sophomore','female');



//IGNORE
//gets everybody's best times from the BestTimes.php file
require $_SERVER['DOCUMENT_ROOT'] . '/NUSC/Team/BestTimes.php';



//IGNORE
//Assigns everyone's career field their career. This is done here instead of when the swimmers
//were created because we just got access to everyone's Best Times 5 lines of code prior to this.
$Charlie_Haviland->career = $Charlie_Haviland_Career;$Joey_Abbott_Schiff->career = $Joey_Abbott_Schiff_Career;$Connor_Barnes->career = $Connor_Barnes_Career;$Chris_Bartlett->career = $Chris_Bartlett_Career;$Hang_Chen->career = $Hang_Chen_Career;$Brian_Desnoyers->career = $Brian_Desnoyers_Career;$Nate_Desrochers->career = $Nate_Desrochers_Career;$Liam_Doyle->career = $Liam_Doyle_Career;$Martin_Fortuny->career = $Martin_Fortuny_Career;$Brett_Galus->career = $Brett_Galus_Career;$Brennan_Garber->career = $Brennan_Garber_Career;$Kevin_Gell->career = $Kevin_Gell_Career;$Brady_Greene->career = $Brady_Greene_Career;$Yawei_Hao->career = $Yawei_Hao_Career;$Gavin_Harris->career = $Gavin_Harris_Career;$Brandon_Hoang->career = $Brandon_Hoang_Career;$Kurt_Jaisle->career = $Kurt_Jaisle_Career;$Sam_Kang->career = $Sam_Kang_Career;$Matthew_Knapik->career = $Matthew_Knapik_Career;$Matt_Landon->career = $Matt_Landon_Career;$Ryan_Leys->career = $Ryan_Leys_Career;$Lewis_Li->career = $Lewis_Li_Career;$Stephen_Mais->career = $Stephen_Mais_Career;$Trevor_McCrobie->career = $Trevor_McCrobie_Career;$Chris_Murphy->career = $Chris_Murphy_Career;$Nick_Newhart->career = $Nick_Newhart_Career;$Matt_Perez->career = $Matt_Perez_Career;$Eric_Shi->career = $Eric_Shi_Career;$Max_Schineller->career = $Max_Schineller_Career;$David_Thornton->career = $David_Thornton_Career;$Jamie_Xie->career = $Jamie_Xie_Career;$Casey_Abel->career = $Casey_Abel_Career;$Katie_Aldrich->career = $Katie_Aldrich_Career;$Carolyn_Banak->career = $Carolyn_Banak_Career;$Emily_Barlow->career = $Emily_Barlow_Career;$Halle_Berger->career = $Halle_Berger_Career;$Maria_Bermudez->career = $Maria_Bermudez_Career;$Eileen_Butler->career = $Eileen_Butler_Career;$Nancy_Chen->career = $Nancy_Chen_Career;$Bailey_Fritzinger->career = $Bailey_Fritzinger_Career;$Stephanie_Gee->career = $Stephanie_Gee_Career;$Julia_Hannigan->career = $Julia_Hannigan_Career;$Morgan_Lenney->career = $Morgan_Lenney_Career;$Corinne_Lizzio->career = $Corinne_Lizzio_Career;$Cayla_Mabie->career = $Cayla_Mabie_Career;$Maya_Philbrick->career = $Maya_Philbrick_Career;$Samantha_Pinkes->career = $Samantha_Pinkes_Career;$Abby_Plummer->career = $Abby_Plummer_Career;$Gina_Reid->career = $Gina_Reid_Career;$Alice_Renaud->career = $Alice_Renaud_Career;$Avery_Schnell->career = $Avery_Schnell_Career;$Mara_Silka->career = $Mara_Silka_Career;$Shannon_Song->career = $Shannon_Song_Career;$Katya_Stonkevitch->career = $Katya_Stonkevitch_Career;$Basia_Tou->career = $Basia_Tou_Career;$Shelbe_Van_Winkle->career = $Shelbe_Van_Winkle_Career;$Selena_Wallace->career = $Selena_Wallace_Career;$Tyler_Birn->career = $Tyler_Birn_Career;$WenQin_Chen->career = $WenQin_Chen_Career;$Imran_Elmaarouf->career = $Imran_Elmaarouf_Career;$Ryan_Fleischer->career = $Ryan_Fleischer_Career;$Thomas_Kenyon->career = $Thomas_Kenyon_Career;$Artem_Movchan->career = $Artem_Movchan_Career;$Darragh_Ogorman->career = $Darragh_Ogorman_Career;$Allison_Bloom->career = $Allison_Bloom_Career;$Hanalei_Fong->career = $Hanalei_Fong_Career;$Alexis_Laundry->career = $Alexis_Laundry_Career;$Tullia_Lieb->career = $Tullia_Lieb_Career;$Grace_Ronca->career = $Grace_Ronca_Career;$Claire_Depew->career = $Claire_Depew_Career;$Katerina_Nozhenko->career = $Katerina_Nozhenko_Career;$Veditha_Regulapati->career = $Veditha_Regulapati_Career;
//Alumni
$April_Donahue->career = $April_Donahue_Career;$Kevin_Lua->career = $Kevin_Lua_Career;$Trevor_Ryan->career = $Trevor_Ryan_Career;$Joseph_Rogan->career = $Joseph_Rogan_Career;$Gad_Baron->career = $Gad_Baron_Career;$Gregory_Breitler->career = $Gregory_Breitler_Career;$Alison_Baggen->career = $Alison_Baggen_Career;$Elizabeth_Brown->career = $Elizabeth_Brown_Career;$Renato_Calatroni->career = $Renato_Calatroni_Career;$Ana_Echavarria->career = $Ana_Echavarria_Career;$Lauren_Emery->career = $Lauren_Emery_Career;$Stephanie_Giancola->career = $Stephanie_Giancola_Career;$Melanie_Norton->career = $Melanie_Norton_Career;$Alexandra_Schroeder->career = $Alexandra_Schroeder_Career;$Erika_Nothnagel->career = $Erika_Nothnagel_Career;$Jaqueline_Skinner->career = $Jaqueline_Skinner_Career;$Nina_Fattore->career = $Nina_Fattore_Career;$Elizabeth_Brown->career = $Elizabeth_Brown_Career;$Danielle_Parise->career = $Danielle_Parise_Career;$Audrey_Miller->career = $Audrey_Miller_Career;$Sarah_Tannenbaum->career = $Sarah_Tannenbaum_Career;$Olivia_Mabrey->career = $Olivia_Mabrey_Career;$Catherine_Fong->career = $Catherine_Fong_Career;$Katherine_Alexander->career = $Katherine_Alexander_Career;$Kimberly_Forester->career = $Kimberly_Forester_Career;$Eryn_Nakashima->career = $Eryn_Nakashima_Career;$Austin_Mateo->career = $Austin_Mateo_Career;$Kaitlyn_Fagundes->career = $Kaitlyn_Fagundes_Career;$Camille_Schiff->career = $Camille_Schiff_Career;$Eleanor_Broadbent->career = $Eleanor_Broadbent_Career;$Carolina_Vargas->career = $Carolina_Vargas_Career;$Mark_Bacigalupo->career = $Mark_Bacigalupo_Career;$Robert_Danemiller->career = $Robert_Danemiller_Career;$Verron_Darville->career = $Verron_Darville_Career;$David_Ellis->career = $David_Ellis_Career;$Jonathan_Ingraham->career = $Jonathan_Ingraham_Career;$Kristian_Kemppainen->career = $Kristian_Kemppainen_Career;$Nicholas_Matook->career = $Nicholas_Matook_Career;$Daniel_Ricardelli->career = $Daniel_Ricardelli_Career;$Parker_Traugot->career = $Parker_Traugot_Career;$Jerry_Yu->career = $Jerry_Yu_Career;$Jason_Wu->career = $Jason_Wu_Career;$Maya_Gilchrist->career = $Maya_Gilchrist_Career;$Emily_Johnson->career = $Emily_Johnson_Career;$Taylor_Obey->career = $Taylor_Obey_Career;$Caitlin_Winters->career = $Caitlin_Winters_Career;$Katy_Budra->career = $Katy_Budra_Career;$Emma_Boutcher->career = $Emma_Boutcher_Career;$Anna_Smith->career = $Anna_Smith_Career;$Brittany_Bohannon->career = $Brittany_Bohannon_Career;$Alyssa_Mokay->career = $Alyssa_Mokay_Career;




//////////////A NOTE ABOUT THE SWIMMER ARRAYS BELOW//////////////////////
//1: Only include swimmers whose objects appear above in any of these lists (aka don't add imaginary people).
//2. all_men and all_women will automatically update as a combination of current and past swimmers.
//3. A swimmer should never appear on both Current_(gender) and Past_(gender).
//   The 2 lists are mutually exclusive. Once a swimmer leaves the team, he or she
//   should be removed from Current_(gender) and be added to Past_(gender).
//4. To add a swimmer, create their object and then add them to the Current_(gender) list.

//A list of all male siwmmers currently on NUSC
//NOTE: if a swimmer is on co-op or taking a semester off, they should probably stay on the roster
$current_men = array($Joey_Abbott_Schiff,
					 $Connor_Barnes,
					 $Chris_Bartlett,
					 $Tyler_Birn,
					 $Hang_Chen,
					 $WenQin_Chen,
					 $Brian_Desnoyers,
					 $Nate_Desrochers,
					 $Liam_Doyle,
					 $Imran_Elmaarouf,
					 $Ryan_Fleischer,
					 $Martin_Fortuny,
					 $Brett_Galus,
					 $Brennan_Garber,
					 $Kevin_Gell,
					 $Brady_Greene,
					 $Yawei_Hao,
					 $Gavin_Harris,
					 $Charlie_Haviland,
					 $Brandon_Hoang,
					 $Kurt_Jaisle,
					 $Thomas_Kenyon,
					 $Matthew_Knapik,
					 $Matt_Landon,
					 $Ryan_Leys,
					 $Lewis_Li,
					 $Stephen_Mais,
					 $Trevor_McCrobie,
					 $Artem_Movchan,
					 $Chris_Murphy,
					 $Nick_Newhart,
					 $Darragh_Ogorman,
					 $Matt_Perez,
					 $Eric_Shi,
					 $Max_Schineller,
					 $David_Thornton,
					 $Jamie_Xie
					 );


//A list of all female siwmmers currently on NUSC
//NOTE: if a swimmer is on co-op or taking a semester off, they should probably stay on the roster
$current_women = array($Casey_Abel,
					 $Katie_Aldrich,
					 $Carolyn_Banak,
					 $Emily_Barlow,
					 $Halle_Berger,
					 $Allison_Bloom,
					 $Eleanor_Broadbent,
					 $Nancy_Chen,
					 $Claire_Depew,
					 $Hanalei_Fong,
					 $Bailey_Fritzinger,
					 $Stephanie_Gee,
					 $Julia_Hannigan,
					 $Alexis_Laundry,
					 $Morgan_Lenney,
					 $Tullia_Lieb,
					 $Corinne_Lizzio,
					 $Katerina_Nozhenko,
					 $Maya_Philbrick,
					 $Samantha_Pinkes,
					 $Abby_Plummer,
					 $Veditha_Regulapati,
					 $Alice_Renaud,
					 $Grace_Ronca,
					 $Katya_Stonkevitch,
					 $Basia_Tou,
					 $Shelbe_Van_Winkle
					 );



//A list of all male NUSC past swimmers (aka alumni)
$past_men = array($Yawei_Hao,
				  $Kevin_Lua,
				  $Joseph_Rogan,
				  $Trevor_Ryan,
				  $Gad_Baron,
				  $Renato_Calatroni,
				  $Sam_Kang,
				  $Gregory_Breitler,
				  $Mark_Bacigalupo,
				  $Robert_Danemiller,
				  $Verron_Darville,
				  $David_Ellis,
				  $Jonathan_Ingraham,
				  $Kristian_Kemppainen,
				  $Nicholas_Matook,
				  $Daniel_Ricardelli,
				  $Parker_Traugot,
				  $Jerry_Yu,
				  $Jason_Wu);


//A list of all female NUSC past swimmers (aka alumni)
$past_women = array($Mara_Silka,
					$April_Donahue,
					$Avery_Schnell,
					$Maria_Bermudez,
					$Gina_Reid,
					$Alison_Baggen,
					$Elizabeth_Brown,
					$Ana_Echavarria,
					$Lauren_Emery,
					$Stephanie_Giancola,
					$Melanie_Norton,
					$Alexandra_Schroeder,
					$Erika_Nothnagel,
					$Jaqueline_Skinner,
					$Nina_Fattore,
					$Elizabeth_Brown,
					$Danielle_Parise,
					$Audrey_Miller,
					$Eileen_Butler,
					$Sarah_Tannenbaum,
					$Olivia_Mabrey,
					$Catherine_Fong,
					$Katherine_Alexander,
					$Kimberly_Forester,
					$Selena_Wallace,
					$Eryn_Nakashima,
					$Austin_Mateo,
					$Kaitlyn_Fagundes,
					$Camille_Schiff,
					$Carolina_Vargas,
					$Maya_Gilchrist,
					$Emily_Johnson,
					$Taylor_Obey,
					$Caitlin_Winters,
					$Katy_Budra,
					$Emma_Boutcher,
					$Anna_Smith,
					$Brittany_Bohannon,
					$Alyssa_Mokay);



//Automatically populates as a combination of current and past men
//A list of all men (past and current) on NUSC
$all_men = array_merge($current_men,$past_men);

//Automatically populates as a combination of current and past women
//A list of all women (past and current) on NUSC
$all_women = array_merge($current_women,$past_women);


/*E-Board*/
//Tells the computer who's on E-Board. When E-Board positions change, you only need to change them here.
$M_President = $Kevin_Gell;
$M_VP = $Chris_Bartlett;
$M_Treasurer = $Nick_Newhart;
$M_Secretary = $Chris_Murphy;
$M_SID = $Charlie_Haviland;

$W_President = $Basia_Tou;
$W_VP = $Samantha_Pinkes;
$W_Treasurer = $Maya_Philbrick;
$W_Secretary = $Halle_Berger;
$W_SID = $Katya_Stonkevitch;

//IGNORE
//loads all the homemade functions that the site uses. They can be found at swimmingclub/NUSC/functions.php
require $_SERVER['DOCUMENT_ROOT'] . '/NUSC/functions.php';

//RUNNING FUNCTIONS
//very important, sets up a lot of things for the other pages to use when calculating things

$events = array('50 Freestyle','100 Freestyle','200 Freestyle','500 Freestyle',
				'1000 Freestyle','1650 Freestyle','50 Backstroke','100 Backstroke',
				'200 Backstroke','50 Breaststroke','100 Breaststroke','200 Breaststroke',
				'50 Butterfly','100 Butterfly','200 Butterfly','100 IM','200 IM','400 IM');

$relay_events = array('4x50 Freestyle Relay','4x100 Freestyle Relay','4x200 Freestyle Relay',
					  '4x50 Medley Relay','4x100 Medley Relay');

efficient_check_leadoffs($all_men);
efficient_check_leadoffs($all_women);


$male_club_records = get_club_records($events, $all_men);
$female_club_records = get_club_records($events, $all_women);
$male_relay_records = get_relay_records($relay_events, $all_men);
$female_relay_records = get_relay_records($relay_events, $all_women);


foreach($current_men as $swimmer) {
	if ($swimmer == $M_President) {
		$swimmer->eboard = '(P)';
	}
	if ($swimmer == $M_VP) {
		$swimmer->eboard = '(VP)';
	}
	if ($swimmer == $M_Treasurer) {
		$swimmer->eboard = '(T)';
	}
	if ($swimmer == $M_Secretary) {
		$swimmer->eboard = '(S)';
	}
	if ($swimmer == $M_SID) {
		$swimmer->eboard = '(SID)';
	}
}
foreach($current_women as $swimmer) {
	if ($swimmer == $W_President) {
		$swimmer->eboard = '(P)';
	}
	if ($swimmer == $W_VP) {
		$swimmer->eboard = '(VP)';
	}
	if ($swimmer == $W_Treasurer) {
		$swimmer->eboard = '(T)';
	}
	if ($swimmer == $W_Secretary) {
		$swimmer->eboard = '(S)';
	}
	if ($swimmer == $W_SID) {
		$swimmer->eboard = '(SID)';
	}
}

?>
