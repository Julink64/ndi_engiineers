<?php

// src/Pweb/UserBundle/PwebUserBundle.php

namespace Pweb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PwebUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
