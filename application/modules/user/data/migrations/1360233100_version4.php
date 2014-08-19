<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version4 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('user_profile', 'user_profile_photo_root_id_media_photo_id');
    }

    public function down()
    {
        $this->createForeignKey('user_profile', 'user_profile_photo_root_id_media_photo_id', array(
             'name' => 'user_profile_photo_root_id_media_photo_id',
             'local' => 'photo_root_id',
             'foreign' => 'id',
             'foreignTable' => 'media_photo',
             ));
    }
}