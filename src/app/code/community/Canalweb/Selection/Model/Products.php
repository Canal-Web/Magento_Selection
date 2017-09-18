<?php
class Canalweb_Selection_Model_Products extends Mage_Catalog_Model_Product
{
    public function getItemsCollection($attribute, $limit, $orderAttribute = 'weight')
    {

        $collection = $this->getCollection()
            ->addAttributeToFilter($attribute, 1)
            ->addUrlRewrite()
            ->setOrder($orderAttribute,'ASC')
            ->setPageSize($limit)->setCurPage(1);
        return $collection;
    }
}
