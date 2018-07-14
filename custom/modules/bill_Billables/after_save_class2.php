<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_save_class
    {
        public function after_save_method($bean, $event, $arguments)
        {
		#$my_array = [];
		$string = $bean->description;
		$my_array = isset($string) ? explode("\n", $string) : 'string not Setted';
		$tot_doc = 0;
		$tot_time = 0.00;
		$tot_transm = 0;
		#$thest = 'ss';
		#$double = $string;
		#$bean->billami_c = $my_array[1]; 
		
		foreach($my_array as $exStr){
			if (!strpos($exStr,'#')) {

				if (strpos($exStr, '...')) {
					$pos = strpos($exStr,'...');
					$first = substr($exStr,0,$pos);
					$pos_space = strpos($exStr," ");
					$second = substr($exStr,$pos + 3, $pos_space - $pos - 3);
					$tot_transm += $second - $first + 1;
				} else {
					$tot_transm +=1;
				}
				#$thest = '3333';
				$explode_d = explode(' d:', $exStr);
				$explode_t = isset($explode_d[1]) ? explode(' t:',$explode_d[1]) : 'Not Set';
				$tot_doc += isset($explode_t[0]) ? $explode_t[0] : 'Not Set';
				$tot_time += isset($explode_t[1]) ? $explode_t[1] : 'Not Set';
			}
		}
		$billami = 'Transm: '. $tot_transm ."\n". 'Doc: '. $tot_doc ."\n".  'Time: '. $tot_time;
		$bean->billami_c = $billami;
		$hours = $bean->hours_c;
		$quantity = $bean->quantity_c;
		$bean->tot_est_time_c = $hours * $quantity;
	    $bean->save();
		}
		public function tot_time($bean, $event, $arguments){
			$hours = $bean->hours_c;
			$quantity = $bean->quantity_c;
			$bean->tot_est_time_c = $hours * $quantity;
			$bean->save();
		}
    }

?>

