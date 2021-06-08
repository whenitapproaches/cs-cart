{* Modified by takahashi from cs-cart.jp 2019 *}
{$state_descr = $user_data.s_state_descr}
{$state = $user_data.s_state}
{$country = $user_data.s_country}

{hook name="checkout:location_state"}
<div class="litecheckout__field litecheckout__field--xsmall">
    <select data-ca-lite-checkout-field="user_data.s_state"
            class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
            data-ca-lite-checkout-element="state"
            data-ca-lite-checkout-is-state-code-container="true"
            data-ca-lite-checkout-last-value="{$state}"
            id="litecheckout_state"
            {* Modified by takahashi from cs-cart.jp 2019 BOF *}
            name="litecheckout_state"
            {* Modified by takahashi from cs-cart.jp 2019 EOF *}
    >
        <option disabled>{__("select_state")}</option>
        {foreach $states[$country] as $country_state}
            <option value="{$country_state.code}"
                    {if $country_state.code === $state}selected{/if}
            >{$country_state.state}</option>
        {/foreach}
    </select>

    <input type="text"
           data-ca-lite-checkout-field="user_data.s_state"
           id="litecheckout_state_d"
           data-ca-lite-checkout-element="state"
           data-ca-lite-checkout-is-state-code-container="false"
           data-ca-lite-checkout-last-value="{$state}"
           placeholder=" "
           value="{$state}"
           class="cm-state cm-location-shipping litecheckout__input hidden"
           disabled
    />

    <label class="litecheckout__label cm-required" for="litecheckout_state">{__("state")} </label>
</div>
{/hook}