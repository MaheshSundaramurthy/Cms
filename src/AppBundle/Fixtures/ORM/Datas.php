<?php

namespace AppBundle\Fixtures\ORM;

use AppBundle\Fixture\ORM\DataFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

/**
 * Class Datas
 */
class Datas extends DataFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }

    /**
     * {@inheritdoc}
     */
    protected function getResource()
    {
        return '/srv/api-platform/src/AppBundle/Resources/fixtures/{env}/datas.yml';
    }
}
