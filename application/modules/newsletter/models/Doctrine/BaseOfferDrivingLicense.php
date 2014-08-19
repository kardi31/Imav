<?php

/**
 * Newsletter_Model_Doctrine_BaseOfferDrivingLicense
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $offer_id
 * @property integer $driving_license_id
 * @property Newsletter_Model_Doctrine_Offer $OfferDrivingLicense
 * 
 * @package    Admi
 * @subpackage Newsletter
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Newsletter_Model_Doctrine_BaseOfferDrivingLicense extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('job_offer_driving_license');
        $this->hasColumn('offer_id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('driving_license_id', 'integer', 4, array(
             'primary' => true,
             'type' => 'integer',
             'length' => '4',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Newsletter_Model_Doctrine_Offer as OfferDrivingLicense', array(
             'local' => 'offer_id',
             'foreign' => 'id'));
    }
}