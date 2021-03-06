{* $Id: nttstr_cc.tpl by takahashi from cs-cart.jp 2019 *}

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
            <input size="35" type="text" id="credit_card_name_{$id_suffix}" data-name="payment_info[card_owner]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase cc-owner cm-autocomplete-off" />
        </div>

        <div id="token_area"></div>
        <input type='hidden' value='' id='errorCd' name=payment_info[errorCd] />
        <input type='hidden' value='' id='errorMsg' name=payment_info[errorMsg] />

        <div class="ty-credit-card__control-group ty-control-group">
            <label for="credit_card_cvv2_{$id_suffix}" class="ty-control-group__title cm-required cm-integer cm-autocomplete-off">{__("jp_nttstr_security_code")}</label>
            <input type="tel" id="credit_card_cvv2_{$id_suffix}" data-name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-cc-cvv2 ty-credit-card__cvv-field-input cc-numeric cc-henkan" />

            <div class="ty-cvv2-about">
                <span class="ty-cvv2-about__title">{__("jp_nttstr_what_is_security_code")}</span>
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

        //?????????
        $('.cc-owner').change(function(){
            $(this).val($(this).val().replace(/[^a-z A-Z]/g,""));
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

    // ?????????????????????
    // ???????????????
    var cardNameVal = '';
    var cardNoVal = '';
    var cardYearVaal = '';
    var cardMonthVal = '';
    var secCdVal = '';

    // ???????????????
    var global_cnt = 1;
    var vendor_cnt = {$vendor_cnt};

    // ???????????????????????????????????????
    var isSubmit = false;

    // ????????????????????????????????????submit????????????????????????
    function submitHandler(event) {
        // ???????????????????????????????????????
        if(!document.getElementById('credit_card_number_{$id_suffix}')) {
            return;
        }

        event.preventDefault();

        cardNameVal = document.getElementById('credit_card_name_{$id_suffix}').value;
        cardNoVal = document.getElementById('credit_card_number_{$id_suffix}').value.replace(/\s+/g, "");
        cardMonthVal = document.getElementById('credit_card_month_{$id_suffix}').value;
        cardYearVal = document.getElementById('credit_card_year_{$id_suffix}').value;
        secCdVal = document.getElementById('credit_card_cvv2_{$id_suffix}').value;

        // ???????????????Validation????????????
        var isFormVal = checkoutForm.ceFormValidator('check');

        // ???????????????Validation???OK?????????
        if(isFormVal) {
            jQuery.ajax( {
                type: 'POST',
                url: {if $payment_method.processor_params.mode == "test"}'https://www.piggybank-dbg.jp/direct/servlet/EP7Token'{else}'https://www.chocom.net/direct/servlet/EP7Token'{/if},
                data: {
                    'shopId': {$addons.nttstr.shopid},
                    'pan': cardNoVal,
                    'cardExpiry': cardYearVal + cardMonthVal,
                    'securityCode': secCdVal,
                    'name': cardNameVal,
                },
            })
            .done(function (data) {
                chocom(data);
            });
        }
    }

    function chocom (response) {

        // ??????????????????????????????????????????????????????
        if ( response['code'] ) {
            // ????????????????????????????????????
            document.getElementById('errorCd').value = response['code'];
            document.getElementById('errorMsg').value = response['msg'];

            checkoutForm.get(0).submit();

        // ?????????????????????????????????
        } else {
            /* ???????????????????????????????????????
            // ????????????????????????????????????????????????
            document.getElementById('credit_card_name_{$id_suffix}').value = '';
            document.getElementById('credit_card_number_{$id_suffix}').value = '';
            document.getElementById('credit_card_year_{$id_suffix}').value = '';
            document.getElementById('credit_card_month_{$id_suffix}').value = '';
            document.getElementById('credit_card_cvv2_{$id_suffix}').value = '';
            */

            // ??????????????????????????????????????????hidden???????????????
            document.getElementById('token_area').innerHTML += "<input type='hidden' value='" + response['choToken'] + "' id='token' name=payment_info[token][] />";

            // ??????????????????????????????????????????????????????
            // ???????????????????????????????????????
            if( global_cnt == vendor_cnt  && !isSubmit ) {
                isSubmit = true;
                checkoutForm.get(0).submit();
                return false;
            }

            // ????????????????????????????????????????????????????????????????????????????????????
            if( global_cnt < vendor_cnt ) {
                jQuery.ajax( {
                    type: 'POST',
                    url: {if $payment_method.processor_params.mode == "test"}'https://www.piggybank-dbg.jp/direct/servlet/EP7Token'{else}'https://www.chocom.net/direct/servlet/EP7Token'{/if},
                    data: {
                        'shopId': {$addons.nttstr.shopid},
                        'pan': cardNoVal,
                        'cardExpiry': cardYearVal + cardMonthVal,
                        'securityCode': secCdVal,
                        'name': cardNameVal,
                    },
                })
                .done(function (data) {
                    chocom(data);
                });

                global_cnt += 1;
            }
        }


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
