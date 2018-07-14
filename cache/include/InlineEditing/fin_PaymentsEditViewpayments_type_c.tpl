
{if empty($fields.payments_type_c.value)}
{assign var="value" value=$fields.payments_type_c.default_value }
{else}
{assign var="value" value=$fields.payments_type_c.value }
{/if}
{capture name=idname assign=idname}{$fields.payments_type_c.name}{/capture}

{if isset($fields.payments_type_c.value) && $fields.payments_type_c.value != ''}
	{html_radios id="$idname"    name="$idname" title="" options=$fields.payments_type_c.options selected=$fields.payments_type_c.value separator="<br>"}
{else}
	{html_radios id="$idname"   name="$idname" title="" options=$fields.payments_type_c.options selected=$fields.payments_type_c.default separator="<br>"}
{/if}