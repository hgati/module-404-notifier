<?php
namespace Hgati\Pagenotfound\Model;

class Pagenotfound extends \Magento\Framework\Model\AbstractModel implements PagenotfoundInterface, \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'hgati_pagenotfound';
 
    protected function _construct()
    {
        $this->_init('Hgati\Pagenotfound\Model\ResourceModel\Pagenotfound');
    }
 
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}