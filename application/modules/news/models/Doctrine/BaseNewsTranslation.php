<?php

/**
 * News_Model_Doctrine_BaseNewsTranslation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $lang
 * @property string $slug
 * @property string $title
 * @property clob $content
 * @property News_Model_Doctrine_News $News
 * 
 * @package    Admi
 * @subpackage News
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class News_Model_Doctrine_BaseNewsTranslation extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('news_news_translation');
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
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('title', 'string', 255, array(
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
        $this->hasOne('News_Model_Doctrine_News as News', array(
             'local' => 'id',
             'foreign' => 'id'));
    }
}