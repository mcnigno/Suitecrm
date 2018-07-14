<?php

$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'after save', 'custom/modules/fin_Payments/after_save.php','after_save', 'after_save_method');
?>
