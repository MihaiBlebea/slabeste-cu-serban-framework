
<nav class="row justify-content-center" aria-label="Page navigation example">
    <ul class="pagination">
        {if $previousPage > 0}
            <li class="page-item">
                <a class="page-link" href="{$app_path}/admin/{$path_item}?page={$previousPage}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        {/if}
        {for $min=1 to $paginateCount}
            {if ($min > $previousPage - 5 && $min < $previousPage + 5)}
                {if ($min == $previousPage + 1)}
                    <li class="page-item"><a class="page-link" href="{$app_path}/admin/{$path_item}?page={$min}"><strong>{$min}</strong></a></li>
                {else}
                    <li class="page-item"><a class="page-link" href="{$app_path}/admin/{$path_item}?page={$min}">{$min}</a></li>
                {/if}
            {/if}
        {/for}
        {if $nextPage < $paginateCount + 1}
            <li class="page-item">
                <a class="page-link" href="{$app_path}/admin/{$path_item}?page={$nextPage}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        {/if}
    </ul>
</nav>
