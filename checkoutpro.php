<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Regular Service Checkout | Cleaning Service</title>

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


</head>
<body>
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
            <h1>Regular Service Checkout</h1>			 
			<div class="bluebox">
			<form id="payment" action="submit.php" method="post">
	<fieldset>
		<legend>Your details</legend>
		<ol>
			<li>
				<label for="name">Name</label>
				<input id="name" name="name" type="text" placeholder="First and last name" required autofocus>
			</li>
			<li>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="example@domain.com" required>
			</li>
			<li>
				<label for="phone">Phone</label>
				<input id="phone" name="phone" type="tel" placeholder="Eg. +447500000000" required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Service address</legend>
		<ol>
			<li>
				<label for="street">Street</label>
				<input id="street" name="street" required></textarea>
			</li>
			<li>
				<label for="city">City</label>
				<input id="city" name="city" type="text" required>
			</li>
			<li>
				<label for="state">State</label>
				<input id="state" name="state" type="text" required>
			</li>
			<li>
				<label for="zip">Zip</label>
				<input id="zip" name="zip" type="text" required>
			</li>
			<li>
				<label for="date">Date</label>
				<select name="month">
				<option value="01">January</option>
				</select>
				<select name="day">
				<option value="01">1</option>
				<option value="02">2</option>
				<option value="03">3</option>
				<option value="04">4</option>
				<option value="05">5</option>
				<option value="06">6</option>
				<option value="07">7</option>
				<option value="08">8</option>
				<option value="09">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>
				<select name="year">
				<option value="2012">2012</option>
				</select>
			</li>
			<li>
				<label for="time">Time</label>
				<input id="time" name="time" type="text" placeholder="3:30 PM" required>
			</li>
		</ol>
	</fieldset>
	<fieldset id="carddetails">
		<legend>Card details</legend>
		<ol>		
			<li>
				<fieldset>
					<legend>Card type</legend>
					<ol>
						<li>
							<input id="visa" name="cardtype" type="radio" value="visa">
							<label for="visa">VISA</label>
						</li>
						<li>
							<input id="amex" name="cardtype" type="radio" value="amex">
							<label for="amex">AmEx</label>
						</li>
						<li>
							<input id="mastercard" name="cardtype" type="radio" value="mastercard">
							<label for="mastercard">Mastercard</label>
						</li>
					</ol>
				</fieldset>
			</li>
			<li>
				<label for="cardnumber">Card number</label>
				<input id="cardnumber" name="cardnumber" required>
			</li>
			<li>
				<label for="secure">Security code</label>
				<input id="secure" name="secure" required>
			</li>
			<li>
				<label for="namecard">Name on card</label>
				<input id="namecard" name="namecard" type="text" placeholder="Exact name as on the card" required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<button type="submit" name="bundle" value="pro">place order</button>
	</fieldset>
</form>
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
   Copyright &copy; 2012, Test
   </div>      
</div>

</body>
</html>