<table><tr>
{foreach from=$buildings key=key item=value name=townbuildings}
     <td>{$key}<br />{$value}</td>
    {if $smarty.foreach.foo.index % 9 == 0}
        </tr><tr>
     {/if}
{/foreach}
</tr></table>