<?php
/**
 * NOTICE OF LICENSE
 *
 * @author Mondial Relay <offrestart@mondialrelay.fr>
 * @copyright Copyright (c) Mondial Relay
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

use MondialRelay\MondialRelay\DbMigration\Update\DeliveryModesUpdate20221107142440;
require_once _PS_MODULE_DIR_ . '/mondialrelay/vendor/autoload.php';

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Upgrade to 3.3.0
 * @param Mondialrelay $module
 * @return bool
 * @throws PrestaShopDatabaseException
 */
function upgrade_module_3_3_0($module)
{
    return (new DeliveryModesUpdate20221107142440())->execute();
}
