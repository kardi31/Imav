<?php

/**
 * Offer_Model_Doctrine_BaseNoticeTemplate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $category_id
 * @property integer $notice_template_parameter_template_root_id
 * @property Offer_Model_Doctrine_Category $Category
 * @property Offer_Model_Doctrine_NoticeTemplateParameterTemplate $NoticeTemplateParameterTemplateRoot
 * @property Doctrine_Collection $Notices
 * 
 * @package    Admi
 * @subpackage Offer
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Offer_Model_Doctrine_BaseNoticeTemplate extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('offer_notice_template');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('notice_template_parameter_template_root_id', 'integer', 4, array(
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
        $this->hasOne('Offer_Model_Doctrine_Category as Category', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasOne('Offer_Model_Doctrine_NoticeTemplateParameterTemplate as NoticeTemplateParameterTemplateRoot', array(
             'local' => 'notice_template_parameter_template_root_id',
             'foreign' => 'id'));

        $this->hasMany('Offer_Model_Doctrine_Notice as Notices', array(
             'local' => 'id',
             'foreign' => 'notice_template_id'));
    }
}