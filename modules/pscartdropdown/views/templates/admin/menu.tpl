{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}

<div id="modulecontent" class="clearfix">
    <div id="pscartdropdown-menu">
        <div class="col-lg-2">
            <div class="list-group" v-on:click.prevent>
                <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('cartdropdownConfiguration') }" v-on:click="makeActive('cartdropdownConfiguration')"><i class="fa fa-gavel"></i> {l s='Configuration' mod='pscartdropdown'}</a>
                {if ($apifaq != '')}
                    <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('faq') }" v-on:click="makeActive('faq')"><i class="fa fa-question-circle"></i> {l s='Help' mod='pscartdropdown'}</a>
                {/if}
            </div>
            <div class="list-group" v-on:click.prevent>
                <a class="list-group-item" style="text-align:center"><i class="icon-info"></i> {l s='Version' mod='pscartdropdown'} {$module_version|escape:'htmlall':'UTF-8'} | <i class="icon-info"></i> PrestaShop {$ps_version|escape:'htmlall':'UTF-8'}</a>
            </div>
        </div>
    </div>

    {* list your admin tpl *}
    <div id="cartdropdownConfiguration" class="pscartdropdown_menu addons-hide">
        {include file="./tabs/cartdropdownConfiguration.tpl"}
    </div>

    <div id="faq" class="pscartdropdown_menu addons-hide">
        {if ($apifaq != '')}
            {include file="./tabs/help.tpl"}
        {/if}
    </div>

</div>

{* Use this if you want to send php var to your js *}
{literal}
<script type="text/javascript">
    let base_url = "{/literal}{$ps_base_dir|escape:'htmlall':'UTF-8'}{literal}";
    let isPs17 = "{/literal}{$isPs17|escape:'htmlall':'UTF-8'}{literal}";
    let currentPage = "{/literal}{$currentPage|escape:'htmlall':'UTF-8'}{literal}";
    let moduleAdminLink = "{/literal}{$moduleAdminLink|escape:'htmlall':'UTF-8'}{literal}";
    let moduleName = "{/literal}{$module_name|escape:'htmlall':'UTF-8'}{literal}";
    let ps_version = "{/literal}{$isPs17|escape:'htmlall':'UTF-8'}{literal}";
</script>
{/literal}
