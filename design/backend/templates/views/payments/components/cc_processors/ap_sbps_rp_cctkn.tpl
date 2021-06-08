<p>{__('sbps_rp_cctkn_notice')}</p>
<p>{__("jp_sbps_notice")}</p>
<hr />
{include file='common/subheader.tpl' title=__('sbps_connections_settings') target="#ap_sbps_rp_cctkn_connection_settings"}
<div id="ap_sbps_rb_cctkn_connection_settings" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="mode">{__('test_live_mode')}:</label>
            <div class="controls">
                <select name="payment_data[processor_params][mode]" id="mode">
                    <option value="test" {if $processor_params.mode == 'test'}selected="selected"{/if}>{__('sbps_test')}</option>
                    <option value="live" {if $processor_params.mode == 'live'}selected="selected"{/if}>{__('sbps_live')}</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="merchant_id">{__('sbps_merchant_id')}:</label>
            <div class="controls">
                <input type="text" name="payment_data[processor_params][merchant_id]" id="merchant_id" value="{$processor_params.merchant_id}" size="20"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="service_id">{__('sbps_service_id')}:</label>
            <div class="controls">
                <input type="text" name="payment_data[processor_params][service_id]" id="service_id" value="{$processor_params.service_id}" size="20"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="hash_key">{__('sbps_hashkey')}:</label>
            <div class="controls">
                <input type="text" name="payment_data[processor_params][hash_key]" id="hash_key" value="{$processor_params.hash_key}" size="45"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="hash_key">{__('sbps_encrypt_key')}:</label>
            <div class="controls">
                <input type="text" name="payment_data[processor_params][encrypt_key]" id="hash_key" value="{$processor_params.encrypt_key}" size="45"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="hash_key">{__('sbps_init_key')}:</label>
            <div class="controls">
                <input type="text" name="payment_data[processor_params][init_key]" id="hash_key" value="{$processor_params.init_key}" size="45"/>
            </div>
        </div>
    </fieldset>
</div>

{include file="common/subheader.tpl" title=__('sbps_cc_payment_settings') target="#ap_sbps_cc_payment_settings"}
<div id="ap_sbps_cc_payment_settings" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="use_cvv">{__('sbps_cc_use_cvv')}:</label>
            <div class="controls">
                <input type="hidden" name="payment_data[processor_params][use_cvv]" value="false" />
                <input type="checkbox" name="payment_data[processor_params][use_cvv]" id="use_cvv" value="true" {if $processor_params.use_cvv == 'true'} checked="checked"{/if} />
            </div>
        </div>
    </fieldset>
</div>