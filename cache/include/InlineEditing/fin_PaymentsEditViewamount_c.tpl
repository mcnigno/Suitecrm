
{if strlen($fields.amount_c.value) <= 0}
{assign var="value" value=$fields.amount_c.default_value }
{else}
{assign var="value" value=$fields.amount_c.value }
{/if}  
<input type='text' name='{$fields.amount_c.name}' 
id='{$fields.amount_c.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='1'
 >