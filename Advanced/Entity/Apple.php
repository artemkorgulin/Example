<?php
declare(strict_types = 1);

namespace Advanced\Entity;
use Advanced\Sources\Eating;
use Advanced\Sources\iThreeSource;
use Advanced\Sources\Removing;
use Advanced\Sources\Ripe;

/**
 * Class Apple
 *
 * @package Advanced\Sources\Apple
 */
class Apple implements iThreeSource, Removing, Ripe, Eating
{

    public function Apple() {}

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

    /**
     * @return bool ...
     */
    public function isActual(): bool
    {}

    /**
     * @return bool ...
     */
    public function isTreeLinked(): bool
    {}

    /**
     * @return bool ...
     */
    public function isActualTree(): bool
    {}
    /**
     * @return bool ...
     */
    public function isEatingToRemove(): bool
    {}
}
