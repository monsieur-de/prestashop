<?php
/**
 * NOTICE OF LICENSE
 *
 * @author Mondial Relay <offrestart@mondialrelay.fr>
 * @copyright Copyright (c) Mondial Relay
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once _PS_MODULE_DIR_ . '/mondialrelay/controllers/admin/AdminMondialrelayController.php';
require_once _PS_MODULE_DIR_ . '/mondialrelay/mondialrelay.php';
require_once _PS_MODULE_DIR_ . '/mondialrelay/classes/MondialrelayTools.php';

use MondialrelayClasslib\Actions\ActionsHandler;
use MondialRelay\MondialRelay\Api\Client;
use MondialRelay\MondialRelay\Api\Request\GenerateLabelsRequest;
use MondialrelayClasslib\Extensions\ProcessLogger\ProcessLoggerHandler;

class AdminMondialrelayLabelsGenerationController extends AdminMondialrelayController
{
    /**
     * @inheritdoc
     */
    protected $with_mondialrelay_header = false;
    
    /** @var array $insuranceLevelsList see MondialrelayCarrierMethod::getInsuranceLevelsList() */
    protected $insuranceLevelsList = array();
    
    /**
     * @inheritdoc
     * Our list will always have at least one filter (order state)
     */
    protected $filter = true;
    
    /**
     * @inheritdoc
     * We don't want a link on whole lines
     */
    protected $list_no_link = true;

    public function __construct()
    {
        $this->table = MondialrelaySelectedRelay::$definition['table'];

        $carrierMethod = new MondialrelayCarrierMethod();

        $this->className = get_class($carrierMethod);

        parent::__construct();

        $this->insuranceLevelsList = $carrierMethod->getInsuranceLevelsList();

        $this->initList();
    }

    public function init()
    {
        return parent::init();
    }
    
    public function initList()
    {
        $this->explicitSelect = true;
        
        $this->fields_list = array(
            'id_order' => array(
                'title' => $this->module->l('Order ID', 'AdminMondialrelayLabelsGenerationController'),
                'align' => 'center',
                'class' => 'fixed-width-xs',
                'filter_key' => 'a!id_order'
            ),
            'customer' => array(
                'title' => $this->module->l('Customer', 'AdminMondialrelayLabelsGenerationController'),
                'havingFilter' => true,
            ),
            'current_state' => array(
                'title' => $this->module->l('Order Status', 'AdminMondialrelayLabelsGenerationController'),
                'callback' => 'getOrderStateName',
                'type' => 'select',
                'list' => array_column(OrderState::getOrderStates($this->context->language->id), 'name', 'id_order_state'),
                'filter_key' => 'o!current_state',
            ),
            'total_paid' => array(
                'title' => $this->module->l('Total price', 'AdminMondialrelayLabelsGenerationController'),
                'type' => 'price',
            ),
            'total_shipping' => array(
                'title' => $this->module->l('Total shipping costs', 'AdminMondialrelayLabelsGenerationController'),
                'type' => 'price',
            ),
            'date_add' => array(
                'title' => $this->module->l('Date', 'AdminMondialrelayLabelsGenerationController'),
                'filter_key' => 'o!date_add',
                'type' => 'date',
            ),
            'package_weight' => array(
                'title' => $this->module->l('Weight (grams)', 'AdminMondialrelayLabelsGenerationController'),
            ),
            'insurance_level' => array(
                'title' => $this->module->l('Insurance', 'AdminMondialrelayLabelsGenerationController'),
                'callback' => 'getInsuranceLevelLabel',
                'filter_key' => 'a!insurance_level',
            ),
            'selected_relay_num' => array(
                'title' => $this->module->l('MR Number', 'AdminMondialrelayLabelsGenerationController'),
            ),
            'selected_relay_country_iso' => array(
                'title' => $this->module->l('MR Country', 'AdminMondialrelayLabelsGenerationController'),
            ),
        );
        
        // Build the query
        $this->_select .= 'a.' . MondialrelaySelectedRelay::$definition['primary'] . ', '
            . 'o.id_currency, '
            . 'os_l.name AS os_name, '
            . 'CONCAT(c.firstname, " ", c.lastname) AS `customer`';
        $this->_join .=
            'INNER JOIN `'._DB_PREFIX_. MondialrelayCarrierMethod::$definition['table'].'` mr_cm '
                . 'ON mr_cm.id_mondialrelay_carrier_method = a.id_mondialrelay_carrier_method '
            . 'INNER JOIN `'._DB_PREFIX_.Order::$definition['table'].'` o ON o.id_order = a.id_order '
            . 'INNER JOIN `'._DB_PREFIX_.OrderState::$definition['table'].'_lang` os_l '
                . 'ON os_l.id_order_state = o.current_state AND os_l.id_lang = ' . (int)$this->context->language->id
            . ' LEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = o.`id_customer`)';
        $this->_where .= 'AND (a.expedition_num = "" OR a.expedition_num IS NULL) ';
        $this->_where .= 'AND o.id_shop IN (' . implode(', ', Shop::getContextListShopID()) . ') ';


        // Per-row actions
        $this->actions_available[] = 'generate';
        $this->actions = array('generate');
        
        // Bulk actions
        $this->bulk_actions = array(
            'generateSelectionLabels' => array(
                'text' => $this->module->l('Generate labels for selected orders', 'AdminMondialrelayLabelsGenerationController'),
                'icon' => ''
            ),
        );
    }
    
    public function getOrderStateName($id_order_state, $data)
    {
        return $data['os_name'];
    }
    
    public function getInsuranceLevelLabel($insurance_level, $data)
    {
        return $this->insuranceLevelsList[$insurance_level];
    }

    /**
     * Display "generate" and "edit" action link side by side
     * @see HelperList::displayListContent
     */
    public function displayGenerateLink($token, $id, $name = null)
    {
        $tpl = $this->helper->createTemplate('list_actions.tpl');
        if (!array_key_exists('Generate', HelperList::$cache_lang)) {
            HelperList::$cache_lang['Generate'] = $this->module->l('Generate', 'AdminMondialrelayLabelsGenerationController');
        }
        
        $tpl->assign(array(
            'href_generate' => $this->context->link->getAdminLink('AdminMondialrelayLabelsGeneration')
                    . '&generateLabel&' . MondialrelaySelectedRelay::$definition['primary'] . '=' . $id,
            'action' => HelperList::$cache_lang['Generate'],
            'id' => $id,
            'href_edit' => $this->context->link->getAdminLink('AdminMondialrelaySelectedRelay')
                .'&'.$this->helper->identifier.'='.$id.'&update'.$this->helper->table
                .'&back='.urlencode($this->context->link->getAdminLink('AdminMondialrelayLabelsGeneration')),
        ));
        return $tpl->fetch();
    }

    /**
     * @inheritdoc
     */
    public function setHelperDisplay(Helper $helper)
    {
        parent::setHelperDisplay($helper);
        switch (get_class($this->helper)) {
            case 'HelperList':
                $this->tpl_list_vars['original_content'] = $this->helper->base_folder . 'list_content.tpl';
                $this->tpl_list_vars['view_order_url'] = $this->context->link->getAdminLink('AdminOrders')
                    . '&vieworder&id_order=';
                break;
        }
    }

    public function initPageHeaderToolbar()
    {
        parent::initPageHeaderToolbar();
        $this->page_header_toolbar_title = $this->module->l('Labels Generation', 'AdminMondialrelayLabelsGenerationController');
    }
    
    public function initContent()
    {
        $this->informations[] = $this->module->l('You can create labels for all Mondial relay orders in selected status. You can select multiple lines or all orders if you want. [br] Please use bulk actions for selection and labels generations. [br] To see the labels History please click [a]here[/a].', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayLabelsHistory'), 'target' => 'blank'));
    
        return parent::initContent();
    }

    public function processFilter()
    {
        $filterOrderState = (int)Configuration::get(Mondialrelay::OS_DISPLAY_LABEL);
        if ($filterOrderState) {
            $this->setDefaultFilter('o!current_state', $filterOrderState);
        }
        return parent::processFilter();
    }

    public function initProcess()
    {
        parent::initProcess();
        if (Tools::isSubmit('generateLabel')) {
            $this->action = 'generateLabel';
        }
    }

    public function ajaxProcessGenerateLabel(){
        $this->processGenerateLabel();
    }

     /**
     * Prepare (get from DB) and send (return successes / errors), for a single
     * order
     */
    public function processGenerateLabel()
    {
        if(Configuration::get(MondialRelay::HOME_DELIVERY)){
            return $this->generateLabelApi2();
        } else {
            return $this->generateLabelApi1();
        }
    }
    
    /**
     * Prepare (get from DB) and send (return successes / errors), for a single
     * order
     */
    public function generateLabelApi1()
    {
        $selectedRelay = new MondialrelaySelectedRelay(
            Tools::getValue(MondialrelaySelectedRelay::$definition['primary'])
        );
        if (!Validate::isLoadedObject($selectedRelay)) {
            $this->errors[] = Tools::displayError('The object cannot be loaded (or found)');
            return false;
        }

        if(!$selectedRelay->selected_relay_num){
            $this->errors[] = $this->module->l('To collect the labels for home delivery, please provide the API2 identifiers [a] Api 2 [/a]', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayAccountSettings') . '#mondialrelay_requirements-results', 'target' => 'blank'));
            return false;
        }
        
        if (true !== ($error = $this->validateGeneration($selectedRelay))) {
            $this->errors[] = $error;
            return false;
        }
        
        // Create the handler
        $handler = new ActionsHandler();
        
        // Set input data
        $handler->setConveyor(array(
            // The Actions chain was designed with bulk actions in mind, so we
            // have to pass an array
            'order_ids' => array($selectedRelay->id_order),
        ));
        
        // Set actions to execute
        $handler->addActions('prepareData', 'generateLabels', 'sendTrackingEmails');

        // Process actions chain
        try {
            $handler->process('GenerateLabels');
        } catch (\Exception $e) {
            $this->errors[] = sprintf(
                $this->module->l('Could not generate label : %s', 'AdminMondialrelayLabelsGenerationController'),
                $e->getMessage()
            );
            $this->warnings[] = $this->module->l('Please [a] Check requirements [/a] to verify if all settings are OK.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayHelp') . '#mondialrelay_requirements-results', 'target' => 'blank'));

            $actionsResult = $handler->getConveyor();
            if (!empty($actionsResult['errors'])) {
                $this->errors = array_merge($this->errors, $actionsResult['errors']);
            }

            return false;
        }
        
        // Get process result, set errors if any
        $actionsResult = $handler->getConveyor();
        if (!empty($actionsResult['errors'])) {
            $this->errors[] = $this->module->l('Could not generate label.', 'AdminMondialrelayLabelsGenerationController');
            $this->errors = array_merge($this->errors, $actionsResult['errors']);
            $this->warnings[] = $this->module->l('Please [a] Check requirements [/a] to verify if all settings are OK.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayHelp') . '#mondialrelay_requirements-results', 'target' => 'blank'));
            return false;
        } else {
            $this->confirmations[] = $this->module->l('Label generated; see the [a] "Labels History" [/a] tab to download it.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayLabelsHistory'), 'target' => 'blank'));
        }
    }

    public function generateLabelApi2(){
        if($this->boxes){
            $selectedIds = $this->boxes;
        } else {
            $selectedIds = [Tools::getValue(MondialrelaySelectedRelay::$definition['primary'])];
        }

        $orderIds = [];

        foreach($selectedIds as $id){
            $selectedRelay = new MondialrelaySelectedRelay($id);

            if(!$this->checkRelay($selectedRelay) && !$this->checkShopAddress()){
                $this->errors[] = Tools::displayError(sprintf(
                    'The MondialrelaySelectedRelay object %s cannot be loaded (or found)',
                    $id
                ));
                continue;
            } 

            $orderIds[] = $selectedRelay->id_order;
        }

        if (empty($orderIds)) {
            $this->errors[] = $this->l('No data to prepare.', 'GenerateLabelsActions');
            return false;
        }

        $client = (new Client());
        $request = new GenerateLabelsRequest($client, $orderIds);

        $exec = $request->execute();
        $this->errors = array_merge($this->errors, $exec->getErrors());
        $response = $exec->getResponse()->getClientResponse();

        $dom = new DOMDocument();
        $dom->loadXML($response);

        $shipmentsList = $dom->getElementsByTagName('ShipmentsList');
        $statusList = $dom->getElementsByTagName('StatusList');
        $shipmentData = [];

        if($shipmentsList->length){
            $shipments = $shipmentsList->item(0)->getElementsByTagName('Shipment');
            $shipmentData = $this->setShipmentInformations($shipments);
        } 
        
        if($statusList->length){
            $status = $statusList->item(0)->getElementsByTagName('Status');
            $this->getShipmentError($status);
        } 

        if (count($shipmentData) == count($orderIds)) {
            ProcessLoggerHandler::logSuccess(
                $this->l('All labels generated.', 'GenerateLabelsActions')
            );
        } else {
            $error = sprintf(
                $this->l('%d/%d labels generated.', 'GenerateLabelsActions'),
                count($shipmentData),
                count($orderIds)
            );
            ProcessLoggerHandler::logError($error);
            $this->errors[] = $error;
        }

        $handler = new ActionsHandler();
        $handler->setConveyor(['updatedOrders' => $shipmentData]);
        $handler->addActions('sendTrackingEmails');
        $handler->process('GenerateLabels');

        $actionsResult = $handler->getConveyor();

        if (!empty($actionsResult['errors'])) {
            $this->errors[] = $this->module->l('Could not generate label.', 'AdminMondialrelayLabelsGenerationController');
            $this->errors = array_merge($this->errors, $actionsResult['errors']);
            $this->warnings[] = $this->module->l('Please [a] Check requirements [/a] to verify if all settings are OK.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayHelp') . '#mondialrelay_requirements-results', 'target' => 'blank'));
            return false;
        } else {
            $this->confirmations[] = $this->module->l('Label generated; see the [a] "Labels History" [/a] tab to download it.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayLabelsHistory'), 'target' => 'blank'));
        }

        ProcessLoggerHandler::saveLogsInDb();

      

        return true;
    }

    public function getShipmentError($statusList)
    {
        foreach ($statusList as $status) {
            $error = $status->getAttribute('Code') . ' - ' .$status->getAttribute('Message');
            if($status->getAttribute('Code') == 0 || $status->getAttribute('Level') == 'Warning') {
                $this->warnings[] = $error;
            } else {
                $this->errors[] = $error;
            }
        }

        return true;
    }

    public function setShipmentInformations($shipments)
    {
        $shipmentData = [];
        foreach ($shipments as $shipment) {
            $shipmentNumber = $shipment->getAttribute('ShipmentNumber');

            $labelElements = $shipment->getElementsByTagName('LabelValues');
            foreach ($labelElements as $labelElement) {
                if ($labelElement->getAttribute('Key') === 'MR.Expedition.ReferenceExterne') {
                    $referenceExterne = $labelElement->getAttribute('Value');
                    break;
                }
            }

            $outputElement = $shipment->getElementsByTagName('Output')->item(0);
            if ($outputElement) {
                $labelUrl = $outputElement->textContent;
            } else {
                $labelUrl = '';
            }

            $this->setSelectedRelay($referenceExterne, $labelUrl, $shipmentNumber);

            if(!$this->checkOrderValidity($referenceExterne, $shipmentNumber)){
                continue;
            }

            $this->updateOrderStatus($referenceExterne);
            
            $shipmentData[] = new Order($referenceExterne);
        }

        return $shipmentData;
    }

    public function updateOrderStatus($orderId)
    {
        $order = new order($orderId);

        // Change order state
        $newOrderStateId = (int)Configuration::get(Mondialrelay::OS_LABEL_GENERATED, null, null, $order->id_shop);
        if ($newOrderStateId) {
            $employee = Context::getContext()->employee;
            $orderHistory = new OrderHistory();
            $orderHistory->id_order = $order->id;
            $orderHistory->id_employee = ($employee && $employee->id) ? $employee->id : MondialrelaySelectedRelay::getOrderEmployee((int)$order->id);
            $orderHistory->changeIdOrderState($newOrderStateId, $order->id);
            $orderHistory->addWithemail();
        }
    }

    public function checkOrderValidity($OrderId, $trackingNumber)
    {
        $order = new Order($OrderId);
            if (!Validate::isLoadedObject($order)) {
                $error = sprintf(
                    $this->l('A label was generated, but the PrestaShop order to update was not found : %s', 'GenerateLabelsActions'),
                    $OrderId
                );

                ProcessLoggerHandler::logError($error);
                $this->errors[] = $error;
                return false;
            }

            $orderCarrier = new OrderCarrier($order->getIdOrderCarrier());
            if (!Validate::isLoadedObject($orderCarrier)) {
                $error = sprintf(
                    $this->l('A label was generated, but the PrestaShop order_carrier to update was not found : %s', 'GenerateLabelsActions'),
                    $OrderId
                );

                ProcessLoggerHandler::logError($error);
                $this->errors[] = $error;
            } else {
                $orderCarrier->tracking_number = $trackingNumber;
                $orderCarrier->save();
            }

            return true;
    }

    public function setSelectedRelay($orderId, $labelUrl, $expeditionNum)
    {
        $selectedRelay = MondialrelaySelectedRelay::getFromIdCart((new Order($orderId))->id_cart);
        $selectedRelay->label_url = $labelUrl;
        $selectedRelay->expedition_num = $expeditionNum;

        $selectedRelay->setTrackingUrl(
            Configuration::get(Mondialrelay::WEBSERVICE_ENSEIGNE),
            Configuration::get(Mondialrelay::WEBSERVICE_BRAND_CODE),
            Configuration::get('PS_LANG_DEFAULT'),
            Configuration::get(Mondialrelay::WEBSERVICE_KEY)
        );

        $selectedRelay->date_label_generation = date('Y-m-d H:i:s');

        $selectedRelay->save();
    }

    public function checkRelay($selectedRelay)
    {
        if (!Validate::isLoadedObject($selectedRelay)) {
            $this->errors[] = Tools::displayError('The object cannot be loaded (or found)');
            return false;
        }

        if (true !== ($error = $this->validateGeneration($selectedRelay))) {
            $this->errors[] = $error;
            return false;
        }

        return true;
    }

    public function checkShopAddress()
    {
        $service = MondialrelayService::getService('Label_Generation');
        if (!$service->checkExpeAddress()) {
            $errors = $service->getErrors();
            foreach ($errors['generic'] as $error) {
                ProcessLoggerHandler::logError($error);
                $this->errors[] = $error;
            }
            ProcessLoggerHandler::saveLogsInDb();
            return false;
        }

        return true;
    }

    public function processBulkGenerateSelectionLabels()
    {
        if(Configuration::get(MondialRelay::HOME_DELIVERY)){
            return $this->generateLabelApi2();
        } else {
            return $this->BulkGenerateSelectionLabelsApi1();
        }
    }
    
    /**
     * Prepare (get from DB) and send (return successes / errors), for multiple
     * orders
     */
    public function BulkGenerateSelectionLabelsApi1()
    {
        $selectionIds = $this->boxes;
        
        $orderIds = array();
        $errorFormat = $this->module->l('Order %s : %s', 'AdminMondialrelayLabelsGenerationController');
        foreach ($selectionIds as $id_mondialrelay_selected_relay) {
            $selectedRelay = new MondialrelaySelectedRelay($id_mondialrelay_selected_relay);
            if (!Validate::isLoadedObject($selectedRelay)) {
                $this->errors[] = Tools::displayError(sprintf(
                    'The MondialrelaySelectedRelay object %s cannot be loaded (or found)',
                    $id_mondialrelay_selected_relay
                ));
                continue;
            }
            
            if(!$selectedRelay->selected_relay_num){
                $this->errors[] = $this->module->l('To collect the labels for home delivery, please provide the API2 identifiers [a] Api 2 [/a]', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayAccountSettings') . '#mondialrelay_requirements-results', 'target' => 'blank'));

               continue;
            }
        
            if (true !== ($error = $this->validateGeneration($selectedRelay))) {
                $this->errors[] = sprintf(
                    $errorFormat,
                    $selectedRelay->id_order,
                    $error
                );
                continue;
            }
            
            $orderIds[] = $selectedRelay->id_order;
        }
        
        // Create the handler
        $handler = new ActionsHandler();
        
        // Set input data
        $handler->setConveyor(array(
            // The Actions chain was designed with bulk actions in mind, so we
            // have to pass an array
            'order_ids' => $orderIds,
        ));
        
        // Set actions to execute
        $handler->addActions('prepareData', 'generateLabels', 'sendTrackingEmails');

        // Process actions chain
        try {
            $handler->process('GenerateLabels');
        } catch (\Exception $e) {
            $this->errors[] = sprintf(
                $this->module->l('Could not generate label : %s', 'AdminMondialrelayLabelsGenerationController'),
                $e->getMessage()
            );
            
            $actionsResult = $handler->getConveyor();
            
            if (!empty($actionsResult['errors'])) {
                $this->errors = array_merge($this->errors, $actionsResult['errors']);
            }
            
            $this->warnings[] = $this->module->l('Please [a] Check requirements [/a] to verify if all settings are OK.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayHelp') . '#mondialrelay_requirements-results', 'target' => 'blank'));
            return false;
        }
        
        // Get process result, set errors if any
        $actionsResult = $handler->getConveyor();
        if (!empty($actionsResult['errors'])) {
            $this->errors = array_merge($this->errors, $actionsResult['errors']);
            $this->warnings[] = $this->module->l('Please [a] Check requirements [/a] to verify if all settings are OK.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayHelp') . '#mondialrelay_requirements-results', 'target' => 'blank'));
            return false;
        } else {
            $this->confirmations[] = $this->module->l('Labels generated; see the [a] "Labels History" [/a] tab to download them.', 'AdminMondialrelayLabelsGenerationController', array('href' => $this->context->link->getAdminLink('AdminMondialrelayLabelsHistory'), 'target' => 'blank'));
        }
    }
    
    /**
     * Basic validation before generating a label
     *
     * @param MondialrelaySelectedRelay $selectedRelay
     * @return string|true
     */
    public function validateGeneration($selectedRelay)
    {
        if ($selectedRelay->expedition_num) {
            return $this->module->l('A label was already generated for this order.', 'AdminMondialrelayLabelsGenerationController');
        }
        
        if (!$selectedRelay->id_order || !Validate::isLoadedObject(new Order($selectedRelay->id_order))) {
            return $this->module->l('This MR order has no associated PrestaShop order.', 'AdminMondialrelayLabelsGenerationController');
        }
        
        if (!$selectedRelay->package_weight || $selectedRelay->package_weight < Mondialrelay::MINIMUM_PACKAGE_WEIGHT) {
            return sprintf(
                $this->module->l('You must set a weight for the order (15 grams minimum).', 'AdminMondialrelayLabelsGenerationController'),
                Mondialrelay::MINIMUM_PACKAGE_WEIGHT
            );
        }
        
        return true;
    }
}
