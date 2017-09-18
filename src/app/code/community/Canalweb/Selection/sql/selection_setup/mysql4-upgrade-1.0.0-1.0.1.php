<?php

/** @var $this Mage_Eav_Model_Entity_Setup */
$installer = $this;
$installer->startSetup();

$this->updateAttribute('catalog_product', 'selection_is_selected', 'used_in_product_listing', true);
$this->updateAttribute('catalog_product', 'selection_position', 'used_for_sort_by', true);

$installer->endSetup();
