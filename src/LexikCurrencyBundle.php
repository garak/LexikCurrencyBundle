<?php

namespace Lexik\Bundle\CurrencyBundle;

use Lexik\Bundle\CurrencyBundle\DependencyInjection\Compiler\AdapterPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class LexikCurrencyBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new AdapterPass());
    }
}
