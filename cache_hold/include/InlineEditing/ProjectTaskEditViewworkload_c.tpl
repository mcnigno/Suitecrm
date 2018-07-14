
{if strlen($fields.workload_c.value) <= 0}
{assign var="value" value=$fields.workload_c.default_value }
{else}
{assign var="value" value=$fields.workload_c.value }
{/if}  
<input type='text' name='{$fields.workload_c.name}' 
id='{$fields.workload_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >