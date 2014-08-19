<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('article_article', 'created_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
        $this->addColumn('article_article', 'updated_at', 'timestamp', '25', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('article_article', 'created_at');
        $this->removeColumn('article_article', 'updated_at');
    }
}