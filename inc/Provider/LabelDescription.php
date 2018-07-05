<?php
if (! defined('_PS_VERSION_')) {
    exit();
}

/**
 * PostFinance Checkout Prestashop
 *
 * This Prestashop module enables to process payments with PostFinance Checkout (https://www.postfinance.ch).
 *
 * @author customweb GmbH (http://www.customweb.com/)
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache Software License (ASL 2.0)
 */

/**
 * Provider of label descriptor information from the gateway.
 */
class PostFinanceCheckout_Provider_LabelDescription extends PostFinanceCheckout_Provider_Abstract {

	protected function __construct(){
		parent::__construct('postfinancecheckout_label_description');
	}

	/**
	 * Returns the label descriptor by the given code.
	 *
	 * @param int $id
	 * @return \PostFinanceCheckout\Sdk\Model\LabelDescriptor
	 */
	public function find($id){
		return parent::find($id);
	}

	/**
	 * Returns a list of label descriptors.
	 *
	 * @return \PostFinanceCheckout\Sdk\Model\LabelDescriptor[]
	 */
	public function getAll(){
		return parent::getAll();
	}

	protected function fetchData(){
	    $labelDescriptorService = new \PostFinanceCheckout\Sdk\Service\LabelDescriptionService(PostFinanceCheckout_Helper::getApiClient());
		return $labelDescriptorService->all();
	}

	protected function getId($entry){
		/* @var \PostFinanceCheckout\Sdk\Model\LabelDescriptor $entry */
		return $entry->getId();
	}
}