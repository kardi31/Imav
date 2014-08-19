<?php

/**
 * Newsletter_Model_Doctrine_BaseUniversity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $type_id
 * @property Doctrine_Collection $University
 * 
 * @package    Admi
 * @subpackage Newsletter
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Newsletter_Model_Doctrine_BaseUniversity extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('job_university');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('type_id', 'integer', 4, array(
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
        $this->hasMany('Newsletter_Model_Doctrine_UniversityStudy as University', array(
             'local' => 'id',
             'foreign' => 'university_id'));
    }
}