<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1>something</h1>";
$transm = 0;
$documnts = 0;

$string = "5 d:10 \n 423 d:20  \n 132 d:30 \n 6654 d:40\n 87695 d:50";
$magics = "0...10:29 \n 123:9\n 125:7";

$my_array = explode("\n", $string);
$magic_array = explode("\n", $magics);
$my_nested_array = [];
$sum = 0;
foreach($my_array as $key => $item) {
    $my_nested_array[$key] = array_map('intval', explode(' d:', $item));
    $sum += $my_nested_array[$key][1];

}
$string = "100...102 d:10 t:1.75 \n 423 d:20 t:10 \n 132 d:30 t:20\n 6654 d:40 t:30\n 87695 d:50 t:40";
$my_array = explode("\n", $string);
$my_nested_array = [];

$tot_doc = 0;
$tot_time = 0.00;
$tot_transm = 0;

echo "<p> 2...5 d:15 t:3 \n 423 d:20 t:1,25 \n 132 d:30 t:20\n 6654 d:40 t:30\n 87695 d:50 t:40</p>";
foreach($my_array as $exStr){
    if (strpos($exStr, '...')) {
        echo "<h1> Found ... </h1>";
        $pos = strpos($exStr,'...');
        echo $pos . "<br>";
        $first = substr($exStr,0,$pos);
        echo $first;
        $pos_space = strpos($exStr," ");
        $second = substr($exStr,$pos + 3, $pos_space - $pos - 3);
        $tot_transm += $second - $first + 1;
        echo "<p> second number: " . $second . "<br>";
        
    } else {
        $tot_transm += 1;
    }
    $explode_d = explode(' d:', $exStr);
    $explode_t = explode(' t:',$explode_d[1]);
    $tot_doc += $explode_t[0];
    $tot_time += $explode_t[1];
    #echo "<h2> Explode d </h2>";
    #echo var_dump($explode_t);
}
echo "<h2> Tot Documents </h2>";
echo $tot_doc;
echo "<h2> Tot Time </h2>";
echo $tot_time;
echo "<h2> Tot Transmittals </h2>";
echo $tot_transm;


echo "<h1>Magic Array</h1>";
foreach($magic_array as $key => $item){
    if(strpos($magic_array[$key],'...')) {
        $pos = strpos($magic_array[$key]);

        echo "found ...";
    }
    echo var_dump($magic_array[$key]);
}
echo "<h1>Magic Array END</h1>";
echo "var_dump($my_array)";
echo var_dump($my_nested_array);
echo "<h1> vardump pos 0 </h1>";
echo var_dump($my_nested_array[0]);
echo "<h1> vardump pos 1 </h1>";
echo var_dump($my_nested_array[1]);
echo "<h1> Sum of Values </h1>";
echo $sum;

   # if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_save_class
    {
        public function after_save_method(&$bean, $event, $arguments)
        {
	    $description = $bean->description;
            $my_array = explode("\n", $description);
	    $nested_array = array();
	    $sum = 0;
	    foreach($my_array as $key => $item) {
		$nested_array[$key] = explode(":", $item);
		$value = $nested_array[$key][0];
		$sum += $value;
	    }
	    $count = count($my_array);
	    $tot = array_sum($nested_array);
	    # with string as 100:1,200:2, etc.. 
	    #$bean->description = $nested_array[3][1];
        $bean->description = $sum;
        echo $description;
        echo $sum;
	    #$bean->save();
        }
    }


?>
</body>
</html>