{* Modified by tommy from cs-cart.jp 2016 *}

{if $show_header == true}
    {include file="common/subheader.tpl" title=__("select_shipping_method")}
{/if}


{if !$no_form}
    <form {if $use_ajax}class="cm-ajax"{/if} action="{""|fn_url}" method="post" name="shippings_form">
        <input type="hidden" name="redirect_mode" value="checkout" />
        {if $use_ajax}
            <input type="hidden" name="result_ids" value="checkout_totals,checkout_steps" />
        {/if}
{/if}

{hook name="checkout:shipping_rates"}

{if $display == "show"}
    <div class="step-complete-wrapper">
{/if}

    <div id="shipping_rates_list">

        {foreach from=$product_groups key="group_key" item=group name="spg"}
            {* Group name *}
            {if !"ULTIMATE"|fn_allowed_for || $product_groups|count > 1}
                <span class="vendor-name">{$group.name}</span>
            {/if}

            {* Products list *}
            {if !"ULTIMATE"|fn_allowed_for || $product_groups|count > 1}
                <ul class="bullets-list">
                    {foreach from=$group.products item="product"}
                        {if !(($product.is_edp == 'Y' && $product.edp_shipping != 'Y') || $product.free_shipping == 'Y')}
                            <li>
                                {if $product.product}
                                    {$product.product nofilter}
                                {else}
                                    {$product.product_id|fn_get_product_name}
                                {/if}
                            </li>
                        {/if}
                    {/foreach}
                </ul>
            {/if}

            {* Shippings list *}
            {if $group.shippings && !$group.all_edp_free_shipping && !$group.all_free_shipping && !$group.free_shipping && !$group.shipping_no_required}

                {if $display == "select"}
                    <p>
                        <select id="ssr_{$company_id}" name="shipping_ids[{$company_id}]" {if $onchange}onchange="{$onchange}"{/if}>
                {/if}

                {foreach from=$group.shippings item="shipping"}

                    {if $cart.chosen_shipping.$group_key == $shipping.shipping_id}
                        {assign var="checked" value="checked=\"checked\""}
                        {assign var="selected" value="selected=\"selected\""}
                        {assign var="strong_begin" value="<strong>"}
                        {assign var="strong_end" value="</strong>"}
                    {else}
                        {assign var="checked" value=""}
                        {assign var="selected" value=""}
                        {assign var="strong_begin" value=""}
                        {assign var="strong_end" value=""}
                    {/if}

                    {if $shipping.delivery_time}
                        {assign var="delivery_time" value="(`$shipping.delivery_time`)"}
                    {else}
                        {assign var="delivery_time" value=""}
                    {/if}

                    {if $shipping.rate}
                        {capture assign="rate"}{include file="common/price.tpl" value=$shipping.rate}{/capture}
                        {if $shipping.inc_tax}
                            {assign var="rate" value="`$rate` ("}
                            {if $shipping.taxed_price && $shipping.taxed_price != $shipping.rate}
                                {capture assign="tax"}{include file="common/price.tpl" value=$shipping.taxed_price class="nowrap"}{/capture}
                                {assign var="rate" value="`$rate` (`$tax` "}
                            {/if}
                            {assign var="inc_tax_lang" value=__('inc_tax')}
                            {assign var="rate" value="`$rate``$inc_tax_lang`)"}
                        {/if}
                    {else}
                        {assign var="rate" value=__("free_shipping")}
                    {/if}

                    {hook name="checkout:shipping_method"}
                        {if $display == "radio"}
                            <p class="shipping-options-method">
                                <input type="radio" class="valign" id="sh_{$group_key}_{$shipping.shipping_id}" name="shipping_ids[{$group_key}]" value="{$shipping.shipping_id}" onclick="fn_calculate_total_shipping_cost();" {$checked} />
                                <label for="sh_{$group_key}_{$shipping.shipping_id}" class="valign">{$shipping.shipping} {$delivery_time} - {$rate nofilter}</label>
                            </p>

                        {elseif $display == "select"}
                            <option value="{$shipping.shipping_id}" {$selected}>{$shipping.shipping} {$delivery_time} - {$rate nofilter}</option>

                        {elseif $display == "show"}
                            <p>
                                {$strong_begin}{$rate.name} {$delivery_time} - {$rate nofilter}{$strong_begin}
                            </p>
                        {/if}
                    {/hook}
                    {assign var="delivery_timing" value=$shipping.shipping_id|fn_lcjp_get_delivery_timing}

                    <div class="jp_shipping_delim">
                        {if $delivery_timing|@count}
                            {if $delivery_timing.delivery_time_array|@count}
                                <div class="jp_delivery_option">
                                    <label for= "delivery_time_selected_{$group_key}_{$shipping.shipping_id}">{__("jp_shipping_delivery_time")}????/label>
                                    <select id="delivery_time_selected_{$group_key}_{$shipping.shipping_id}" name="delivery_time_selected_{$group_key}_{$shipping.shipping_id}">
                                        {foreach from=$delivery_timing.delivery_time_array key="timekey" item="delivery_timetable"}
                                            <option value="{$delivery_timetable}" {if $cart.shipping[$shipping.shipping_id].delivery_info[{$group_key}].delivery_time_selected == $delivery_timetable}selected="selected"{/if}>{$delivery_timetable}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            {/if}
                            {if $delivery_timing.delivery_date_array|@count}
                                <div class="jp_delivery_option">
                                    <label for= "delivery_date_selected_{$group_key}_{$shipping.shipping_id}">{__("jp_delivery_date")}????/label>
                                    <select id="delivery_date_selected_{$group_key}_{$shipping.shipping_id}" name="delivery_date_selected_{$group_key}_{$shipping.shipping_id}">
                                        {foreach from=$delivery_timing.delivery_date_array key="daykey" item="delivery_date_table"}
                                            <option value="{$delivery_date_table}" {if $cart.shipping[$shipping.shipping_id].delivery_info[{$group_key}].delivery_date_selected == $delivery_date_table}selected="selected"{/if}>{$delivery_date_table}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            {/if}
                        {/if}
                    </div>
                {/foreach}

                {if $display == "select"}
                        </select>
                    <p>
                {/if}

                {if $smarty.foreach.spg.last && !$group.all_edp_free_shipping && !($group.all_free_shipping || $group.free_shipping)}
                    <p class="shipping-options-total">{__("total")}:&nbsp;{include file="common/price.tpl" value=$cart.display_shipping_cost class="price"}</p>
                {/if}

            {else}
                {if $group.all_free_shipping}
                     <p>{__("free_shipping")}</p>
                {elseif $group.all_edp_free_shipping || $group.shipping_no_required }
                    <p>{__("no_shipping_required")}</p>
                {else}
                    <p class="error-text">
                        {if $display == "show"}
                            <strong>{__("text_no_shipping_methods")}</strong>
                        {else}
                            {__("text_no_shipping_methods")}
                        {/if}
                    </p>
                {/if}
            {/if}

        {foreachelse}
            <p>
                {if !$cart.shipping_required}
                    {__("no_shipping_required")}
                {elseif $cart.free_shipping}
                    {__("free_shipping")}
                {/if}
            </p>
        {/foreach}

    <!--shipping_rates_list--></div>

{if $display == "show"}
    </div>
{/if}

{/hook}

{if !$no_form}
        <div class="cm-noscript buttons-container center">{include file="buttons/button.tpl" but_name="dispatch[checkout.update_shipping]" but_text=__("select")}</div>
    </form>
{/if}