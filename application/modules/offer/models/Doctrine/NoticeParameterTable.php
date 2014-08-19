<?php

/**
 * Offer_Model_Doctrine_NoticeParameterTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Offer_Model_Doctrine_NoticeParameterTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Offer_Model_Doctrine_NoticeParameterTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Offer_Model_Doctrine_NoticeParameter');
    }
    
    public function findOneByParameterRootIdIdAndParameterTemplateId($parameterRootId, $parameterTemplateId) {
        $q = $this->createQuery('p')
                ->select('p.*')
                ->andWhere('p.root_id = ?', $parameterRootId)
                ->andWhere('p.parameter_template_id = ?', $parameterTemplateId)
                ;
        return $q->fetchOne();
    }
}