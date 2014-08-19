<?php

/**
 * Newsletter_Model_Doctrine_BaseProfileOffer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $offer_id
 * @property integer $profile_id
 * @property boolean $favourite
 * @property boolean $send
 * @property Newsletter_Model_Doctrine_Offer $ProfileOffer
 * 
 * @package    Admi
 * @subpackage Newsletter
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Newsletter_Model_Doctrine_BaseProfileOffer extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('job_profile_offer');
        $this->hasColumn('offer_id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('profile_id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('favourite', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('send', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Newsletter_Model_Doctrine_Offer as ProfileOffer', array(
             'local' => 'offer_id',
             'foreign' => 'id'));
    }
}