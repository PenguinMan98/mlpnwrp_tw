{* $Id: mod-forums_recent_forums.tpl 33949 2013-06-25 05:13:23Z jbroderick $ *}

{tikimodule error=$module_params.error title=$tpl_module_title name="forums_recent_forums" flip=$module_params.flip decorations=$module_params.decorations nobox=$module_params.nobox notitle=$module_params.notitle}
{modules_list list=$threads nonums=$nonums}
	{section name=ix loop=$threads}
		<li>
			<a class="linkmodule" href="/tiki-view_forum_thread.php?comments_parentId={$threads[ix].threadNo}">
				{$threads[ix].title|escape}
			</a>
		</li>
	{/section}
{/modules_list}
{/tikimodule}
