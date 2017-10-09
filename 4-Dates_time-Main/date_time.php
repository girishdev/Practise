<?php

	echo $today = date("d/m/Y");
	echo '<br />';echo '<br />';
	echo $today = date("d/M/Y");
	echo '<br />';echo '<br />';
	echo $today = date("d/M/Y");
	echo '<br />';echo '<br />';
	echo '<br />';
	$timestamp = time();
	echo($timestamp);
	echo '<br />';
	var_dump(getdate());
	echo '<br />';
	var_dump(localtime());

	//phpinfo();
	
	/*$date = new DateTime;
	
	$date->setDate('2016', '09', '03');
	var_dump($date);
	echo '<br />';echo '<br />';
	$date->setTime(12, 38, 30);
	var_dump($date);/**/
	
	/*var_dump($date);
	
	echo '<br />';	
	echo $date->format('dS M Y');
	
	echo '<br />';
	echo $date->getTimestamp();// current unix time stamp
	
	echo '<br />';
	var_dump($date->getTimezone());
	
	echo '<br />';
	echo $date->getTimezone()->getName();
	
	echo '<br />';
	$dateString = '2016-09-03';
	$date = DateTime::createFromFormat('Y-m-d', $dateString);
	var_dump($date);
	echo $date->format('dS M Y');/**/

//Modifying days:-

	/*$date = new DateTime;
	$hours = 2;
	//$date->add(new DateInterval('P10DT2H'));	//Modifying by 10 day and 2hr
	$date->add(new DateInterval('PT' .$hours. 'H'));	//Modifying by 10 day and 2hr
	//$date->sub(new DateInterval('P10DT2H'));	//Modifying by 10 day and 2hr
	var_dump($date);/**/

	/*$date = new DateTime('+2 days 2 hours');
	//$date = new DateTime('-2 days 2 hours');	
	var_dump($date);/**/

	/*
//cllaing by reference:-
	$date = new DateTime;
	
	$newDate = clone $date;
	$newDate = $newDate->modify('+2 days');		//cllaing by reference so we are usig clone
	
	var_dump($date);echo '<br />';
	var_dump($newDate);/**/
	
	/*$date = new DateTime;
	$myBirthday = (new DateTime)->setDate('1990', '09', '04')->setTime(07, 30, 00);
	//$myBirthday = (new DateTime('04 September'))->setTime(07, 30, 00);
	
	$timeUntilBirthday = $date->diff($myBirthday);
		//echo '<pre>';
		//var_dump($timeUntilBirthday->d);
		//echo '</pre>';

	echo $timeUntilBirthday->format('%m months %d days %h hours');/**/

//Comparisons days:-
	/*$date = new DateTime('2016-12-05 12:01:00');
	$date2 = new DateTime('2016-12-05 12:0:00');
	
	if($date > $date2){
		echo 'Yes';
	} else {
		echo 'No';
	}
	echo '<br />';
	echo $date->format('Y');/*/
	
//Timezones
	/*$date = new DateTime;
	//$date->setTimezone(new DateTimezone('Europe/London'));
	
	$date = new DateTime('now', new DateTimezone('Europe/London'));
	var_dump($date);/**/
	
	//To see list Tinezones:-
	/*echo '<pre>';
	var_dump(DateTimeZone::listIdentifiers());
	echo '</pre>';/**/
	
	//$date = new DateTime;
	//$date = new DateTime('now', new DateTimezone(DateTime->timezone));
	//var_dump($date);
	
	/*$timezone= 'Europe/London';
	date_default_timezone_set($timezone);
	$date = new DateTime;
	var_dump($date);/**/
	
//DateTime Period:-
	/*$start = new DateTime;
	$start->setTime(8, 0, 0);
	
	$end = clone $start;
	$end->setTime(20, 0, 0);
	
	$interval = new DateInterval('PT1H');
	
	$dateRange = new DatePeriod($start, $interval, $end);/**/
	
?>
<!--//DateTime Period:-
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<select name="time" id="time">
		<?php //foreach($dateRange as $date): ?>
			<option value="<?php //echo $date->format('H:i:s') ?>"><?php //echo $date->format('H:i:s') ?></option>
		<?php //endforeach; ?>
	</select>
</body>
</html>-->

<?php

//echo time();
//echo microtime();
//echo microtime(true);
//echo date('d m y');
//echo date('D M Y');
//var_dump(checkdate(9, 31, 2016));

/*foreach(timezone_identifiers_list() as $timezone){
	echo $timezone . '<br />';
}/**/

/*date_default_timezone_set('Asia/Kolkata');

function diffForHumans(DateTime $date){
	
	$currentDate = new DateTime;
	
	$difference = $currentDate->diff($date);
	
	$unit = 'second';
	$count = $difference->s;
	
	switch(true){
		case $difference->y > 0:
			$unit = 'year'; 
			$count = $difference->y;
			break;
		case $difference->m > 0:
			$unit = 'month'; 
			$count = $difference->m;
			break;
		case $difference->d > 0:
			$unit = 'day'; 
			$count = $difference->d;
			break;
		case $difference->h > 0:
			$unit = 'hour'; 
			$count = $difference->h;
			break;
		case $difference->i > 0:
			$unit = 'minute';
			$count = $difference->i;
			break;
	}
	
	if($count == 0){
		$count = 1;
	}
	
	if($count !== 1){
		$unit .= 's';
	}
	
	$invert = $difference->invert === 0 ? 'from now':'ago';
	
	return "{$count} {$unit} {$invert}";
}

$date = new DateTime('2016-10-03 15:36:00');
//$date = new DateTime('+2 days');

echo diffForHumans($date);/**/


//testing purpos only:-

/*$date = new DateTime('2000-01-01', new DateTimeZone('Pacific/Nauru'));
echo $date->format('Y-m-d H:i:sP') . "\n";/**/

/*$date = new DateTime();
echo $date->format('U = Y-m-d H:i:s') . "<br />";

$date->setTimestamp(1171502725);
echo $date->format('U = Y-m-d H:i:s') . "<br />";/**/

/*$date = new DateTime('2001-01-01');

$date->setTime(14, 55, 12);
echo $date->format('Y-m-d H:i:s') . "\n";/**/

/*$date = new DateTime('2016-10-03');
$date->modify('+2 day');
echo $date->format('Y-m-d');/**/

/*try {
    $date = new DateTime('asdfasdf');
} catch (Exception $e) {
    // For demonstration purposes only...
    print_r(DateTime::getLastErrors());

    // The real object oriented way to do this is
    //echo $e->getMessage();
}
/**/


?>