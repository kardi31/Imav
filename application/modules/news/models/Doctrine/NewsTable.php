<?php

/**
 * News_Model_Doctrine_NewsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class News_Model_Doctrine_NewsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object News_Model_Doctrine_NewsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('News_Model_Doctrine_News');
    }
    
     public function getNewsQuery() {
        $q = $this->createQuery('n')
                ->addSelect('n.*')
                ->addSelect('nt.*')
                ->addSelect('pr.*')
                ->addSelect('p.*')
                ->leftJoin('n.Translation nt')
                ;
        
        $q->leftJoin('n.PhotoRoot pr');
        $q->leftJoin('n.Photos p');
        
        return $q;
    }
    
    public function getNewsCategoryQuery() {
        $q = $this->createQuery('n')
                ->addSelect('n.*')
                ->addSelect('nt.*')
                ->addSelect('pr.*')
                ->addSelect('c.*')
                ->addSelect('p.*')
                ->leftJoin('n.Translation nt')
                ->leftJoin('n.Category c')
                ;
        
        $q->leftJoin('n.PhotoRoot pr');
        $q->leftJoin('n.Photos p');
        
        return $q;
    }
    
     public function getNewsCommentQuery() {
        $q = $this->createQuery('n')
                ->addSelect('n.*')
                ->addSelect('nt.*')
                ->addSelect('pr.*')
                ->addSelect('c.*')
                ->addSelect('p.*')
                ->leftJoin('n.Translation nt')
                ->leftJoin('n.Comments c')
                ;
        
        $q->leftJoin('n.PhotoRoot pr');
        $q->leftJoin('n.Photos p');
        
        return $q;
    }
    
     public function getPublishNewsQuery() {
        $q = $this->createQuery('n')
                ->addSelect('n.*')
                ->addSelect('nt.*')
                ->addSelect('pr.*')
                ->addSelect('p.*')
                ->addSelect('c.*')
                ->leftJoin('n.Translation nt')
                ;
        
        $q->leftJoin('n.PhotoRoot pr');
        $q->leftJoin('n.Photos p');
//        $q->addWhere('n.publish = 1');
//        $q->addWhere('n.publish_date >= NOW()');
        $q->leftJoin('n.Comments c');
        return $q;
    } 
}