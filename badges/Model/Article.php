<?php

namespace PhpMagazin\Badges\Model;

use OxidEsales\Eshop\Core\Registry;

class Article extends Article_parent
{
    /**
     * returns path to article badge
     * @return mixed
     */
    public function getBadge(){
        if($this->getFieldData('PHPMAGBADGE'))
            return Registry::getConfig()->getPictureUrl().Registry::getConfig()->getConfigParam('sPhpMagArticleBadgespath').$this->getFieldData('PHPMAGBADGE');
        return false;
    }
}