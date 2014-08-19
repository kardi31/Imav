<?php

/**
 * Attachment_Model_Doctrine_BaseAttachmentSerwis7
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $filename
 * @property string $title
 * @property string $slug
 * @property clob $description
 * @property string $extension
 * @property integer $photo_root_id
 * @property Doctrine_Collection $Translation
 * 
 * @package    Admi
 * @subpackage Attachment
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Attachment_Model_Doctrine_BaseAttachmentSerwis7 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('attachment_serwis7_attachment');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('filename', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('extension', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('photo_root_id', 'integer', 4, array(
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
        $this->hasMany('Attachment_Model_Doctrine_AttachmentSerwis7Translation as Translation', array(
             'local' => 'id',
             'foreign' => 'id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'slug',
              2 => 'description',
             ),
             'tableName' => 'attachment_serwis7_attachment_translation',
             'className' => 'AttachmentSerwis7Translation',
             ));
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'updated' => 
             array(
              'disabled' => true,
             ),
             ));
        $this->actAs($i18n0);
        $this->actAs($timestampable0);
    }
}