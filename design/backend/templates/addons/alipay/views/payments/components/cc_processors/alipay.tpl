{if $addons.alipay.status == "D"}
    <div class="alert alert-block">
	<p>{__("alipay.addon_is_disabled_notice")}</p>
    </div>
{else}

<div class="control-group">
    <label class="control-label" for="currency">{__("currency")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            {foreach from=$alipay_currencies item="currency"}
                <option value="{$currency.code}"{if !$currency.active} disabled="disabled"{/if}{if $processor_params.currency == $currency.code} selected="selected"{/if}>{$currency.name}</option>
            {/foreach}
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency">{__("payment_method_type")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][payment_method_type]" id="payment_method_type">
            {foreach from=$alipay_payment_method_types item="payment_method_type" key="payment_method_type_key"}
                <option value="{$payment_method_type_key}" {if $processor_params.payment_method_type == $payment_method_type_key} selected="selected"{/if}>{$payment_method_type.name}</option>
            {/foreach}
        </select>
    </div>
</div>

<div id="section_technical_details">
    <div class="control-group">
        <label class="control-label" for="mode">{__("test_live_mode")}:</label>
        <div class="controls">
            <select name="payment_data[processor_params][mode]" id="mode">
                <option value="test" {if $processor_params.mode == "test"}selected="selected"{/if}>{__("test")}</option>
                <option value="live" {if $processor_params.mode == "live"}selected="selected"{/if}>{__("live")}</option>
            </select>
        </div>
    </div>
</div>

<script>

</script>
{/if}
