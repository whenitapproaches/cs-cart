{* Modified by takahashi from cs-cart.jp 2018 *}
{* 「配送手続きの追加」ポップアップにおいて、運送会社のデフォルト表示を「ヤマト運輸」に変更 *}
{* Modified by takahashi from cs-cart.jp 2019 *}
{* 出荷情報登録仕様変更対応（他社配送） *}
{if $capture}
    {capture name="carrier_field"}
{/if}

{if $order_info.pay_by_kuroneko == 'Y' || $order_info.pay_by_kuroneko_kakebarai == 'Y'}
<select {if $id}id="{$id}"{/if} name="{$name}" {if $meta}class="{$meta}"{/if}>
    {if $name == "shipment_data[carrier]" || $name == "update_shipping[{$shipping.group_key}][{$shipment_id}][carrier]" || substr($name, 0, 9) == "carriers["}
        <option value="yamato" {if $carrier == "yamato"}{$carrier_name = __("carrier_yamato")}selected="selected"{/if}>{__("carrier_yamato")}</option>
    {else}
        <option value="">--</option>
    {/if}

    {foreach from=$carriers item="code" key="key"}
        {if ($name != "shipment_data[carrier]" && $name != "update_shipping[{$shipping.group_key}][{$shipment_id}][carrier]" && substr($name, 0, 9) != "carriers[") || $key != 'yamato' }
            <option value="{$key}" {if $carrier == "{$key}"}{$carrier_name = $code.name}selected="selected"{/if}>{$code.name}</option>
        {/if}
    {/foreach}

</select>

{else}
<select {if $id}id="{$id}"{/if} name="{$name}" class="{if $meta}{$meta}{/if} form-control">
    <option value="">--</option>
    {foreach from=$carriers key="code" item="carrier_data"}
    	<option value="{$code}" {if $carrier == $code}{$carrier_name = $carrier_data.name}selected="selected"{/if}>{$carrier_data.name}</option>
    {/foreach}
</select>
{/if}
{if $capture}
{/capture}

    {capture name="carrier_name"}
        {$carrier_name}
    {/capture}
{/if}