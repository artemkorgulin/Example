<?php
declare(strict_types = 1);

namespace Advanced\Entity;
use Advanced\Sources\Eating;
use Advanced\Sources\iThreeSource;
use Advanced\Sources\Removing;
use Advanced\Sources\Ripe;

/**
 * Class Human
 *
 * @package Advanced\Sources\Human
 */
class Human implements iThreeSource, Removing, Ripe, Eating
{
    public function Human() {}

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
