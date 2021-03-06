{* $Id: omise_cc.tpl by takahashi from cs-cart.jp 2017 *}

{script src="https://cdn.omise.co/omise.js"}
{script src="js/lib/creditcardvalidator_jp/jquery.numeric.min.js"}
{script src="js/lib/creditcardvalidator_jp/jquery.creditCardValidator.js"}

{if $card_id}
    {assign var="id_suffix" value="`$card_id`"}
{else}
    {assign var="id_suffix" value=""}
{/if}

<div class="clearfix">
    <div class="ty-credit-card">
        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_number_{$id_suffix}" class="ty-control-group__title cm-required cm-cc-number cc-number_{$id_suffix} cm-cc-number-check-length-jp cc-numeric">{__("card_number")}</label>
            <input size="35" type="tel" id="credit_card_number_{$id_suffix}" data-name="payment_info[card_number]" value="" class="ty-credit-card__input cm-focus cm-autocomplete-off cc-numeric cc-henkan" />
            <ul class="ty-cc-icons cm-cc-icons cc-icons_{$id_suffix}">
                <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                <li class="ty-cc-icons__item cm-cc-jcb"><span class="ty-cc-icons__icon jcb">&nbsp;</span></li>
            </ul>
        </div>

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_month_{$id_suffix}" class="cm-required ty-control-group__title cm-cc-date cc-date_{$id_suffix} cm-cc-exp-month cm-cc-exp-month-jp">{__("valid_thru")}</label>
            <label for="credit_card_year_{$id_suffix}" class="cm-cc-date cm-cc-exp-year cc-year_{$id_suffix} cm-cc-exp-year-jp hidden"></label>
            <input type="tel" id="credit_card_month_{$id_suffix}" data-name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short cc-numeric cc-henkan cm-autocomplete-off" />&nbsp;&nbsp;/&nbsp;&nbsp;
            <input type="tel" id="credit_card_year_{$id_suffix}"  data-name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short cc-numeric cc-henkan cm-autocomplete-off" />&nbsp;
        </div>

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_name_{$id_suffix}" class="ty-control-group__title cm-required">{__("cardholder_name")}</label>
            <input size="35" type="text" id="credit_card_name_{$id_suffix}" data-name="payment_info[card_owner]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase cm-autocomplete-off" />
        </div>

        <input type='hidden' value='' id='token' name=payment_info[token] />
        <input type='hidden' value='' id='errorMsg' name=payment_info[errorMsg] />

        {if $payment_method.processor_params.use_cvv == 'true'}
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_cvv2_{$id_suffix}" class="ty-control-group__title cm-required cm-integer cm-autocomplete-off">{__("jp_omise_security_code")}</label>
                <input type="tel" id="credit_card_cvv2_{$id_suffix}" data-name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-cc-cvv2 ty-credit-card__cvv-field-input cc-numeric cc-henkan" />

                <div class="ty-cvv2-about">
                    <span class="ty-cvv2-about__title">{__("jp_omise_what_is_security_code")}</span>
                    <div class="ty-cvv2-about__note">

                        <div class="ty-cvv2-about__info mb30 clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="{$images_dir}/visa_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title">{__("visa_card_discover")}</h5>
                                <p>{__("credit_card_info")}</p>
                            </div>
                        </div>
                        <div class="ty-cvv2-about__info clearfix">
                            <div class="ty-cvv2-about__image">
                                <img src="{$images_dir}/express_cvv.png" alt="" />
                            </div>
                            <div class="ty-cvv2-about__description">
                                <h5 class="ty-cvv2-about__description-title">{__("american_express")}</h5>
                                <p>{__("american_express_info")}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        {/if}

        {if $payment_method.processor_params.use_uid == 'true' && $auth.user_id && $auth.user_id > 0}
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="use_uid" class="ty-control-group__title cm-required">{__("jp_omise_cc_register_card_info_use")}</label>
                <p>
                    <input type="radio" name="payment_info[register_card_info]" id="register_yes" value="true" checked="checked" class="radio" />{__("yes")}
                    &nbsp;&nbsp;
                    <input type="radio" name="payment_info[register_card_info]" id="register_no" value="false" class="radio" />{__("no")}
                </p>
            </div>
        {/if}
    </div>
</div>

<script type="text/javascript">
    var checkoutForm = $('#jp_payments_form_id_{$tab_id}');

    (function(_, $) {
        var ccFormId = '{$id_suffix}';
        var ccBrand = '';

        $(function () {
            //??????????????????
            $(".cc-numeric").numeric({
                negative: false
            });
        });


        //?????????????????????
        $('.cc-henkan').change(function(){
            var icons           = $('.cc-icons_' + ccFormId + ' li');
            var ccNumber        = $(".cc-number_" + ccFormId);
            var ccNumberInput   = $("#" + ccNumber.attr("for"));

            var text  = $(this).val();
            var hen = text.replace(/[???-??????-??????-???]/g,function(s){
                return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
            });

            hen = hen.replace(/[^0-9]/g, "");
            $(this).val(hen);

            ccNumberInput.validateCreditCard(function(result) {
                if (result.card_type) {
                    icons.removeClass('active');
                    icons.filter(' .cm-cc-' + result.card_type.name).addClass('active');
                }
            });
        });


        $.ceEvent('on', 'ce.commoninit', function() {

            // ???????????????????????????????????????
            if(document.getElementById('litecheckout_payments_form')){
                checkoutForm = $('#litecheckout_payments_form');
            }
            checkoutForm.off('submit', submitHandler);
            checkoutForm.on('submit', submitHandler);

            var icons           = $('.cc-icons_' + ccFormId + ' li');
            var ccNumber        = $(".cc-number_" + ccFormId);
            var ccNumberInput   = $("#" + ccNumber.attr("for"));
            var ccMax = 0;//?????????????????????????????????
            var ccCv2           = $(".cc-cvv2_" + ccFormId);

            //????????????????????????????????????????????????
            if ($(ccNumberInput).is(':visible')) {
                ccNumberInput.validateCreditCard(function(result) {
                    icons.removeClass('active');
                    //?????????????????????
                    if (result.card_type) {
                        var userInput = ccNumberInput.val();
                        var userInputLenght = userInput.length;
                        ccBrand = result.card_type.name;
                        icons.filter(' .cm-cc-' + result.card_type.name).addClass('active');

                        if(result.card_type.name == 'visa') {
                            ccMax = result.card_type.valid_length[3];//?????????
                        }else{
                            ccMax = result.card_type.valid_length[0];//?????????
                        }

                        if(userInputLenght >= ccMax){
                            userInput = userInput.substring(0, ccMax);//????????????????????????
                            ccNumberInput.val(userInput);	//??????????????????????????????????????????
                        }

                        if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                            ccCv2.removeClass("cm-required");
                        } else {
                            ccCv2.addClass("cm-required");
                        }
                    }
                });
            }

        });


        //????????????????????????????????? YY???YY??????????????????????????????
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-cc-exp-year-jp',
            message: _.tr('error_validator_cc_exp_jp'),
            func: function(id) {
                var input = $('#' + id);
                var flag = false;//RETURN

                var yy_val = input.val();
                var mm_val = $('#credit_card_month_{$id_suffix}').val();

                if(yy_val.length == 2 && mm_val.length == 2){
                    flag = check_exp_date(yy_val, mm_val);
                }
                return flag;
            }
        });



        //???????????????????????????
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-cc-number-check-length-jp',
            message: _.tr('error_validator_cc_check_length_jp'),
            func: function(id) {
                var input = $('#' + id);
                var flag = false;//RETURN
                var valid_length = 16;
                $(input).validateCreditCard(function(result) {
                    if (result.card_type) {
                        //??????
                        if(result.card_type.name == 'amex'){
                            valid_length = 15;
                        }else if(result.card_type.name == 'diners_club_international') {
                            valid_length = 14;
                        }

                        if(input.val().length == valid_length){
                            flag = true;
                        }else{
                            flag = false;
                        }
                    }
                });
                //??????????????????????????????
                if(!flag){
                    $('.ty-cc-icons').attr('style', 'bottom: 45px');
                }else{
                    $('.ty-cc-icons').attr('style', 'bottom: 23px');
                }

                //????????????????????????????????????TRUE
                {if $payment_method.processor_params.mode == "test"}
                if(input.val().length > 0) {
                    $('.ty-cc-icons').attr('style', 'bottom: 23px');
                }
                flag = true;
                {/if}

                return flag;
            }
        });
    })(Tygh, Tygh.$);

    // ???????????????????????????????????????
    var isSubmit = false;

    // ????????????????????????????????????submit????????????????????????
    function submitHandler(event) {
        // ???????????????????????????????????????
        if(!document.getElementById('credit_card_name_{$id_suffix}')) {
            return;
        }

        event.preventDefault();

        var cardNameVal = document.getElementById('credit_card_name_{$id_suffix}').value;
        var cardNoVal = document.getElementById('credit_card_number_{$id_suffix}').value.replace(/\s+/g, "");
        var cardMonthVal = document.getElementById('credit_card_month_{$id_suffix}').value;
        var cardYearVal = document.getElementById('credit_card_year_{$id_suffix}').value;

        var secCdObj = document.getElementById('credit_card_cvv2_{$id_suffix}');
        var secCdVal = '';

        // ?????????????????????????????????????????????????????????
        if(secCdObj) {
            secCdVal = secCdObj.value;
        }

        // ???????????????Validation????????????
        var isFormVal = checkoutForm.ceFormValidator('check');

        // ???????????????Validation???OK?????????
        // ???????????????????????????????????????
        if(isFormVal && !isSubmit) {
            isSubmit = true;

            // Public Key????????????
            Omise.setPublicKey("{$addons.omise.public_key}");

            // ???????????????????????????
            var cardObject = {
                "name": cardNameVal,
                "number": cardNoVal,
                "expiration_month": cardMonthVal,
                "expiration_year": cardYearVal,
                "security_code": secCdVal
            };

            Omise.createToken("card", cardObject, getToken);
        }
    }

    function getToken (statusCode, response) {

        // ??????????????????????????????????????????????????????
        if (response.object == "error" || !response.card.security_code_check) {
            // Display an error message.
            var message_text = "invalid security code";
            if(response.object == "error") {
                if(response.message != 'undefined') {
                    message_text = response.message;
                }
            }

            // ????????????????????????????????????
            document.getElementById('errorMsg').value = message_text;

            // ?????????????????????????????????
        } else {
            // ??????????????????????????????
            document.getElementById('token').value = response.id;

            /* ???????????????????????????????????????
            // ????????????????????????????????????????????????
            document.getElementById('credit_card_name_{$id_suffix}').value = '';
            document.getElementById('credit_card_number_{$id_suffix}').value = '';
            document.getElementById('credit_card_year_{$id_suffix}').value = '';
            document.getElementById('credit_card_month_{$id_suffix}').value = '';

            var scCdObj = document.getElementById('credit_card_cvv2_{$id_suffix}');
            // ?????????????????????????????????????????????????????????
            if(scCdObj) {
                // ?????????????????????????????????
                scCdObj.value = '';
            }
            */

        }

        checkoutForm.get(0).submit();
    }

    //??????YYMM
    function get_now_yymm() {
        var now = new Date();
        var y = now.getFullYear();
        var m = now.getMonth() + 1;
        var yy = y.toString().slice(-2);
        var mm = ("0" + m).slice(-2);

        return yy + mm;
    }

    //????????????????????????????????????
    function check_exp_date(yy, mm) {
        var yymm_val = yy + mm;
        var now_yymm = get_now_yymm();
        //var now_mm = get_now_yymm("mm");
        if(mm < 13 && yymm_val >= now_yymm){
            return true;
        }else{
            return false;
        }
        return true;
    }
</script>
