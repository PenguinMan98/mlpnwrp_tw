{* $Id: tiki-searchindex.tpl 42331 2012-07-10 15:05:01Z jonnybradley $ *}

{title help="Search" admpage="search"}{tr}Search{/tr}{/title}

<div class="nohighlight">
	{if $prefs.feature_search_show_search_box eq 'y'}
		{filter action="tiki-searchindex.php" filter=$filter}{/filter}
	{/if}
</div><!--nohighlight-->
	{* do not change the comment above, since smarty 'highlight' outputfilter is hardcoded to find exactly this... instead you may experience white pages as results *}

{if isset($results)}
	{$results}
{/if}

