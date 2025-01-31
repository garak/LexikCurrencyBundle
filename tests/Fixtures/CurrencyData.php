<?php

namespace Lexik\Bundle\CurrencyBundle\Tests\Fixtures;

use Doctrine\Persistence\ObjectManager;
use Lexik\Bundle\CurrencyBundle\Entity\Currency;

use Doctrine\Common\DataFixtures\FixtureInterface;

/**
 * Tests fixtures class.
 *
 * @author Cédric Girard <c.girard@lexik.fr>
 */
class CurrencyData implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $values = [
            ['code' => 'EUR', 'rate' => 1],
            ['code' => 'USD', 'rate' => 1.3],
        ];

        foreach ($values as $data) {
            $currency = new Currency();
            $currency->setCode($data['code']);
            $currency->setRate($data['rate']);

            $manager->persist($currency);
        }

        $manager->flush();
    }
}
