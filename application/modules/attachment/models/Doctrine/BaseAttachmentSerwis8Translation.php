<?php

/**
 * Attachment_Model_Doctrine_BaseAttachmentSerwis8Translation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $lang
 * @property string $title
 * @property string $slug
 * @property clob $description
 * @property Attachment_Model_Doctrine_AttachmentSerwis8 $Attachment
 * 
 * @package    Admi
 * @subpackage Attachment
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Attachment_Model_Doctrine_BaseAttachmentSerwis8Translation extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('attachment_serwis8_attachment_translation');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('lang', 'string', 64, array(
             'primary' => true,
             'type' => 'string',
             'length' => '64',
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

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Attachment_Model_Doctrine_AttachmentSerwis8 as Attachment', array(
             'local' => 'id',
             'foreign' => 'id'));
    }
}