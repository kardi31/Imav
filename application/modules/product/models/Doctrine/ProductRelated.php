<?php

/**
 * Product_Model_Doctrine_ProductRelated
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Product
 * @author     Andrzej Wilczyński <and.wilczynski@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Product_Model_Doctrine_ProductRelated extends Product_Model_Doctrine_BaseProductRelated
{
     public function getCounter() {
        return $this->_get('counter');    
    }
    
    public function setCounter($counter) {
        $this->_set('counter', $counter);
    }
}