<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('invoice_item', 'item_type', 'string', '128', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('invoice_item', 'item_type');
    }
}