{* $Id: nttstr_cc.tpl by takahashi from cs-cart.jp 2019 *}

<p>{__("jp_nttstr_cc_notice")}</p>
<hr />
{include file="common/subheader.tpl" title=__("jp_nttstr_connections_settings") target="#nttstr_cc_connection_settings"}
<div id="nttstr_cc_connection_settings" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="mode">{__("test_live_mode")}:</label>
            <div class="controls">
                <select name="payment_data[processor_params][mode]" id="mode">
                    <option value="test" {if $processor_params.mode == "test"}selected="selected"{/if}>{__("test")}</option>
                    <option value="live" {if $processor_params.mode == "live"}selected="selected"{/if}>{__("live")}</option>
                </select>
            </div>
        </div>
    </fieldset>
</div>

{include file="common/subheader.tpl" title=__("jp_nttstr_cc_payment_settings") target="#nttstr_cc_payment_settings"}
<div id="nttstr_cc_payment_settings" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="mode">{__("jp_nttstr_jobcd")}:</label>
            <div class="controls">
                <select name="payment_data[processor_params][jobcd]" id="mode">
                    <option value="50" {if $processor_params.jobcd == "50"}selected="selected"{/if}>{__("jp_nttstr_auth")}</option>
                    <option value="52" {if $processor_params.jobcd == "52"}selected="selected"{/if}>{__("jp_nttstr_capture")}</option>
                </select>
            </div>
        </div>
    </fieldset>
</div>
