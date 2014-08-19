<?php

/**
 * Offer_Model_Doctrine_CategoryPrice
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Offer
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Offer_Model_Doctrine_CategoryPrice extends Offer_Model_Doctrine_BaseCategoryPrice
{
    public static $periods = array(
        '1' => '1 month',
        '3' => '3 months'
    );
    
    public static function getAvailablePeriods() {
        return self::$periods;
    }
    
    public function setId($id) {
        $this->_set('id', $id);
    }
    
    public function getId() {
        return $this->_get('id');
    }
    
    public function setCategoryId($categoryId) {
        $this->_set('category_id', $categoryId);
    }
    
    public function getCategoryId() {
        return $this->_get('category_id');
    }
    
    public function setPeriod($period) {
        $this->_set('period', $period);
    }
    
    public function getPeriod() {
        return $this->_get('period');
    }
    
    public function setPrice($price) {
        $this->_set('price', $price);
    }
    
    public function getPrice() {
        return $this->_get('price');
    }
}