<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_save_class
    {
		public function tot_time($bean, $event, $arguments){
			$hours = $bean->hours_c;
			$quantity = $bean->quantity_c;
			$bean->tot_est_time_c = $hours * $quantity;
			$bean->save();
		}
    }

?>
