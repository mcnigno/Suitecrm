
{if strlen($fields.invoice_nr_c.value) <= 0}
{assign var="value" value=$fields.invoice_nr_c.default_value }
{else}
{assign var="value" value=$fields.invoice_nr_c.value }
{/if}  
<input type='text' name='{$fields.invoice_nr_c.name}' 
    id='{$fields.invoice_nr_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >