
{if strlen($fields.actualeffort_c.value) <= 0}
{assign var="value" value=$fields.actualeffort_c.default_value }
{else}
{assign var="value" value=$fields.actualeffort_c.value }
{/if}  
<input type='text' name='{$fields.actualeffort_c.name}'
id='{$fields.actualeffort_c.name}'
size='30'
maxlength='18'value='{sugar_number_format var=$value  }'
title=''
tabindex='1'
 
>