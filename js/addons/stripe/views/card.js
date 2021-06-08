(function (_, $) {

    function isFormValid($form) {
        var isValid = true;

        $('.sc-field', $form).each(function () {
            var $checkoutField = $(this);
            var isFieldComplete = $checkoutField.hasClass('sc-field--complete');
            $checkoutField.closest('.ty-control-group').toggleClass('error', !isFieldComplete)
                .find('.cm-required').toggleClass('cm-failed-label', !isFieldComplete);
            isValid = isValid && isFieldComplete;
        });

        return isValid;
    }

    _.stripe = _.stripe || {};
    _.stripe.view = {
        id: 'card',
        name: 'Credit Card',

        render: function (stripeInstance, stripeElementsApi, stripeElements, elements) {
            var $card = elements.card,
                $expiryDate = elements.expiry,
                $cvc = elements.cvc;

            var options = {
                classes: {
                    base: 'sc-field',
                    complete: 'sc-field--complete',
                    empty: 'sc-field--empty',
                    focus: 'sc-field--focus',
                    invalid: 'sc-field--invalid',
                    webkitAutofill: 'sc-field--autofill'
                },
                style: {
                    base: {
                        fontSize: '18px',
                        color: '#2e3a47'
                    },
                    invalid: {
                        color: '#bf4d4d'
                    }
                }
            };

            stripeElements.card = stripeElementsApi.create('cardNumber', options);
            stripeElements.card.mount($card[0]);

            stripeElements.expiry = stripeElementsApi.create('cardExpiry', options);
            stripeElements.expiry.mount($expiryDate[0]);

            stripeElements.cvc = stripeElementsApi.create('cardCvc', options);
            stripeElements.cvc.mount($cvc[0]);

            return stripeElements;
        },

        checkConfirmation: function(stripeInstance, paymentIntentResult, $paymentIntentId, $submitBtn)
        {
            $.ceAjax('request', $paymentIntentId.data('caStripeConfirmationUrl'), {
                method: 'post',
                hidden: false,
                caching: false,
                data: {
                    payment_intent_id: paymentIntentResult.paymentMethod.id,
                },
                callback: function(response) {
                    $.toggleStatusBox('hide');

                    if (response.error) {
                        $submitBtn.prop('disabled', null);
                        $.ceNotification('show', {
                            type: 'E',
                            title: _.tr('error'),
                            message: response.error.message
                        });
                        return;
                    }

                    if (response.requires_confirmation) {
                        _.stripe.view.requireConfirmation(stripeInstance, response.client_secret, $paymentIntentId, $submitBtn);
                    } else {
                        _.stripe.view.confirmPaymentIntent(response.payment_intent_id, $paymentIntentId, $submitBtn);
                    }
                }
            });
        },

        confirmPaymentIntent: function(paymentIntentId, $paymentIntentId, $submitBtn) {
            $paymentIntentId.val(paymentIntentId);
            $paymentIntentId.data('caStripeIsSubmitted', true);
            $submitBtn.prop('disabled', null);

            setTimeout(function(){
                $submitBtn.trigger('click');
            }, 0);
        },

        requireConfirmation: function(stripeInstance, paymentIntentClientSecret, $paymentIntentId, $submitBtn) {
            stripeInstance.handleCardAction(paymentIntentClientSecret).then(function(result) {
                if (result.error) {
                    $submitBtn.prop('disabled', null);
                    $.ceNotification('show', {
                        type: 'E',
                        title: _.tr('error'),
                        message: result.error.message
                    });
                    return;
                }

                _.stripe.view.confirmPaymentIntent(result.paymentIntent.id, $paymentIntentId, $submitBtn);
            });
        },

        addSubmitHandler: function (stripeInstance, stripeElementsApi, stripeElements, elements) {
            var $form = elements.form,
                $paymentIntentId = elements.paymentIntentId,
                paymentId = $paymentIntentId.data('caStripePaymentId');

            $.ceEvent('on', 'ce.formpost_' + $form.prop('name'), function ($form, $submitBtn) {
                var elements = _.stripe.view.getElements($form),
                    $paymentIntentId = elements.paymentIntentId,
                    $name = elements.name;

                var isSubmit = !$submitBtn.hasClass('cm-skip-validation') && $paymentIntentId.length !== 0;
                var isValidPayment = $paymentIntentId.data('caStripePaymentId') === paymentId;
                var isPaymentSkipped = $paymentIntentId.data('caStripeProcessPaymentName')
                    && $submitBtn.prop('name') !== $paymentIntentId.data('caStripeProcessPaymentName');
                var isSubmitted = $paymentIntentId.data('caStripeIsSubmitted');

                if (!isSubmit || !isValidPayment || isPaymentSkipped || isSubmitted) {
                    return true;
                }

                $submitBtn.prop('disabled', 'disabled');
                if (isFormValid($form)) {
                    stripeInstance.createPaymentMethod(
                        'card',
                        stripeElements.card,
                        {billing_details: {name: $name.val()}}
                    ).then(function (result) {
                        if (result.error) {
                            $submitBtn.prop('disabled', null);
                            $.ceNotification('show', {
                                type: 'E',
                                title: _.tr('error'),
                                message: result.error.message
                            });
                            return;
                        }

                        _.stripe.view.checkConfirmation(stripeInstance, result, $paymentIntentId, $submitBtn);
                    });
                } else {
                    $submitBtn.prop('disabled', null);
                }

                return false;
            });

            $paymentIntentId.data('caStripeIsFormReady', true);
        },

        isInitialized: function (elements) {
            return elements.paymentIntentId && elements.paymentIntentId.data('caStripeIsFormReady');
        },

        teardown: function (stripeElements) {
            stripeElements.card && stripeElements.card.destroy();
            stripeElements.expiry && stripeElements.expiry.destroy();
            stripeElements.cvc && stripeElements.cvc.destroy();
        },

        getElements: function ($form) {
            return {
                card: $('[data-ca-stripe-element="card"]', $form),
                expiry: $('[data-ca-stripe-element="expiry"]', $form),
                cvc: $('[data-ca-stripe-element="cvc"]', $form),
                name: $('[data-ca-stripe-element="name"]', $form),
                paymentIntentId: $('[data-ca-stripe-element="paymentIntentId"]', $form)
            };
        }
    };
})(Tygh, Tygh.$);
