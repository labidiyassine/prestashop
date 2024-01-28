{if isset($combinationColors) && !empty($combinationColors)}
    {foreach $combinationColors as $color}
        <div class="product-combination">
            <p>Color: {$color}</p>
        </div>
    {/foreach}
{/if}
