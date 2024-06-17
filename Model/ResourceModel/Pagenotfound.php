<?php
namespace Hgati\Pagenotfound\Model\ResourceModel;

class Pagenotfound extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
    {
        $this->_init('hgati_pagenotfound','hgati_pagenotfound_id');
    }
}