<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('slider_slide', 'slider_slide_photo_root_id_media_photo_id');
    }

    public function down()
    {
        $this->createForeignKey('slider_slide', 'slider_slide_photo_root_id_media_photo_id', array(
             'name' => 'slider_slide_photo_root_id_media_photo_id',
             'local' => 'photo_root_id',
             'foreign' => 'id',
             'foreignTable' => 'media_photo',
             ));
    }
}