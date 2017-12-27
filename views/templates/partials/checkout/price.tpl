{if $mode == 'ribbon'}
    <h1 class="ribbon">
        <strong class="ribbon-content">{$text}: {$price} RON</strong>
    </h1>
{elseif $mode == 'new-price'}
<p class="text-center" style="color:#0A82C5;text-shadow: 1px 2px 2px black;font-size: 2em;font-weight: bold;line-height: 1em;">{$text}</p>
<p class="text-center" style="color:#0A82C5;text-shadow: 1px 2px 2px black;font-size: 2.5em;font-weight: bold;line-height: 1em;">{$price} RON</p>
{elseif $mode == 'old-price'}
    <p class="text-center" style="color:red;text-shadow: 1px 2px 2px black;font-size: 2em;font-weight: bold;line-height: 1em;">{$text}</p>
    <p class="text-center" style="color:red;text-shadow: 1px 2px 2px black;font-size: 2.5em;font-weight: bold;line-height: 1em;text-decoration:line-through;">{$price} RON</p>
{/if}
