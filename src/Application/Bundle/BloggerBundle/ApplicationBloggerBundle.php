<?php

/*
 * This file is part of the Sylius sandbox application.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Bundle\BloggerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationBloggerBundle extends Bundle
{
    public function getParent()
    {
        return 'SyliusBloggerBundle';
    }
}
