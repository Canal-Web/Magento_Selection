<?php
$installer = $this;
$installer->startSetup();
$this->addAttribute(
    'catalog_product',
    'selection_is_selected',
    array (
        'type'              => 'int',
        'label'             => 'Produit dans la sélection ?',
        'input'             => 'select',
        'source'            => 'eav/entity_attribute_source_boolean',
        'class'             => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
    )
);
$this->addAttribute(
    'catalog_product',
    'selection_position',
    array (
        'type'              => 'int',
        'label'             => 'Position du produit',
        'input'             => 'text',
        'class'             => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
    )
);
$installer->endSetup();
?>
