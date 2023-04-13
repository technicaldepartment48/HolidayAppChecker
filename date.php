<?php



echo "Today is " . date("Y/m/d") . "<br>";


$day = date('M-d');

/*Holidays include
New Year
Independence day
Christmas day
*/

$holidays = array('01-01','10-01','12-25');

if (in_array($day,$holidays)){

    echo "Today is a public holiday";

}
else{

    echo "Today is not a public holiday";

}



?>