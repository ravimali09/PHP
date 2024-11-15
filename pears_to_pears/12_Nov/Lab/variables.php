<?php

$greeting="Good Morning";
echo "String : ".$greeting."<br>";

$age=21;
echo "Integer : ".$age."<br>";

$price=1999.99;
echo "Float : ".$price."<br>";

$isAvailable= true;
echo "Boolean : ".($isAvailable?'ture':'false')."<br>";

$fruits=["Apple","Banana","Orange","Mango"];
echo "Array : ".implode(", ",$fruits)."<br>";

$empty= null;
echo "Null : ".(is_null($empty)?'null': 'not null')."<br>";


?>