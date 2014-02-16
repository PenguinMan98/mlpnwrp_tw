<h1>Search Chat History</h1>
<form name="searchChatLog" method="POST">
    <div id="searchChatLogForm">
        Date: <input type="text" size="11" name="startDate" id="startDate" {if isset($startDate)}value="{$startDate}"{/if} />
        End Date: <input type="text" size="11" name="endDate" id="endDate" {if isset($endDate)}value="{$endDate}"{/if} />
        Characters: <input type="text" id="character_list" name="character_list" {if isset($character_list)}value="{$character_list}"{/if}/>
        {if $loggedIn}Show Private: <input type="checkbox" id="show_private" name="show_private" {if $show_private}checked="checked"{/if}>{/if}<br>
        Room: 
        <select name="room">
            <option value=""></option>
            {html_options options=$roomList selected=$roomId}
        </select>
        Text: <input type="text" name="text" {if isset($text)}value="{$text}"{/if} />
        &nbsp;&nbsp;<input type="submit" name="searchForm" value="Search!" />
    </div>
    <div id="searchChatLogResults">
    {foreach $parsed_results as $post}
        <p>{$post}</p>
    {foreachelse}
        {if isset($error)}
            {$error}
        {else}
            Nothing found for those search terms 
        {/if}
    {/foreach}
    </div> 
</form>
{literal}
<script type="text/javascript" src="../js/jquery.js" > </script>
<script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.js" > </script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#startDate").datepicker({dateFormat: 'yy-mm-dd'});
        $("#endDate").datepicker({dateFormat: 'yy-mm-dd'});
        
        var characters = [
{/literal}
            {foreach $characters as $char}
                "{$char}",
            {/foreach}    
{literal}
        ];
        function split( val ) {
            return val.split( /,\s*/ );
        }
        function extractLast( term ) {
            return split( term ).pop();
        }
        $( "#character_list" )
            .bind( "keydown", function( event ) {
                if(event.keyCode === $.ui.keyCode.TAB && 
                      $(this).data( "ui-autocomplete" ).menu.active ) {
                    event.preventDefault();      
                }
            })
            .autocomplete({
                minLength: 0,
                source: function( request, response ) {
                    // delegate back to autocomplete, but extract the last term
                    response( $.ui.autocomplete.filter( characters, extractLast( request.term ) ) );
                },
                focus: function() {
                    // prevent value inserted on focus
                    return false;
                },
                select: function (event, ui){
                    var terms = split( this.value );
                    // remove the current input
                    terms.pop();
                    // add the selected item
                    terms.push( ui.item.value );
                    // add placeholder to get the comma-and-space at the end
                    terms.push( "" );
                    this.value = terms.join( ", ");
                    return false;
                }
            });
    });
</script>
{/literal}