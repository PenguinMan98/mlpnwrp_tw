<h1>Search Chat History</h1>
<form name="searchChatLog" method="POST">
    <div id="searchChatLogForm">
        Date: <input type="text" name="startDate" id="startDate" {if isset($startDate)}value="{$startDate}"{/if} />
        Character:
        <select name="character">
            <option value="">All</option>
            {html_options values=$characters output=$characters selected=$character}
        </select>
        Room: 
        <select name="room">
            <option value=""></option>
            {html_options options=$roomList selected=$roomId}
        </select>
        Text: <input type="text" name="text" {if isset($text)}value="{$text}"{/if} />
        &nbsp;&nbsp;<input type="submit" name="searchForm" value="Search!" />
    </div>
    <div id="searchChatLogResults">
    {foreach $results as $post}
        <p>[{$post->getTimestamp()}] {$post->getHandle()}: {$post->getText()}</p>
    {foreachelse}
        Nothing found for those search terms 
    {/foreach}
    </div> 
</form>
{literal}
<script type="text/javascript" src="../js/jquery.js" > </script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#startDate").datepicker({dateFormat: 'yy-mm-dd'});
    });
</script>
{/literal}