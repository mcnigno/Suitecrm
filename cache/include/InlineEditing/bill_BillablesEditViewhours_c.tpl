
{if strlen($fields.hours_c.value) <= 0}
{assign var="value" value=$fields.hours_c.default_value }
{else}
{assign var="value" value=$fields.hours_c.value }
{/if}  
<input type='text' name='{$fields.hours_c.name}'
id='{$fields.hours_c.name}'
size='30'
maxlength='5'value='{sugar_number_format var=$value  }'
title=''
tabindex='1'
 
>