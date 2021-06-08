{* Modified by takahashi from cs-cart.jp 2019 BOF *}
{* 旧購入手続き（ステップ形式）アドオン時の注文確定画面で「今回のご注文で支払いは発生しません。」が消えない問題を修正 *}
{include file="buttons/button.tpl" but_href="checkout.delete_use_certificate?gift_cert_code=`$code`&redirect_url=`$r_url`" but_meta="ty-delete-icon cm-ajax cm-post cm-ajax-force cm-ajax-full-render" but_role="delete" but_target_id="cart_items,cart_status*,litecheckout_form,checkout*`$additional_ids`"}
{* Modified by takahashi from cs-cart.jp 2019 EOF *}