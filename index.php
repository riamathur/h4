<?php

$obj = new main();


class main
{

function __construct()
{
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo '</br>';
attempts::replace($date);
attempts::compare($date,$tar);
attempts::position(str_replace("-","/",$date));
attempts::scount($date);
attempts::slength($date);
attempts::asc($date);
attempts::l2($date);
attempts::sep(str_replace("-","/",$date));
attempts::leapyear($year);
}
}
class attempts

{
	function replace($date)
	{
	echo '<br>';
      echo 'The new $date is: ' . str_replace("-","/",$date);
      echo '<br>';

	}
	
	
	function compare($date,$tar)

	{
	echo '<br>';
	$result=strcmp($date,$tar);

	if($result==0){
        echo "Oops";
	}
	else if($result>0){
	        echo "The future";
		}
		else {
		        echo "The past";
			}
			echo "</br>";
	}
       function position($date )
       {

       	echo '<br>';
	for($i=0; $i<substr_count($date,"/");$i++)
	{
	$t=$t+1;
	$t=stripos($date,"/",$t);
	echo 'The position of / is: '. $t.' ';
	echo '<br>';
	}
	echo '<br>';

	}

	function scount($date)
	{
	echo '</br>';
	$strc=str_word_count($date);
	echo 'The number of words in $date is: '.$strc;
	echo '<br>';
	}
	

	function slength($date)
	{
	echo '</br>';
	$sl=strlen($date);
	echo 'The length of the string is: '.$sl;
	echo '<br>';
	}
	
	function asc($date)
	{
	echo '</br>';
	echo 'The ascii value of the first character is '. ord($date);
	echo '<br>';
	}

	function l2($date)
	{
	echo '<br>';
	echo 'The last two characters of the date are: ';
	$arr=str_split($date);
	$a=count($arr);
	for($i=0;$i<2;$i++)
	{
	$a=$a-1;
	
	echo $arr[$a];
	echo ' ';

	}
	echo '<br>';
	}
	
	function sep($date)
	{
	echo '<br>';
	echo 'The separated date is: ';
	$arr= (explode("/",($date)));
	$a=count($arr);
	for($i=0;$i<$a;$i++)
	{
	echo $arr[$i].' ';
	}
	}
	
	function leapyear($year)
	{
	echo '<br>';
	foreach($year as $value)
	{
	echo '<br>';
	for($i=0;$i<1;$i++)
	{
	switch(value)
	{
	case( ($value%4)==0 and ($value%100)!=0 or ($value%400)==0);
	echo $value.'->'. 'True'.'<br>';
	break;

	default: 
	echo $value.'->'.'False'.'<br>';
	}
	}
	}
	}


}
?>
