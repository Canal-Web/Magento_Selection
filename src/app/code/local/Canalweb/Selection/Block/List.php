<?php
class Canalweb_Selection_Block_List extends Mage_Catalog_Block_Product_Abstract
{
    protected $_itemCollection = null;

    public function getItems()
    {

        /* Définir sur quel attribut se fait la sélection */
        $attribut = $this->getAttribut();
        if (!$attribut)
        {
            Mage::log('no attribut :\'(');
            return false;
        }

        /* Définir le nombre de produits à prendre */
        $limit = $this->getLimit();
        if (!$limit)
        {
            Mage::log('no limit :\'(');
            return false;
        }

        if (is_null($this->_itemCollection))
        {
            $this->_itemCollection = Mage::getModel('selection/products')->getItemsCollection($attribut, $limit);
        }

        return $this->_itemCollection;
    }
}
