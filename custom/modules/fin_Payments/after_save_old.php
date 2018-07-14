<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_save
    {
		public function after_save_method($bean, $event, $arguments)
        {
			if ($bean->raw_amount_c > 0){
				$bean->payments_type_c = 'Incoming';
				$budget_type = 'Incoming';
			} else {
				$budget_type = $bean->payments_type_c;
			}/*
			if ($bean->load_relationship('fin_cost_centers_fin_payments_1')) {
				//Fetch related beans
				$relatedBeans = $bean->fin_cost_centers_fin_payments_1->getBeans();
				$parentBean = false;
				if (!empty($relatedBeans)) {
					//order the results
					reset($relatedBeans);

					//first record in the list is the parent
					$parentBean = current($relatedBeans);
					$budget_type = $parentBean->budget_type_c;
					$bean->payments_type_c = $budget_type;
				}
			}*/
			//If relationship is loaded
			if ($bean->load_relationship('aos_invoices_fin_payments_1')) {
				//Fetch related beans
				$relatedBeans = $bean->aos_invoices_fin_payments_1->getBeans();
				$parentBean = false;
				if (!empty($relatedBeans)) {
					//order the results
					reset($relatedBeans);

					//first record in the list is the parent
					$parentBean = current($relatedBeans);
					$p_name = '<<- ' . $budget_type .' Payments for ' . $parentBean->name;
					$bean->name = $p_name;
					#$bean->save();
				} else 
				{
					//Fetch related beans
					$bean->load_relationship('fin_vendor_invoice_fin_payments_1');
					$relatedBeans = $bean->fin_vendor_invoice_fin_payments_1->getBeans();
					$parentBean = false;
					if (!empty($relatedBeans)) {
						//order the results
						reset($relatedBeans);
	
						//first record in the list is the parent
						$parentBean = current($relatedBeans);
						$p_name = '->> ' . $budget_type .' Payments for ' . $parentBean->name;
						$bean->name = $p_name;
						
					}
				}

			}
			$bean->amount_c = abs($bean->raw_amount_c);
			$bean->currency_id = -99;	
			$bean->save();
		}
		
    }
?>

