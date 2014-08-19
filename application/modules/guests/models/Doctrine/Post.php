<?php

/**
 * Guests_Model_Doctrine_Post
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Guests
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Guests_Model_Doctrine_Post extends Guests_Model_Doctrine_BasePost
{
    public function getName() {
        return $this->_get('name');
    }
    
    public function isPublish() {
        return $this->_get('publish');
    }
    
    public function setPublish($publish = true) {
        $this->_set('publish', $publish);
    }
}