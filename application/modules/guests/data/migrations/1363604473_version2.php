<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('guests_post', 'author_name', 'string', '255', array(
             ));
    }

    public function down()
    {

    }
}