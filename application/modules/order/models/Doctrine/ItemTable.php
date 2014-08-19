<?php

/**
 * Order_Model_Doctrine_ItemTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Order_Model_Doctrine_ItemTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Order_Model_Doctrine_ItemTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Order_Model_Doctrine_Item');
    }
    public function getItemQuery() {
        $q = $this->createQuery('i');
        $q->addSelect('i.*');
//        $q->addSelect('pr.*');
//        $q->addSelect('ph.*');
//        $q->addSelect('pt.*');
//        $q->leftJoin('p.Translation pt');
//        $q->leftJoin('pro.PhotoRoot pr');
//        $q->leftJoin('pro.Photos ph');
        return $q;
    }
}