<?php

 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'tot_time', 'custom/modules/bill_Billables/after_save_class4.php','after_save_class', 'tot_time');
#$hook_array['before_save'][] = Array(2, 'tot_time', 'custom/modules/bill_Billables/after_save_class2.php','after_save_class', 'tot_time');
?>
