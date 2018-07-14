
{if strlen($fields.quantity_c.value) <= 0}
{assign var="value" value=$fields.quantity_c.default_value }
{else}
{assign var="value" value=$fields.quantity_c.value }
{/if}  
<input type='text' name='{$fields.quantity_c.name}'
id='{$fields.quantity_c.name}'
size='30'
maxlength='18'value='{sugar_number_format var=$value  }'
title=''
tabindex='1'
 
>