
{if strlen($fields.tot_est_time_c.value) <= 0}
{assign var="value" value=$fields.tot_est_time_c.default_value }
{else}
{assign var="value" value=$fields.tot_est_time_c.value }
{/if}  
<input type='text' name='{$fields.tot_est_time_c.name}'
id='{$fields.tot_est_time_c.name}'
size='30'
maxlength='18'value='{sugar_number_format var=$value  }'
title=''
tabindex='1'
 
>