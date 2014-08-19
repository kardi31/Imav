<?php

/**
 * Offer_Model_Doctrine_Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Offer
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Offer_Model_Doctrine_Category extends Offer_Model_Doctrine_BaseCategory
{
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
    
    public function setSlug($slug) {
        $this->_slug('slug', $slug);
    }
    
    public function getSlug() {
        return $this->_get('slug');
    }
    
    public function setDescription($description) {
        $this->_set('description', $description);
    }
    
    public function getDescription() {
        return $this->_get('description');
    }
 
    public function setUp() {
        parent::setUp();
        $this->hasOne('Default_Model_Doctrine_Metatag as Metatags', array(
            'local' => 'metatag_id',
        ));
    }
}