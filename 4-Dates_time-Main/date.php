<?php

//	$date = date_create("2017-01-02");
//	$date = date_modify($date, "+5 days");
//	echo date_format($date, "Y-m-d");
	


//echo $time = strtotime('10:00');echo '<br />';
//echo $startTime = date("H:i:s", strtotime('-30 minutes', $time));echo '<br />';
//echo $endTime = date("H:i", strtotime('+30 minutes', $time));echo '<br />';

echo 'Now: '.$now = time();echo '<br />';

echo 'User_input: '.$ten_minutes = $now + (10);echo '<br />';

echo 'StartDate: '.$startDate = date('m-d-Y H:i:s', $now);echo '<br />';
echo 'EndDate: '.$endDate = date('m-d-Y H:i:s', $ten_minutes);echo '<br />';

//exit();

while(true) {
    if($now){
        echo "Ok . $now . <br />";
    }
    $ten_minutes;
} 

?>
