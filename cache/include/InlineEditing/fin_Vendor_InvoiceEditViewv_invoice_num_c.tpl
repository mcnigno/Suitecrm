
{if strlen($fields.v_invoice_num_c.value) <= 0}
{assign var="value" value=$fields.v_invoice_num_c.default_value }
{else}
{assign var="value" value=$fields.v_invoice_num_c.value }
{/if}  
<input type='text' name='{$fields.v_invoice_num_c.name}' 
    id='{$fields.v_invoice_num_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >