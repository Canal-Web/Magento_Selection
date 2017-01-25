<?php
class Canalweb_Selection_Block_List extends Mage_Catalog_Block_Product_Abstract
{
    protected $_itemCollection = null;

    public function getItems()
    {

        /* Define on which attribute making the selection */
        $attribut = $this->getAttribute();
        if (!$attribut) {
            Mage::log('CW SELECTION - no attribute specified :\'(');
            return false;
        }

        /* Define the amount of products we need to fetch */
        $limit = $this->getLimit();
        if (!$limit) {
            Mage::log('CW SELECTION - no limit specified :\'(');
        }

        /*
         * Define the criteria to order the collection
         * (not mandatory, based on weight if not specified)
         */
        $orderAttribute = $this->getOrderAttribute();

        if (is_null($this->_itemCollection)) {
            $this->_itemCollection = Mage::getModel('selection/products')->getItemsCollection($attribut, $limit, $orderAttribute);
        }

        return $this->_itemCollection;
    }
}
