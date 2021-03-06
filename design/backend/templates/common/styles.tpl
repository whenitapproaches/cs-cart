{* Modified by tommy from cs-cart.jp 2017 *}

{styles}
    {style src="ui/jqueryui.css"}
    {style src="lib/select2/select2.min.css"}
    {hook name="index:styles"}
        {style src="styles.less"}
        {if $smarty.const.ACCOUNT_TYPE === "vendor"}
            {style src="config_vendor.less"}
        {/if}
        {style src="glyphs.css"}

        {include file="views/statuses/components/styles.tpl" type=$smarty.const.STATUSES_ORDER}

        {if $language_direction == 'rtl'}
            {style src="rtl.less"}
        {/if}
    {/hook}
    {style src="font-awesome.css"}
    {* Modified by tommy from cs-cart.jp 2017 BOF *}
    {style src="addons/localization_jp/styles.less"}
    {* Modified by tommy from cs-cart.jp 2017 EOF *}
{/styles}