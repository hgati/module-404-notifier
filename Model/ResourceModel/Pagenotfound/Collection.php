<?php
namespace Hgati\Pagenotfound\Model\ResourceModel\Pagenotfound;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Hgati\Pagenotfound\Model\Pagenotfound', 'Hgati\Pagenotfound\Model\ResourceModel\Pagenotfound');
    }
}