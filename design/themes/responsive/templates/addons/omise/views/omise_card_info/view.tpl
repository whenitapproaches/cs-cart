{* $Id: view.tpl by takahashi from cs-cart.jp 2017 *}

{if $registered_card}

<table cellpadding="0" cellspacing="0" width="100%" border="0">
<tr valign="top">
	<td>
		{if $registered_card.card_number}
		<div class="form-field">
			<label>{__("card_number")} : {$registered_card.card_number}</label>
		</div>
		{/if}
		{if $registered_card.card_valid_term}
		<div class="form-field">
			<label>{__("expiry_date")} : {$registered_card.card_valid_term}</label>
		</div>
		{/if}
	</td>
</tr>
</table>
<div class="buttons-container cm-confirm">
	{include file="buttons/button.tpl" but_text=__("jp_omise_ccreg_delete_card_info") but_href="omise_card_info.delete"}
</div>

{else}
	<p class="no-items">{__("jp_omise_ccreg_no_card_info")}</p>
{/if}

{capture name="mainbox_title"}{__("jp_omise_ccreg_registered_card")}{/capture}
