<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version7 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('user_group', 'description', 'clob', '', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('user_group', 'description');
    }
}