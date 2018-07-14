<?php

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
	    $bean->save();
        }
    }

?>

