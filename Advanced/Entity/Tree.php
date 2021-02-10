<?php
declare(strict_types = 1);

namespace Advanced\Entity;
use Advanced\Sources\iThreeSource;
use Advanced\Sources\Removing;
use Advanced\Sources\Eating;
use Advanced\Sources\Ripe;

/**
 * Class Tree
 *
 * @package Advanced\Sources\Tree
 */
class Tree implements iThreeSource, Removing, Ripe, Eating
{
    public function Tree() {}

    /**
     * @return bool ...
     */
    public function getThree()
    {}

    /**
     * @return bool ...
     */
    public function getHand(): bool
    {}

    /**
     * @return bool ...
     */
    public function getRipe(): bool
    {}

    /**
     * @return bool ...
     */
    public function getEat(): bool
    {}

    /**
     * @return bool ...
     */
    public function getRemove(): bool
    {}
}
