
{if strlen($fields.percent_complete.value) <= 0}
{assign var="value" value=$fields.percent_complete.default_value }
{else}
{assign var="value" value=$fields.percent_complete.value }
{/if}  
<input type='text' name='{$fields.percent_complete.name}' 
id='{$fields.percent_complete.name}' size='30'  value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >