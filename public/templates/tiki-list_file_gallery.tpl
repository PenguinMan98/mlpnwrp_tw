{* $Id: tiki-list_file_gallery.tpl 43894 2012-11-11 05:50:54Z lindonb $ *}

{title help="File+Galleries" admpage="fgal"}
	{if $edit_mode eq 'y' and $galleryId eq 0}
		{tr}Create a File Gallery{/tr}
	{else}
		{if $edit_mode eq 'y'}
			{tr}Edit Gallery:{/tr}
		{/if}
		{strip} 
			{if $gal_info.type eq 'user'}
				{if $gal_info.user eq $user}
					{tr}My Files{/tr}
				{else}
					{tr}Files of {$gal_info.user}{/tr}
				{/if}
			{else}
				{$name}
			{/if}
		{/strip}
	{/if}
{/title}

{if $edit_mode neq 'y' and $gal_info.description neq ''}
	<div class="description">
		{$gal_info.description|escape|nl2br}
	</div>
{/if}

{* admin icons on the right side of the top navigation bar under the title *}
<div class="navbar"{if $prefs.mobile_mode eq 'y'} data-role="controlgroup" data-type="horizontal"{/if}>
	{if $galleryId gt 0}
		{if $prefs.feature_group_watches eq 'y' and ( $tiki_p_admin_users eq 'y' or $tiki_p_admin eq 'y' )}
			<a href="tiki-object_watches.php?objectId={$galleryId|escape:"url"}&amp;watch_event=file_gallery_changed&amp;objectType=File+Gallery&amp;objectName={$gal_info.name|escape:"url"}&amp;objectHref={'tiki-list_file_gallery.php?galleryId='|cat:$galleryId|escape:"url"}" class="icon">
				{icon _id='eye_group' alt="{tr}Group monitor{/tr}" align='right' hspace="1"}
			</a>
		{/if}
		{if $user and $prefs.feature_user_watches eq 'y'}
			{if !isset($user_watching_file_gallery) or $user_watching_file_gallery eq 'n'}
				{self_link galleryName=$name watch_event='file_gallery_changed' watch_object=$galleryId watch_action='add'}
					{icon _id='eye' align='right' alt="{tr}Monitor this gallery{/tr}" hspace="1"}
				{/self_link}
			{else}
				{self_link galleryName=$name watch_event='file_gallery_changed' watch_object=$galleryId watch_action='remove'}
					{icon _id='no_eye' align='right' alt="{tr}Stop monitoring this gallery{/tr}" hspace="1"}
				{/self_link}
			{/if}
		{/if}
		{if $prefs.feed_file_gallery eq 'y'}
			{if $gal_info.type eq "podcast" or $gal_info.type eq "vidcast"}
				<a href="tiki-file_gallery_rss.php?galleryId={$galleryId}&amp;ver=PODCAST">
					<img src='img/rss_podcast_80_15.png' alt="{tr}RSS feed{/tr}" title="{tr}RSS feed{/tr}" align='right' />
				</a>
			{else}
				<a href="tiki-file_gallery_rss.php?galleryId={$galleryId}">
					{icon _id='feed' alt="{tr}RSS feed{/tr}" title="{tr}RSS feed{/tr}" align='right'}
				</a>
			{/if}
		{/if}
		{if $view eq 'browse'}
			{if $show_details eq 'y'}
				{self_link show_details='n'}
					{icon _id='no_information' align='right' alt="{tr}Hide file information from list view{/tr}" }
				{/self_link}
			{else}
				{self_link show_details='y'}
					{icon _id='information' align='right' alt="{tr}Show file information from list view{/tr}"}
				{/self_link}
			{/if}
		{/if}
{* main navigation buttons under the page title *}
		{if $treeRootId eq $prefs.fgal_root_id && ( $tiki_p_list_file_galleries eq 'y'
			or (!isset($tiki_p_list_file_galleries) and $tiki_p_view_file_gallery eq 'y') )}
			{button _text="{tr}List Galleries{/tr}" href="?"}
		{/if}
		{if $tiki_p_create_file_galleries eq 'y' and $edit_mode ne 'y'}
			{button _keepall='y' _text="{tr}Create a Gallery{/tr}" edit_mode=1 parentId=$galleryId cookietab=1}
		{/if}
		{if $tiki_p_create_file_galleries eq 'y' and $dup_mode ne 'y'}
			{button _text="{tr}Duplicate Gallery{/tr}" dup_mode=1 galleryId=$galleryId}
		{/if}
		{if $tiki_p_admin_file_galleries eq 'y' or $user eq $gal_info.user}
			{if $edit_mode eq 'y' or $dup_mode eq 'y'}
				{button _keepall='y' _text="{tr}Browse Gallery{/tr}" galleryId=$galleryId}
			{else}
				{button _keepall='y' _text="{tr}Edit Gallery{/tr}" edit_mode="1" galleryId=$galleryId}
			{/if}
		{/if}
		{if $edit_mode neq 'y' and $dup_mode neq 'y'}
			{if $view neq 'list'}
				{button _keepall='y' _text="{tr}List Gallery{/tr}" view="list" galleryId=$galleryId}
			{/if}
			{if $view neq 'browse'}
				{button _text="{tr}Browse Images{/tr}" view="browse" galleryId=$galleryId}
			{/if}
			{if $view neq 'page' and $filescount gt 0}
				{button _text="{tr}Page View{/tr}" view="page" galleryId=$galleryId maxRecords=1}
			{/if}
			{if $view neq 'admin' and $tiki_p_admin_file_galleries eq 'y'}
				{button _keepall='y' _text="{tr}Admin View{/tr}" view="admin" galleryId=$galleryId}
			{/if}
		{/if}
		{if $tiki_p_assign_perm_file_gallery eq 'y'}
			{button _keepall='y' _text="{tr}Permissions{/tr}" href="tiki-objectpermissions.php" objectName=$name objectType='file+gallery' permType='file+galleries' objectId=$galleryId}
		{/if}
		{if $tiki_p_admin_file_galleries eq 'y' or $user eq $gal_info.user or $gal_info.public eq 'y'}
			{if $tiki_p_upload_files eq 'y'}
				{button _keepall='y' _text="{tr}Upload File{/tr}" href="tiki-upload_file.php" galleryId=$galleryId}
			{/if}
			{if $tiki_p_upload_files eq 'y' and $prefs.feature_draw eq 'y'}
				{button _keepall='y' _text="{tr}Create Drawing{/tr}" href="tiki-edit_draw.php" galleryId=$galleryId}
			{/if}
			{if $prefs.feature_file_galleries_batch eq "y" and $tiki_p_batch_upload_file_dir eq 'y'}
				{button _keepall='y' _text="{tr}Directory Batch{/tr}" href="tiki-batch_upload_files.php" galleryId=$galleryId}
			{/if}
		{/if}
	{else}
		{if $treeRootId eq $prefs.fgal_root_id && ( $edit_mode eq 'y' or $dup_mode eq 'y')}
			{button _text="{tr}List Galleries{/tr}" href='?'}
		{/if}
		{if $tiki_p_create_file_galleries eq 'y' and $edit_mode ne 'y'}
			{button _keepall='y' _text="{tr}Create a Gallery{/tr}" edit_mode="1" parentId="-1" galleryId="0"}
		{/if}
		{if $tiki_p_upload_files eq 'y'}
			{button _text="{tr}Upload File{/tr}" href="tiki-upload_file.php"}
		{/if}
	{/if}

	{if $edit_mode neq 'y' and $prefs.fgal_show_slideshow eq 'y' and $gal_info.show_slideshow.value eq 'y'}
		{button _text="{tr}SlideShow{/tr}" href="#" _onclick="javascript:window.open('tiki-list_file_gallery.php?galleryId=$galleryId&amp;slideshow','','menubar=no,width=600,height=500,resizable=yes');return false;"}
	{/if}
</div>

{if !empty($filegals_manager)}
	{remarksbox type="tip" title="{tr}Tip{/tr}"}{tr}Be careful to set the right permissions on the files you link to{/tr}.{/remarksbox}
	<label for="keepOpenCbx">{tr}Keep gallery window open{/tr}</label>
	<input type="checkbox" id="keepOpenCbx" checked="checked">
{/if}

{if isset($fileChangedMessage) and $fileChangedMessage neq ''}
	{remarksbox type="note" title="{tr}Note{/tr}"}
		{$fileChangedMessage}
		<form method="post" action="{$smarty.server.PHP_SELF}{if !empty($filegals_manager) and $filegals_manager neq ''}?filegals_manager={$filegals_manager|escape}{/if}">
			<input type="hidden" name="galleryId" value="{$galleryId|escape}" />
			<input type="hidden" name="fileId" value="{$fileId|escape}" />
			{tr}Your comment{/tr} ({tr}optional{/tr}): <input type="text" name="comment" size="40" />
			{icon _id='accept' _tag='input_image'}
		</form>
	{/remarksbox}
{/if}

{if $user and $prefs.feature_user_watches eq 'y'}
	<div class="categbar" align="right">
		{if isset($category_watched) && $category_watched eq 'y'}
			{tr}Watched by categories:{/tr}
			{section name=i loop=$watching_categories}
				{button _keepall='y' _text=$watching_categories[i].name|escape href="tiki-browse_categories.php" parentId=$watching_categories[i].categId}
			{/section}
		{/if}
	</div>
{/if}

{if !empty($fgal_diff)}
	{remarksbox type="note" title="{tr}Modifications{/tr}"}
		{foreach from=$fgal_diff item=fgp_prop key=fgp_name name=change}
			{tr}Property <b>{$fgp_name}</b> Changed{/tr}
		{/foreach}
	{/remarksbox}
{/if}

{if $edit_mode eq 'y'}
	{include file='edit_file_gallery.tpl'}
{elseif $dup_mode eq 'y'}
	{include file='duplicate_file_gallery.tpl'}
{else}
	{if $prefs.fgal_search eq 'y' and $view neq 'page'}
		{include file='find.tpl' find_show_num_rows = 'y' find_show_categories_multi='y' find_durations=$find_durations find_show_sub='y' find_other="{tr}Gallery of this fileId{/tr}" find_in="<ul><li>{tr}Name{/tr}</li><li>{tr}Filename{/tr}</li><li>{tr}Description{/tr}</li></ul>"}
	{/if}
	{if $prefs.fgal_search_in_content eq 'y' and $galleryId > 0}
		{if $view neq 'page'}
			<div class="findtable">
				<form id="search-form" class="forms" method="get" action="tiki-search{if $prefs.feature_forum_local_tiki_search eq 'y'}index{else}results{/if}.php">
					<input type="hidden" name="where" value="files" />
					<input type="hidden" name="galleryId" value="{$galleryId}" />
					<label class="find_content">{tr}Search in content{/tr}
						<input name="highlight" size="30" type="text" />
					</label>
					<input type="submit" class="wikiaction" name="search" value="{tr}Go{/tr}"/>
				</form>
			</div>
		{/if}
	{/if}

{if $view eq 'page'}
	<div class="pageview">
		<form id="size-form" class="forms" action="tiki-list_file_gallery.php">
			<input type="hidden" name="view" value="page" />
			<input type="hidden" name="galleryId" value="{$galleryId}" />
			<input type="hidden" name="maxRecords" value=1 />
			<input type="hidden" name="offset" value="{$offset}" />
			<label for="maxWidth">
				{tr}Max width{/tr}&nbsp;<input id="maxWidth" type="text" name="maxWidth" value="{$maxWidth}" />
			</label>
			<input type="submit" class="wikiaction" name="setSize" value="{tr}Go{/tr}"/>
		</form>
	</div><br>
	{pagination_links cant=$cant step=$maxRecords offset=$offset}
		tiki-list_file_gallery.php?galleryId={$galleryId}&maxWidth={$maxWidth}&maxRecords={$maxRecords}&view={$view}
	{/pagination_links}
	<br>
{/if}
	{if $prefs.fgal_quota_show neq 'n' and $gal_info.quota}
		<div style="float:right">
			{capture name='use'}
				{math equation="round((100*x)/(1024*1024*y),2)" x=$gal_info.usedSize y=$gal_info.quota}
			{/capture}
			{if $prefs.fgal_quota_show neq 'y'}
				<b>{$smarty.capture.use} %</b> {tr}space use on{/tr} <b>{$gal_info.quota} Mo</b>
				<br />
			{/if}
			
			{if $prefs.fgal_quota_show neq 'text_only'}
				{quotabar length='100' value=$smarty.capture.use}
			{/if}			
		</div>
	{/if}

	{include file='list_file_gallery.tpl'}

	{if $galleryId gt 0
		&& $prefs.feature_file_galleries_comments == 'y'
		&& ($tiki_p_read_comments == 'y'
		|| $tiki_p_post_comments == 'y'
		|| $tiki_p_edit_comments == 'y')}

		<div id="page-bar" class="clearfix">
			<span class="button">
				<a id="comment-toggle" href="{service controller=comment action=list type="file gallery" objectId=$galleryId}#comment-container">
					{tr}Comments{/tr}
				</a>
			</span>
			{jq}
				$('#comment-toggle').comment_toggle();
			{/jq}
		</div>

		<div id="comment-container"></div>
	{/if}
{/if}

{if $galleryId>0}
	{if $edited eq 'y'}
		<div class="wikitext">
			{tr}You can access the file gallery using the following URL:{/tr} <a class="fgallink" href="{$url}?galleryId={$galleryId}">{$url}?galleryId={$galleryId}</a>
		</div>
	{/if}
{/if}

