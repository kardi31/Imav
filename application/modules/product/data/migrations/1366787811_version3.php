<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->removeColumn('product_attachment', 'deleted_at');
    }

    public function down()
    {
        $this->addColumn('product_attachment', 'deleted_at', 'timestamp', '25', array(
             'notnull' => '',
             ));
    }
}