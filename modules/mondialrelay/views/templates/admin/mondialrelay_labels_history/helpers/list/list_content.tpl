{*
 * NOTICE OF LICENSE
 *
 * @author    202 ecommerce <tech@202-ecommerce.com>
 * @author    Mondial Relay
 * @copyright Copyright (c) Mondial Relay
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 *}
{extends file=$original_content}

{block name="td_content"}
  {if $key == 'id_order'}
    <a target="blank" href="{$view_order_url|escape:'htmlall':'UTF-8'}{$tr.$key|escape:'htmlall':'UTF-8'}">
  {/if}
  
  {$smarty.block.parent}
  
  {if $key == 'id_order'}
    </a>
  {/if}
{/block}