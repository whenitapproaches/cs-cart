{* $Id: krnkwc_ccrtn.tpl by takahashi from cs-cart.jp 2019 *}

{if $krnkwc_is_changable == 'Y'}

{else}
    {if $payment_method.processor_params.mode == "test"}
        <script type="text/javascript" class="webcollect-embedded-token" src="https://ptwebcollect.jp/test_gateway/token/js/embeddedTokenLib.js" ></script>
    {elseif $payment_method.processor_params.mode == "live"}
        <script type="text/javascript" class="webcollect-embedded-token" src="https://api.kuronekoyamato.co.jp/api/token/js/embeddedTokenLib.js" ></script>
    {/if}
    {script src="js/addons/kuroneko_webcollect/sha256.js"}
    <div class="clearfix">

        <div class="credit-card">

            <div class="control-group">
                <label for="registered_cc_number" class="control-label">{__("card_number")}</label>
                {$krnkwc_registered_card.maskingCardNo}
            </div>

            <div class="control-group cvv-field">
                <label for="cc_cvv2" class="control-label cm-integer cm-autocomplete-off cm-required">{__("jp_kuroneko_webcollect_security_code")}</label>
                <div class="controls">
                    <input id="cc_cvv2" type="text" data-name="payment_info[cvv2]" value="" size="4" maxlength="4"/>
                    <div class="cvv2">{__("jp_kuroneko_webcollect_what_is_security_code")}
                        <div class="popover fade bottom in">
                            <div class="arrow"></div>
                            <h3 class="popover-title">{__("jp_kuroneko_webcollect_what_is_security_code")}</h3>
                            <div class="popover-content">
                                <div class="cvv2-note">
                                    <div class="card-info clearfix">
                                        <div class="cards-images">
                                            <img src="{$images_dir}/visa_cvv.png" border="0" alt="" />
                                        </div>
                                        <div class="cards-description">
                                            <strong>{__("visa_card_discover")}</strong>
                                            <p>{__("credit_card_info")}</p>
                                        </div>
                                    </div>
                                    <div class="card-info ax clearfix">
                                        <div class="cards-images">
                                            <img src="{$images_dir}/express_cvv.png" border="0" alt="" />
                                        </div>
                                        <div class="cards-description">
                                            <strong>{__("american_express")}</strong>
                                            <p>{__("american_express_info")}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type='hidden' value='' id='token' name=payment_info[token] />
            <input type='hidden' value='' id='errorCode' name=payment_info[errorCd] />
            <input type='hidden' value='' id='errorMsg' name=payment_info[errorMsg] />
            <input type="hidden" name="result_ids" value="{$result_ids}" />
            <input type="hidden" id = "dispatch" name="dispatch" value="order_management.place_order" />

            <div class="control-group">
                <label for="pay_way" class="control-label">{__("jp_cc_method")}</label>
                <div class="controls">
                    <select id="pay_way" name="payment_info[pay_way]" onchange="fn_check_krnkwc_cc_payment_type(this.value);">
                        {if $payment_method.processor_params.pay_way.1 == 'true'}
                            <option value="1">{__("jp_cc_onetime")}</option>
                        {/if}
                        {if $payment_method.processor_params.pay_way.2 == 'true'}
                            <option value="2">{__("jp_cc_installment")}</option>
                        {/if}
                        {if $payment_method.processor_params.pay_way.0 == 'true'}
                            <option value="0">{__("jp_cc_revo")}</option>
                        {/if}
                    </select>
                </div>
            </div>

            <div class="control-group hidden" id="display_krnkwc_cc_split_count">
                <label for="jp_cc_installment_times" class="control-label cm-required">{__("jp_cc_installment_times")}</label>
                <div class="controls">
                    <select id="jp_cc_installment_times" name="payment_info[jp_cc_installment_times]">
                        {foreach from=$payment_method.processor_params.paytimes item=paytimes key=paytimes_key name="paytimess"}
                            {if $payment_method.processor_params.paytimes.$paytimes_key == 'true'}
                                <option value="{$paytimes_key}">{$paytimes_key}{__("jp_paytimes_unit")}</option>
                            {/if}
                        {/foreach}
                    </select>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        var btnname = "";
        var checkoutForm = $('#jp_payments_form_id');

        (function(_, $) {

            $('a').on('click', function(){
                btnname = this.getAttribute("data-ca-dispatch");

                if(btnname == "dispatch[order_management.place_order]") {
                    checkoutForm.off('submit', submitHandler);
                    checkoutForm.on('submit', submitHandler);
                    document.getElementById('dispatch').value = "order_management.place_order";
                }
                else if(btnname == "dispatch[order_management.place_order.save]") {
                    checkoutForm.off('submit', submitHandler);
                    document.getElementById('dispatch').value = "order_management.place_order.save";
                }
            });

        })(Tygh, Tygh.$);

        // チェックアウトフォームのsubmitイベントハンドラ
        function submitHandler(event) {
            event.preventDefault();

            var cvvObj = document.getElementById('cc_cvv2');
            var tokenObj = document.getElementById('token');
            var errCdObj = document.getElementById('errorCode');
            var errMsgObj = document.getElementById('errorMsg');

            // コールバック関数（「正常」の場合）
            var callbackSuccess = function(response) {

                // カード情報がリクエストパラメータに含まれないようにする
                cvvObj.value = "";

                // form に発行したトークンを追加する
                tokenObj.value = response.token;

                // form をサブミットする
                checkoutForm.get(0).submit();
            };

            // コールバック関数（「異常」の場合）
            var callbackFailure = function(response) {
                //エラー情報を取得
                var errorInfo = response.errorInfo;

                var errCdValue = '';
                var errMsgValue = '';

                //エラーの数だけ処理を繰り返す
                for (var i = 0; i<errorInfo.length; i++) {
                    //メッセージを格納
                    if(i > 0){
                        errCdValue += "|";
                        errMsgValue += "|";
                    }

                    errCdValue += errorInfo[i].errorCode;
                    errMsgValue += errorInfo[i].errorMsg;
                }

                errCdObj.value = errCdValue;
                errMsgObj.value = errMsgValue;

                // form をサブミットする
                checkoutForm.get(0).submit();
            };

            // フォームのValidationチェック
            var isFormVal = checkoutForm.ceFormValidator('check');

            // フォームのValidationがOKの場合
            if(isFormVal) {
                // オプション サービス区分
                var pOptServDiv = '01';

                // 認証区分 (authFlg) の設定
                // 3D セキュア
                var threeDsecFlg = {$payment_method.processor_params.tdflag};
                // 3D セキュアなし、セキュリティコード認証あり
                var pAuthFlg = "2";
                // 3D セキュアあり、セキュリティコード認証あり
                if (threeDsecFlg) {
                    pAuthFlg = "3";
                }

                // チェックサムの作成
                var pMemberID = "{$auth.user_id}";
                var pAuthKey = "{$auth.user_id|fn_krnkwc_gererate_auth_key}";
                {assign var="registered_card_info" value=$auth.user_id|fn_krnkwc_get_registered_card_info}
                var pCardKey = "{$registered_card_info.cardKey}";
                var pLastCreditDate = "{$registered_card_info.lastCreditDate}";
                var accessKey = "{$addons.kuroneko_webcollect.access_key}";
                var key = pMemberID + pAuthKey + accessKey + pAuthFlg;
                var shaObj = new jsSHA(key, "ASCII");
                var pCheckSum = shaObj.getHash("SHA-256", "HEX");

                // トークン発行API へ渡すパラメータ
                var createTokenInfo = {
                    traderCode: "{$addons.kuroneko_webcollect.trader_code}",
                    authDiv: pAuthFlg,
                    optServDiv: pOptServDiv,
                    memberId: pMemberID,
                    authKey: pAuthKey,
                    cardKey: pCardKey,
                    lastCreditDate: pLastCreditDate,
                    checkSum: pCheckSum,
                    securityCode: cvvObj.value
                };
                // ｗｅｂコレクトが提供するJavaScript 関数を実行し、トークンを発行する。
                WebcollectTokenLib.createToken(createTokenInfo, callbackSuccess, callbackFailure);
            }
        }

        function fn_check_krnkwc_cc_payment_type(payment_type)
        {
            if (payment_type == '2') {
                (function ($) {
                    $(document).ready(function() {
                        $('#display_krnkwc_cc_split_count').switchAvailability(false);
                    });
                })(jQuery);
            } else {
                (function ($) {
                    $(document).ready(function() {
                        $('#display_krnkwc_cc_split_count').switchAvailability(true);
                    });
                })(jQuery);
            }
        }
    </script>
{/if}