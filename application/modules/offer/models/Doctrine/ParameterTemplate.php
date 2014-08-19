<?php

/**
 * Offer_Model_Doctrine_ParameterTemplate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Offer
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Offer_Model_Doctrine_ParameterTemplate extends Offer_Model_Doctrine_BaseParameterTemplate
{
    public static $unitTypes = array(
        'day' => 'Dni',
        'week' => 'Tygodnie',
        'month' => 'Miesiące',
        'year' => 'Lata',
        'amount' => 'Kwota',
        'percent' => 'Procenty',
        'bool' => 'Prawda / Fałsz',
        'list' => 'Lista'
    );
    
    public function setId($id) {
        $this->_set('id', $id);
    }
    
    public function getId() {
        return $this->_get('id');
    }
    
    public function setName($name) {
        $this->_set('name', $name);
    }
    
    public function getName() {
        return $this->_get('name');
    }
    
    public function setUnit($unit) {
        $this->_set('unit', $unit);
    }
    
    public function setDescription($description) {
        $this->_set('description', $description);
    }
    
    public function getDescription() {
        return $this->_get('description');
    }
    
    public function getUnit() {
        return $this->_get('unit');
    }
    
    public function setRange($range) {
        $this->_set('range', $range);
    }
    
    public function isRange() {
        return $this->_get('range');
    }
}