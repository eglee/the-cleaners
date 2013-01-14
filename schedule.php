<?php
$objConnect = mysql_connect("localhost","user_db","user_password") or die(mysql_error());   
$objDB = mysql_select_db("user_db");
$result = mysql_query("SELECT * FROM date");


echo "<script type='text/javascript'>\n";
$array = array();
while ($row = mysql_fetch_assoc($result)) {
    $array[] = $row['Booked'];
}
echo 'var array = '.json_encode($array).';';
echo "</script>";
//takes array of Booked value from Date table, populates JavaScript array
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Schedule | The Cleaners</title>

<!-- meta tags -->
<meta name="keywords" content=""/>
<meta name="description" content=""/>

<!-- stylesheets -->
<link rel="stylesheet" href="css/reset.css" type="text/css"/>
<link rel="stylesheet" href="css/common.css" type="text/css"/>
<link rel="stylesheet" href="css/layout.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'/>

<!-- javascript -->
<!--<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>-->
<script type='text/javascript'>

	function loaded() 
	{
			for(i=0; i<30; i++)
			{
				if(array[i].toString() == "1")
				{	
					document.getElementById(i).innerHTML = "BOOKED";
					document.getElementById("day" + i).className += " scheduled";
				}
			}
	}//goes through array of booked 0 and 1 values.  If booked, change class of particular div
</script>
</head>
<body onload="loaded();">
<div id="wrapper">

	<div id="header">
			<h1>
			<a href="index.html"><img src="images/logo.png" alt="Test Site" width="121" height="119"/></a>
			</h1>
        <div id="navigation">
				<ul>
					<li><a href="services.html">Services</a></li>
					<li><a href="schedule.php">Current Schedule</a></li>
					<li><a href="faq.html">FAQ</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
        </div>
    </div>
    
    
    <div id="main">
        <div id="content">
            <h1>Schedule: January 2012</h1>			 
			<div class="bluebox">
				<div id="days">
				<ul>
					<li>Sunday</li> <li>Monday</li> <li>Tuesday</li> <li>Wednesday</li> <li>Thursday</li> <li>Friday</li> <li>Saturday</li>
				</ul>
				</div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div id="day0" class="calendarday"><span class="daynumber">1</span></br></br><span id="0" class ="daynumber"></span></div>
				
				<div id="day1" class="calendarday"><span class="daynumber">2</span></br></br><span id="1" class ="daynumber"></span></div>
				<div id="day2" class="calendarday"><span class="daynumber">3</span></br></br><span id="2" class ="daynumber"></span></div>
				<div id="day3" class="calendarday"><span class="daynumber">4</span></br></br><span id="3" class ="daynumber"></span></div>
				<div id="day4" class="calendarday"><span class="daynumber">5</span></br></br><span id="4" class ="daynumber"></span></div>
				<div id="day5" class="calendarday"><span class="daynumber">6</span></br></br><span id="5" class ="daynumber"></span></div>
				<div id="day6" class="calendarday"><span class="daynumber">7</span></br></br><span id="6" class ="daynumber"></span></div>
				<div id="day7" class="calendarday"><span class="daynumber">8</span></br></br><span id="7" class ="daynumber"></span></div>
				
				<div id="day8" class="calendarday"><span class="daynumber">9</span></br></br><span id="8" class ="daynumber"></span></div>
				<div id="day9" class="calendarday"><span class="daynumber">10</span></br></br><span id="9" class ="daynumber"></span></div>
				<div id="day10" class="calendarday"><span class="daynumber">11</span></br></br><span id="10" class ="daynumber"></span></div>
				<div id="day11" class="calendarday"><span class="daynumber">12</span></br></br><span id="11" class ="daynumber"></span></div>
				<div id="day12" class="calendarday"><span class="daynumber">13</span></br></br><span id="12" class ="daynumber"></span></div>
				<div id="day13" class="calendarday"><span class="daynumber">14</span></br></br><span id="13" class ="daynumber"></span></div>
				<div id="day14" class="calendarday"><span class="daynumber">15</span></br></br><span id="14" class ="daynumber"></span></div>
				
				<div id="day15" class="calendarday"><span class="daynumber">16</span></br></br><span id="15" class ="daynumber"></span></div>
				<div id="day16" class="calendarday"><span class="daynumber">17</span></br></br><span id="16" class ="daynumber"></span></div>
				<div id="day17" class="calendarday"><span class="daynumber">18</span></br></br><span id="17" class ="daynumber"></span></div>
				<div id="day18" class="calendarday"><span class="daynumber">19</span></br></br><span id="18" class ="daynumber"></span></div>
				<div id="day19" class="calendarday"><span class="daynumber">20</span></br></br><span id="19" class ="daynumber"></span></div>
				<div id="day20" class="calendarday"><span class="daynumber">21</span></br></br><span id="20" class ="daynumber"></span></div>
				<div id="day21" class="calendarday"><span class="daynumber">22</span></br></br><span id="21" class ="daynumber"></span></div>
				
				<div id="day22" class="calendarday"><span class="daynumber">23</span></br></br><span id="22" class ="daynumber"></span></div>
				<div id="day23" class="calendarday"><span class="daynumber">24</span></br></br><span id="23" class ="daynumber"></span></div>
				<div id="day24" class="calendarday"><span class="daynumber">25</span></br></br><span id="24" class ="daynumber"></span></div>
				<div id="day25" class="calendarday"><span class="daynumber">26</span></br></br><span id="25" class ="daynumber"></span></div>
				<div id="day26" class="calendarday"><span class="daynumber">27</span></br></br><span id="26" class ="daynumber"></span></div>
				<div id="day27" class="calendarday"><span class="daynumber">28</span></br></br><span id="27" class ="daynumber"></span></div>
				<div id="day28" class="calendarday"><span class="daynumber">29</span></br></br><span id="28" class ="daynumber"></span></div>
				
				<div id="day29" class="calendarday"><span class="daynumber">30</span></br></br><span id="29" class ="daynumber"></span></div>
				<div id="day30" class="calendarday"><span class="daynumber">31</span></br></br><span id="30" class ="daynumber"></span></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				<div class="calendarday"></div>
				
			</div>
        </div>
    </div>    
    
    <div id="footer">
	<ul>
        <li><a href="index.html">Home</a> <span>|</span></li>
        <li><a href="services.html">Services</a><span>|</span></li>
        <li><a href="schedule.html">Current Schedule</a><span>|</span></li>
        <li><a href="faq.html">FAQ</a><span>|</span></li>
        <li><a href="about.html">About</a></li>
   </ul>
   Copyright &copy; 2012, Le Cleaners
   </div>      
</div>

</body>
</html>