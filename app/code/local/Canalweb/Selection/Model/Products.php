<?php
class Canalweb_Selection_Model_Products extends Mage_Catalog_Model_Product
{
    public function getItemsCollection($attribut, $limit)
    {

      $resource = Mage::getSingleton('core/resource');
      $readConnection = $resource->getConnection('core_read');

      $query="SELECT DISTINCT `e`.entity_id FROM `catalog_product_flat_1` AS `e`  INNER JOIN `catalog_product_entity_int` AS `at_status` ON (`at_status`.`entity_id` = `e`.`entity_id`) AND (`at_status`.`attribute_id` = '96') AND (`at_status`.`store_id` = 0) WHERE (at_status.value = 1)   and `e`.entity_id IN (select DISTINCT entity_id from catalog_product_entity_int where attribute_id=(select attribute_id from eav_attribute where attribute_code='".$attribut."') and value=1)";
      $results = $readConnection->fetchAll($query);
      $productIds=array();
      foreach($results as $res){
        $productIds[]=$res['entity_id'];
      }
      $collection = $this->getCollection()
        ->addAttributeToFilter('entity_id', array('in' => $productIds))
        ->addUrlRewrite()
        ->setPageSize($limit)->setCurPage(1);
/* 
        $collection = $this->getCollection()
                ->addAttributeToFilter('status', array('eq' => 1))
                ->addAttributeToFilter($attribut, array('eq' => 1))
                ->addUrlRewrite()
                ->setPageSize($limit)->setCurPage(1);
*/
        return $collection;
    }
}
