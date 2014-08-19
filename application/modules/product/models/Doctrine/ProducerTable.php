<?php

/**
 * Product_Model_Doctrine_ProducerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Product_Model_Doctrine_ProducerTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Product_Model_Doctrine_ProducerTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Product_Model_Doctrine_Producer');
    }
    
    public function getProducerQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('pr.*');
        $q->addSelect('ph.*');
        $q->addSelect('pt.*');
        $q->leftJoin('pro.Translation pt');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Photos ph');
        return $q;
    }
}