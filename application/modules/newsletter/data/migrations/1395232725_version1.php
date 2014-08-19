<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('newsletter_group_translation', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '4',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'lang' => 
             array(
              'fixed' => '1',
              'primary' => '1',
              'type' => 'string',
              'length' => '2',
             ),
             ), array(
             'type' => 'MyISAM',
             'primary' => 
             array(
              0 => 'id',
              1 => 'lang',
             ),
             'collate' => 'utf8_general_ci',
             'charset' => 'utf8',
             ));
        $this->removeColumn('newsletter_group', 'name');
        $this->removeColumn('newsletter_group', 'created_at');
        $this->removeColumn('newsletter_group', 'updated_at');
        $this->removeColumn('newsletter_group', 'deleted_at');
    }

    public function down()
    {
        $this->dropTable('newsletter_group_translation');
        $this->addColumn('newsletter_group', 'name', 'string', '255', array(
             ));
        $this->addColumn('newsletter_group', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('newsletter_group', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('newsletter_group', 'deleted_at', 'timestamp', '25', array(
             'notnull' => '',
             ));
    }
}