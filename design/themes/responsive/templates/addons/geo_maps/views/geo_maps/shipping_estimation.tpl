{* Modified by takahashi from cs-cart.jp 2019 *}

{if $addons.geo_maps.show_shippings_on_product == "Y"}
    <div data-ca-geo-maps-shippings-methods-list-id="geo_maps_shipping_methods_list" {if $product_id}data-ca-geo-maps-shipping-estimation-product-id="{$product_id}" {/if}id="geo_maps_shipping_estimation">
        <div class="ty-geo-maps-shipping__wrapper" id="shipping_methods">
            <div class="ty-geo-maps-shipping__title">
                {__("geo_maps.shipping_time_and_rates")}: {include file="addons/geo_maps/blocks/customer_location.tpl" id="shipping_estimation" location=$location location_detected=true block=null}
            </div>
            {if $shippings_summary}
                {foreach $shippings_summary as $shipping_type => $shipping}
                    <div class="ty-geo-maps-shipping__item">
                        <div class="ty-geo-maps-shipping__label">
                            <a class="cm-dialog-opener cm-dialog-auto-size ty-geo-maps-shipping__link" data-ca-target-id="geo_maps_shipping_methods_list">
                                {if $shipping_type == "pickup"}
                                    <i class="ty-icon-pointer"></i>
                                {elseif $shipping_type == "courier"}
                                    <i class="ty-icon-courier"></i>
                                {else}
                                    <i class="ty-icon-shipping"></i>
                                {/if}
                                <span class="ty-geo-maps-shipping__link-text">{__("geo_maps.shipping_group_`$shipping_type`")}</span></a>{strip}
                            {/strip}{if $shipping.number_of_pickup_points} {__("geo_maps.from_pickup_points", [$shipping.number_of_pickup_points, "[shipping]" => $shipping.shipping])}{/if}:</div>
                        <div class="ty-geo-maps-shipping__value">{if $shipping.delivery_time}{__("geo_maps.shipping_about")} {$shipping.delivery_time},{/if}
                            {* Modified by takahashi from cs-cart.jp 2019 BOF *}
                            {if $smarty.const.CART_LANGUAGE == 'ja'}
                            {include file="common/price.tpl" value=$shipping.rate class="ty-geo-maps-shipping__price"} {__("geo_maps.shipping_from")}</div>
                            {else}
                            {__("geo_maps.shipping_from")} {include file="common/price.tpl" value=$shipping.rate class="ty-geo-maps-shipping__price"}</div>
                            {/if}
                            {* Modified by takahashi from cs-cart.jp 2019 EOF *}
                    </div>
                {/foreach}
            {elseif $no_shippings_available}
                {__("geo_maps.no_shippings")}
            {else}
                <div class="ty-geo-maps-shipping__loader"></div>
            {/if}
        </div>
    <!--geo_maps_shipping_estimation--></div>

    <div class="hidden" title="{__("shipping_methods")}" id="geo_maps_shipping_methods_list">
        {if $shipping_methods}
            <div class="ty-geo-maps-shipping__popup">
                <div class="ty-geo-maps-shipping__list-city">
                    {__("geo_maps.shipping_time_and_rates")}: {include file="addons/geo_maps/blocks/customer_location.tpl" id="shipping_estimation" location=$location location_detected=true block=null}
                </div>
                <table class="ty-table ty-geo-maps-shipping__list">
                    <thead>
                    <tr>
                        <th class="ty-geo-maps-shipping__list-head">{__("shipping_method")}</th>
                        <th class="ty-geo-maps-shipping__list-head">{__("geo_maps.shipping_time")}</th>
                        <th class="ty-geo-maps-shipping__list-head ty-geo-maps-shipping__list-head--price">{__("cost")}</th>
                    </tr>
                    </thead>
                    {foreach $shipping_methods as $shipping}
                        <tr class="ty-geo-maps-shipping__list-item">
                            <td class="ty-geo-maps-shipping__list-col">{if $shipping.number_of_pickup_points}{__("geo_maps.from_pickup_points", [$shipping.number_of_pickup_points, "[shipping]" => $shipping.shipping ])}{else}{$shipping.shipping}{/if}</td>
                            <td class="ty-geo-maps-shipping__list-col">{$shipping.service_delivery_time|default:$shipping.delivery_time}</td>
                            <td class="ty-geo-maps-shipping__list-col ty-geo-maps-shipping__list-col--price">{include file="common/price.tpl" value=$shipping.rate class="ty-geo-maps-shipping__price"}</td>
                        </tr>
                    {/foreach}
                </table>
                <div class="buttons-container">
                    {include file="buttons/close.tpl" but_meta="ty-btn__primary cm-form-dialog-closer cm-dialog-closer"}
                </div>
            </div>
        {/if}
    <!--geo_maps_shipping_methods_list--></div>

    {script src="js/addons/geo_maps/shipping_estimation.js"}
{/if}
