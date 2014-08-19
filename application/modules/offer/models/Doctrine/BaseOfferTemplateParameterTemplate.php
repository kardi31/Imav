<?php

/**
 * Offer_Model_Doctrine_BaseOfferTemplateParameterTemplate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $parameter_template_id
 * @property Offer_Model_Doctrine_ParameterTemplate $ParameterTemplate
 * @property Offer_Model_Doctrine_OfferTemplate $OfferTemplate
 * 
 * @package    Admi
 * @subpackage Offer
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Offer_Model_Doctrine_BaseOfferTemplateParameterTemplate extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('offer_offer_template_parameter_template');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('parameter_template_id', 'integer', 4, array(
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
        $this->hasOne('Offer_Model_Doctrine_ParameterTemplate as ParameterTemplate', array(
             'local' => 'parameter_template_id',
             'foreign' => 'id'));

        $this->hasOne('Offer_Model_Doctrine_OfferTemplate as OfferTemplate', array(
             'local' => 'id',
             'foreign' => 'offer_template_parameter_template_root_id'));

        $nestedset0 = new Doctrine_Template_NestedSet(array(
             'hasManyRoots' => true,
             ));
        $this->actAs($nestedset0);
    }
}