<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color:white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #38444d;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
textarea {
  width: 90%;
  height: 600px;
  margin: auto;
}
</style>
</head>
<body>

<ul>
  <li><a href="https://www.bbb.org/us/ut/orem/profile/solar-installation/blue-raven-solar-llc-1166-90013405/customer-reviews" target="_blank">Blue Raven</a></li>
  <li><a href="https://www.bbb.org/us/ca/temecula/profile/solar-energy-contractors/freedom-forever-llc-1066-850031401/customer-reviews" target="_blank">Freedom Forever</a></li>
  <li><a href="https://www.bbb.org/us/ut/orem/profile/solar-energy-equipment-dealers/ion-solar-llc-1166-22338175/customer-reviews" target="_blank">Ion Solar</a></li>
  <li><a href="https://www.bbb.org/us/ca/del-mar/profile/solar-energy-product-services/powur-1126-172018051/customer-reviews" target="_blank">Powur</a></li>
  <li><a href="https://www.bbb.org/us/ca/san-francisco/profile/solar-energy-equipment-dealers/sunrun-inc-1116-312886/customer-reviews" target="_blank">SunRun</a></li>
  <li><a href="https://www.bbb.org/us/tx/austin/profile/auto-manufacturers/tesla-inc-0825-1000206071/customer-reviews" target="_blank">Tesla Energy</a></li>
</ul>





<?php

if ( !empty($_POST) ) {
	
	$inputString = $_POST['reviews'];
	$inputString = nl2br($inputString);
	$inputString = substr($inputString, strpos($inputString, '/20')-5);
//	$inputString = str_replace('\r','',$inputString);
//	$inputString = str_replace('\n','',$inputString);
	
	if ( $_POST['company'] == "br" ) {
		
		$startString = 'Blue Raven Solar, LLC Response';
		$endString = '1 star';

		$result = removeBetweenStrings($inputString, $startString, $endString);
		
		$startString = "Review from ";
		$endString = "1 star";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("Customer Response","<br>Customer Response",$result);
		
		$startString = "Customer Response";
		$endString = "<br />
<br />
<br />";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("<br />
<br />
<br />","<br />
<br />",$result);

		$result = substr($result, 0, strpos($result, "Blue Raven Solar, LLC Response"));
		
	} elseif ( $_POST['company'] == "ff" ) {
		
		$startString = 'Freedom Forever, LLC Response';
		$endString = '1 star';

		$result = removeBetweenStrings($inputString, $startString, $endString);
		
		$startString = "Review from ";
		$endString = "1 star";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("Customer Response","<br>Customer Response",$result);
		
		$startString = "Customer Response";
		$endString = "<br />
<br />
<br />";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("<br />
<br />
<br />","<br />
<br />",$result);

		$result = substr($result, 0, strpos($result, "Freedom Forever, LLC Response"));
		
	} elseif ( $_POST['company'] == "is" ) {
		
		$startString = 'Ion Solar, LLC Response';
		$endString = '1 star';

		$result = removeBetweenStrings($inputString, $startString, $endString);
		
		$startString = "Review from ";
		$endString = "1 star";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("Customer Response","<br>Customer Response",$result);
		
		$startString = "Customer Response";
		$endString = "<br />
<br />
<br />";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("<br />
<br />
<br />","<br />
<br />",$result);

		$result = substr($result, 0, strpos($result, "Ion Solar, LLC Response"));
		
	} elseif ( $_POST['company'] == "ps" ) {
		
		$startString = 'Powur Response';
		$endString = '5 stars';

		$result = removeBetweenStrings($inputString, $startString, $endString);
		
		$startString = "Review from ";
		$endString = "5 stars";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("Customer Response","<br>Customer Response",$result);
		
		$startString = "Customer Response";
		$endString = "<br />
<br />
<br />";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("<br />
<br />
<br />","<br />
<br />",$result);

		$result = substr($result, 0, strpos($result, "Powur Response"));
		
	} elseif ( $_POST['company'] == "sr" ) {
		
		$startString = 'Sunrun, Inc. Response';
		$endString = '1 star';

		$result = removeBetweenStrings($inputString, $startString, $endString);
		
		$startString = "Review from ";
		$endString = "1 star";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("Customer Response","<br>Customer Response",$result);
		
		$startString = "Customer Response";
		$endString = "<br />
<br />
<br />";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("<br />
<br />
<br />","<br />
<br />",$result);

		$result = substr($result, 0, strpos($result, "Sunrun, Inc. Response"));
		
	} elseif ( $_POST['company'] == "te" ) {
		
		$startString = 'Tesla Energy Solar Response';
		$endString = '1 star';

		$result = removeBetweenStrings($inputString, $startString, $endString);
		
		$startString = "Review from ";
		$endString = "1 star";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("Customer Response","<br>Customer Response",$result);
		
		$startString = "Customer Response";
		$endString = "<br />
<br />
<br />";

		$result = removeBetweenStrings($result, $startString, $endString);
		
		$result = str_replace("<br />
<br />
<br />","<br />
<br />",$result);

		$result = substr($result, 0, strpos($result, "Tesla Energy Solar Response"));
		
	}
	
	echo $result;
	
	
}

function removeBetweenStrings($inputString, $startString, $endString) {
    $pattern = '~(?:' . preg_quote($startString) . ')(.*?)(?:' . preg_quote($endString) . ')~s';
    return preg_replace($pattern, '', $inputString);
}


?>

<?php if ( empty($_POST) ) { ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	<select name="company" required>
		<option> - Select Company - </option>
		<option value="br">Blue Raven</option>
		<option value="ff">Freedom Forever</option>
		<option value="is">Ion</option>
		<option value="ps">Powur</option>
		<option value="sr">Sun Run</option>
		<option value="te">Tesla Energy</option>
	</select><br>
	<textarea name="reviews"></textarea><br>
	<input type="submit" value="Submit">
</form>
<?php } ?>
</body>
</html>
