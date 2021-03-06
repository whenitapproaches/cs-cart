{hook name="companies:view"}

{assign var="obj_id" value=$company_data.company_id}
{assign var="obj_id_prefix" value="`$obj_prefix``$obj_id`"}
    {include file="common/company_data.tpl" company=$company_data show_name=true show_descr=true show_rating=true show_logo=true hide_links=true}
    <div class="company-page clearfix">

        <div id="block_company_{$company_data.company_id}" class="clearfix">
            <h1 class="mainbox-title"><span>{$company_data.company}</span></h1>

            <div class="company-page-top-links clearfix">
                {hook name="companies:top_links"}
                    <div id="company_products">
                        <a href="{"companies.products?company_id=`$company_data.company_id`"|fn_url}">{__("view_vendor_products")}
                            ({$company_data.total_products} {__("items")})</a>
                    </div>
                {/hook}
            </div>
            <div class="company-page-info">
                <div class="company-logo">
                    {assign var="capture_name" value="logo_`$obj_id`"}
                    {$smarty.capture.$capture_name nofilter}
                </div>
                <div class="info-list">
                    <h5>{__("contact_information")}</h5>
                    {if $company_data.email}
                        <div>
                            <label>{__("email")}:</label>
                            <span><a href="mailto:{$company_data.email}">{$company_data.email}</a></span>
                        </div>
                    {/if}
                    {if $company_data.phone}
                        <div>
                            <label>{__("phone")}:</label>
                            <span>{$company_data.phone}</span>
                        </div>
                    {/if}
                    {if $company_data.fax}
                        <div>
                            <label>{__("fax")}:</label>
                            <span>{$company_data.fax}</span>
                        </div>
                    {/if}
                    {if $company_data.url}
                        <div>
                            <label>{__("website")}:</label>
                            <span><a href="{$company_data.url}">{$company_data.url}</a></span>
                        </div>
                    {/if}
                </div>
                <div class="info-list">
                    {if $smarty.const.CART_LANGUAGE == 'ja' && $company_data.country == 'JP'}
                    <h5>{__("addresses")}</h5>
                    <div>
                        <span>{if $company_data.zipcode}???{$company_data.zipcode} {/if}{$company_data.state|fn_get_state_name:$company_data.country}{$company_data.city}{$company_data.address} ({$company_data.country|fn_get_country_name})</span>
                    </div>
                    {else}
                    <h5>{__("shipping_address")}</h5>
                    <div>
                        <span>{$company_data.address}</span>
                    </div>
                    <div>
                        <span>{$company_data.city}
                            , {$company_data.state|fn_get_state_name:$company_data.country} {$company_data.zipcode}</span>
                    </div>
                    <div>
                        <span>{$company_data.country|fn_get_country_name}</span>
                    </div>
                    {/if}
                </div>
            </div>
        </div>

        {capture name="tabsbox"}
            <div id="content_description"
                 class="{if $selected_section && $selected_section != "description"}hidden{/if}">
                {if $company_data.company_description}
                    <div class="wysiwyg-content">
                        {$company_data.company_description nofilter}
                    </div>
                {/if}
            </div>
            {hook name="companies:tabs"}
            {/hook}

        {/capture}
    </div>
    {include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$smarty.request.selected_section}

{/hook}