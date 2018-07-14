
{if strlen($fields.notes_c.value) <= 0}
{assign var="value" value=$fields.notes_c.default_value }
{else}
{assign var="value" value=$fields.notes_c.value }
{/if}  
<input type='text' name='{$fields.notes_c.name}' 
    id='{$fields.notes_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >