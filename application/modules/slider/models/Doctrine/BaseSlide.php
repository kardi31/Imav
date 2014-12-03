<?php

/**
 * Slider_Model_Doctrine_BaseSlide
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $slider_id
 * @property string $transition
 * @property integer $slot_amount
 * @property integer $rotation
 * @property integer $transition_duration
 * @property integer $delay
 * @property string $target_href
 * @property string $target_type
 * @property integer $news_id
 * @property integer $stream_id
 * @property integer $photo_root_id
 * @property string $title
 * @property string $slug
 * @property clob $content
 * @property Slider_Model_Doctrine_Slider $Slider
 * @property Doctrine_Collection $Layers
 * @property Doctrine_Collection $Translation
 * @property Slider_Model_Doctrine_SlideLayer $SlideLayerRoot
 * 
 * @package    Admi
 * @subpackage Slider
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Slider_Model_Doctrine_BaseSlide extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('slider_slide');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('slider_id', 'integer', 11, array(
             'type' => 'integer',
             'length' => '11',
             ));
        $this->hasColumn('transition', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('slot_amount', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('rotation', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('transition_duration', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('delay', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('target_href', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('target_type', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('news_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('stream_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('photo_root_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('content', 'clob', null, array(
             'type' => 'clob',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Slider_Model_Doctrine_Slider as Slider', array(
             'local' => 'id',
             'foreign' => 'slide_root_id'));

        $this->hasMany('Slider_Model_Doctrine_SlideLayer as Layers', array(
             'local' => 'id',
             'foreign' => 'root_id'));

        $this->hasMany('Slider_Model_Doctrine_SlideTranslation as Translation', array(
             'local' => 'id',
             'foreign' => 'id'));

        $this->hasOne('Slider_Model_Doctrine_SlideLayer as SlideLayerRoot', array(
             'local' => 'id',
             'foreign' => 'slide_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'slug',
              2 => 'content',
             ),
             'tableName' => 'slider_slide_translation',
             'className' => 'SlideTranslation',
             ));
        $nestedset0 = new Doctrine_Template_NestedSet(array(
             'hasManyRoots' => true,
             ));
        $this->actAs($i18n0);
        $this->actAs($nestedset0);
    }
}