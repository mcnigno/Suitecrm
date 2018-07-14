
{if strlen($fields.billed_effort_c.value) <= 0}
{assign var="value" value=$fields.billed_effort_c.default_value }
{else}
{assign var="value" value=$fields.billed_effort_c.value }
{/if}  
<input type='text' name='{$fields.billed_effort_c.name}'
id='{$fields.billed_effort_c.name}'
size='30'
maxlength='18'value='{sugar_number_format var=$value  }'
title=''
tabindex='1'
 
>