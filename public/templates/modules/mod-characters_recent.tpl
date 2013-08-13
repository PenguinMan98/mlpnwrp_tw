{* $Id: mod-characters_recent.tpl 33949 2013-08-13 05:13:23Z jbroderick $ *}

{tikimodule error=$module_params.error title=$tpl_module_title name="characters_recent" flip=$module_params.flip decorations=$module_params.decorations nobox=$module_params.nobox notitle=$module_params.notitle}
{modules_list list=$characters nonums=$nonums}
	{section name=ix loop=$characters}
		<li>
			<a class="linkmodule" href="/chat/character/view.php?c={$characters[ix].name}">
				{$characters[ix].name}
			</a><br>
			By - <a class="linkmodule" href="/tiki-index.php?page=User:{$characters[ix].login|escape:'url'}">
                {$characters[ix].login}
            </a>
		</li>
	{/section}
{/modules_list}
{/tikimodule}
