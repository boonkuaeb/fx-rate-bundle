<?php
/**
 * Created by PhpStorm.
 * User: boonkuaeboonsutta
 * Date: 22/5/2018 AD
 * Time: 18:33
 */

namespace BK\FxRateBundle;

use BK\FxRateBundle\DependencyInjection\BKFxRateExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BKFxRateBundle extends Bundle
{

    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new BKFxRateExtension();
        }
        return $this->extension;
    }
}