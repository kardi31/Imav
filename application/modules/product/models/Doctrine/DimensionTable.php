<?php

/**
 * Product_Model_Doctrine_DimensionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Product_Model_Doctrine_DimensionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Product_Model_Doctrine_DimensionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Product_Model_Doctrine_Dimension');
    }
    
    public function getDimensionQuery() {
        $q = $this->createQuery('p');
        $q->addSelect('p.*');
//        $q->addSelect('pr.*');
//        $q->addSelect('ph.*');
//        $q->addSelect('pt.*');
//        $q->leftJoin('pro.Translation pt');
//        $q->leftJoin('pro.PhotoRoot pr');
//        $q->leftJoin('pro.Photos ph');
        return $q;
    }
}