{* Modified by tommy from cs-cart.jp 2017 *}

{if "ULTIMATE"|fn_allowed_for && ($runtime.company_id && $product_data.shared_product == "Y" && $product_data.company_id != $runtime.company_id)}
    {assign var="hide_for_vendor" value=true}
    {assign var="skip_delete" value=true}
    {assign var="hide_inputs" value="cm-hide-inputs"}
{/if}

{if !isset($product_id)}
    {assign var="product_id" value=$product_data.product_id}
{/if}

{if !isset($expand_all)}
    {assign var="expand_all" value="true"}
{/if}

<div class="items-container" id="product_files_list">
{if !$hide_for_vendor}
<div class="btn-toolbar clearfix">
    <div class="pull-right">
        <div class="pull-left shift-right">
            {include file="common/popupbox.tpl" id="add_new_files" text=__("new_file") href="products.update_file?product_id=`$product_id`" link_text=__("add_file") act="general" icon="icon-plus"}
        </div>
        <div class="pull-right">
            {include file="common/popupbox.tpl" id="add_new_folders" text=__("new_folder") href="products.update_folder?product_id=`$product_id`" link_text=__("add_folder") act="general" icon="icon-plus"}</div>
    </div>
</div>
{/if}
    {if $files_tree}
        <div class="table-wrapper">
            <table width="100%" class="table table-middle table-tree">
                <thead>
                <tr>
                    <th>
                        <div class="pull-left">
                            <span alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" id="on_cat" class="cm-combinations{if $expand_all} hidden{/if}"><span class="icon-caret-right"> </span></span>
                            <span alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" id="off_cat" class="cm-combinations{if !$expand_all} hidden{/if}"><span class="icon-caret-down"> </span></span>
                        </div>
                        &nbsp;{__("name")}
                    </th>
                    {* Modified by tommy from cs-cart.jp 2017 *}
                    {hook name="products:jp_update_files_index"}{/hook}
                    <th width="5%" class="center">&nbsp;</th>
                    <th width="15%" class="right">{__("status")}</th>
                </tr>
                </thead>
            </table>
        </div>

        {foreach from=$files_tree.folders item="folder"}
        <div class="table-wrapper">
            <table width="100%" class="table table-middle table-tree cm-row-status-{$folder.status|lower}">
                <tbody>
                {include file="views/products/components/folder_tree.tpl"
                    folder=$folder
                    id=$folder.folder_id
                    href="products.update_folder?product_id=`$product_id`&folder_id=`$folder.folder_id`"
                    direction=$direction
                }
                </tbody>

                <tbody id="group_folder_{$folder.folder_id}" class="{if !$expand_all} hidden{/if}">
                    {foreach from=$folder.files item="file"}
                        {include file="views/products/components/file_tree.tpl"
                            product_file=$file
                            level=1
                            id=$file.file_id
                            href="products.update_file?product_id=`$product_id`&file_id=`$file.file_id`"
                            direction=$direction
                        }
                    {foreachelse}
                        <tr class="multiple-table-row cm-row-status-d">
                            <td colspan="3">
                                <div class="row-status" style="padding-{$direction}: 35px;">
                                    {__("no_files")}
                                </div>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        {/foreach}

        <div class="table-wrapper">
            <table width="100%" class="table table-middle table-tree">
                <tbody>
                    {foreach from=$files_tree.files item="file"}
                        {include file="views/products/components/file_tree.tpl"
                            product_file=$file
                            id=$file.file_id
                            href="products.update_file?product_id=`$product_id`&file_id=`$file.file_id`"
                            direction=$direction
                        }
                    {/foreach}
                </tbody>
            </table>
        </div>
    {else}
        <p class="no-items">{__("no_data")}</p>
    {/if}
<!--product_files_list--></div>
