<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_retrieve
    {
        public function after_save_method($bean, $event, $arguments)
        {
			
			$bean->name = 'pips';
			
			//If relationship is loaded   
			/*if ($bean->load_relationship('AOS_Invoices')) {
				//Fetch related beans
				$relatedBeans = $bean->aos_invoices->getBeans();
				$parentBean = false;
				if (!empty($relatedBeans)) {
					//order the results
					reset($relatedBeans);

					//first record in the list is the parent
					$parentBean = current($relatedBeans);
					$p_name += $parentBean->name;
					$bean->name = $p_name;
					$bean->save();
				}
			}*/
		$bean->save();
		}
		
    }
?>

