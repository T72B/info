<div id="menu_bar">
{section name=id loop=$menu_class}
	<div class="{$menu_class[id]}">
		<a href="/lang/{$lang}/{$menu_href[id]}">{$menu_caption[id]}</a>
	</div>
	{if !$smarty.section.id.last}
	<div class="devide"></div>
	{/if}
{/section}
</div>


